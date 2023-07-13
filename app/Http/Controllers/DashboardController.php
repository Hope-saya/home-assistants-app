<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobPosting;
use App\Models\Review;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function mainDashboard()
    {
        $users = User::with('roles')->get();
        // $roles = Role::with('users')->get();
        $jobApplications = JobApplication::with('user', 'jobPosting')->get();
        $jobPostings = JobPosting::with('user', 'jobApplications', 'reviews')->get();
        $reviews = Review::with('user', 'jobPosting')->get();

        return view('dashboard.main', compact('users', 'jobApplications', 'jobPostings', 'reviews'));
    }
}
