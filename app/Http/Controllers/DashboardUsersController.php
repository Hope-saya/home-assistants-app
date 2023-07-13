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
        $users = User::all();
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
        return redirect()->route('home')->with('success', 'User Added');
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
    public function edit(user $user)
    {
        //
        return view('dashboard.users.edit-user');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::findOrFail($id);

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

        return redirect()->route('dashboards.users')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('dashboards.users')->with('success', 'User Deleted');
    }
}
