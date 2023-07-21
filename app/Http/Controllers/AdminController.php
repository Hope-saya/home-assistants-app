<?php

namespace App\Http\Controllers;

use App\Models\ApplicationSubmission;
use Illuminate\Http\Request;
use App\Models\JobPosting;
use App\Models\JobApplication;
use App\Models\Review;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function viewJobPostings()
    {
        $jobPostings = JobPosting::all();
        return view('dashboard.jobPostings.list-jobPostings', compact('jobPostings'));
    }

    public function viewJobApplications()
    {
        $jobApplications = JobApplication::all();
        return view('dashboard.jobApplications.list-jobApplications', compact('jobApplications'));
    }

    public function viewApplicationsSubmissions()
    {
        $applicationSubmissions = ApplicationSubmission::all();
        return view('dashboards.ApplicationSubmissions.index', compact('applicationSubmissions'));
    }
    public function viewJobApplicationsSubmissions2()
    {
        $applicationSubmissions = ApplicationSubmission::all();
        return view('dashboards.ApplicationSubmissions.index2', compact('applicationSubmissions'));
    }
    public function viewReviews()
    {
        $reviews = Review::all();
        return view('dashboard.reviews.list-reviews', compact('reviews'));
    }
    public function viewUsers()
    {
        $users = User::all();
        return view('dashboard.users.list-users', compact('users'));
    }
}
