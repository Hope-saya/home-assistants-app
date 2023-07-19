<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\ApplicationSubmission;
use App\Models\JobPosting;


class ApplicationSubmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobPostings = JobPosting::all(); // Fetch data from the jobPostings table
        $applicationSubmissions = ApplicationSubmission::all(); // Fetch data from the applicationSubmissions table

        return view('dashboard.applicationSubmissions.list-applicationSubmissions', compact('applicationSubmissions', 'jobPostings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        $jobPosting = JobPosting::find($id);
        return view('dashboard.applicationSubmissions.apply')->with('jobPosting', $jobPosting);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $id = Auth::id();
        $applicationSubmission = new ApplicationSubmission;

        $request->validate([
            'file' => 'required',
            'date' => 'required',
            'textarea' => 'required',


        ]);
        // dd("called");
        $file = $request->file('file');
        $filePath = $file->store('application_submissions'); // This will store the file in the "storage/app/application_submissions" directory.

        $applicationSubmission = new ApplicationSubmission;
        $applicationSubmission->file = $filePath;
        $applicationSubmission->househelp_id = $id;
        $applicationSubmission->job_id = $request->input('job_id');
        $applicationSubmission->date = $request->input('date');
        $applicationSubmission->textarea = $request->input('textarea');

        $applicationSubmission->save();

        redirect()->route('jobApplicationsBlog')->with('success', 'Application Submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
