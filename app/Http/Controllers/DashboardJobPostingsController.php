<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;

class DashboardJobPostingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.job-postings.list-job-postings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.job-postings.add-job-posting');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $jobPosting = new JobPosting;
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'salary_range' => 'required',
            'description' => 'required',

        ]);
        $jobPosting->title = $request->input('title');
        $jobPosting->status = $request->input('status');
        $jobPosting->salary_range = $request->input('salary_range');
        $jobPosting->description = $request->input('description');
        $jobPosting->save();


        return redirect()->route('dashboards.job-postings')->with('success', 'Job Posting Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $jobPosting = JobPosting::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('dashboard.job-postings.edit-job-posting');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $jobPosting = JobPosting::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'salary_range' => 'required',
            'description' => 'required',

        ]);
        $jobPosting->title = $request->input('title');
        $jobPosting->status = $request->input('status');
        $jobPosting->salary_range = $request->input('salary_range');
        $jobPosting->description = $request->input('description');
        $jobPosting->save();

        return redirect()->route('dashboards.job-postings')->with('success', 'Job Posting Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $jobPosting = JobPosting::findOrFail($id);
        $jobPosting->delete();

        return redirect()->route('dashboards.job-postings')->with('success', 'Job Posting Deleted');
    }
}
