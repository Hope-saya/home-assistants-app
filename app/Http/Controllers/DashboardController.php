<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobPosting;
use App\Models\Review;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function mainDashboard()
    {

        $user = Auth::user();

        // // Retrieve the currently authenticated user's ID...
        // $id = Auth::id();
        // dd(Auth::user()->get_current_user);


        $users = User::with('roles')->get();
        // $roles = Role::with('users')->get();
        $jobApplications = JobApplication::with('user')->get();
        $jobPostings = JobPosting::with('user')->get();
        $reviews = Review::with('user')->get();

        return view('dashboard.main', compact('users', 'jobApplications', 'jobPostings'));
        return redirect()->route('home')->with('success', 'User created successfully.');
    }
    public function homeOwner()
    {
        return view('dashboard.homeOwner');
    }

    public function houseAssistant()
    {
        return view('dashboard.houseAssistant');
    }
}
