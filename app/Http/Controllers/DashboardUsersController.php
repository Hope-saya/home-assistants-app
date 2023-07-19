<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::with('roles')->get();

        return view('dashboard.users.list-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.users.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = new User;

        //Fields are required before submission
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        //Ive used the home route here coz it works. for
        return redirect()->route('users.list')->with('success', 'User Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
        $user = User::findOrFail($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $user = User::with('roles')->find($id);


        $this->authorize('update', $user);

        return view('dashboard.users.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::findOrFail($id);
        $this->authorize('update', $user);


        //Fields are required before submission
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');


        $user->save();

        return redirect()->route('users.list')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);
        $this->authorize('delete', $user);
        if ($user) {
            $user->delete();
            return redirect()->route('users.list')->with('success', 'User Deleted');
        } else {
            return redirect()->route('users.list')->with('error', 'User Not Found');
        }
        $user->delete();

        return redirect()->route('users.list')->with('success', 'User Deleted');
    }
}
