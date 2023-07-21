<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;




class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:2'],


        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'  => $request->role,


        ]);


        event(new Registered($user));

        Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
        if ($user->role === 'HO') {
            Alert::success('Reistration Successful!', 'Welcome');
            return redirect()->route('homeOwner');
        } else if ($user->role === 'HH') {
            Alert::success('Reistration Successful!', 'Welcome');
            return redirect()->route('houseAssistant');
        }



        // Alert::success('Reistration Successful!', 'Welcome to HomeAid');

        // return redirect()->route('home');
    }
}
