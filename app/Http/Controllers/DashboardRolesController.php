<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class DashboardRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('dashboard.roles.list-roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.roles.add-role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $role = new Role;
        $request->validate([
            'role' => 'required',

        ]);
        $role->role = $request->input('role');
        $role->save();

        return redirect()->route('dashboards.roles')->with('success', 'Role Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $role = role::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('dashboard.roles.edit-user');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $role = Role::findOrFail($id);

        $role = new Role;
        $request->validate([
            'role' => 'required',

        ]);
        $role->role = $request->input('role');
        $role->save();

        return redirect()->route('dashboards.roles')->with('success', 'Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('dashboards.roles')->with('success', 'Role Deleted');
    }
}
