<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

use App\Models\Chat;
use App\Events\NewChatMessage;


class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        if ($message) {
            $chat = new Chat();
            $chat->user_id = auth()->id();
            $chat->message = $message;
            $chat->save();

            event(new NewChatMessage($chat));
        }

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function getMessages()
    {
        $messages = Chat::with('user')->get();
        return response()->json($messages);
    }
}
