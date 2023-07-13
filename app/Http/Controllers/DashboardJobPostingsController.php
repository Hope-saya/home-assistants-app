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
        $jobPostings = JobPosting::all();
        return view('dashboard.jobPostings.list-jobPostings', compact('jobPostings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.jobPostings.add-jobPosting');
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
            'location' => 'required',
            'contact' => 'required',

        ]);
        $jobPosting->title = $request->input('title');
        $jobPosting->status = $request->input('status');
        $jobPosting->salary_range = $request->input('salary_range');
        $jobPosting->description = $request->input('description');
        $jobPosting->location = $request->input('location');
        $jobPosting->contact = $request->input('contact');
        $jobPosting->save();


        return redirect()->route('home')->with('success', 'Job Posting Added');
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
        $jobPosting = JobPosting::findOrFail($id);

        return view('dashboard.jobPostings.edit-jobPosting', compact('jobPosting'));
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
            'location' => 'required',
            'contact' => 'required',

        ]);
        $jobPosting->title = $request->input('title');
        $jobPosting->status = $request->input('status');
        $jobPosting->salary_range = $request->input('salary_range');
        $jobPosting->description = $request->input('description');
        $jobPosting->location = $request->input('location');
        $jobPosting->contact = $request->input('contact');
        $jobPosting->save();

        return redirect()->route('dashboards.jobPostings')->with('success', 'Job Posting Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $jobPosting = jobPosting::find($id);
        if ($jobPosting) {
            $jobPosting->delete();
            return redirect()->route('dashboards.jobPostings')->with('success', 'Job Posting Deleted');
        } else {
            return redirect('dashboards.jobPostings')->with('status', 'jobPosting not found');
        }
    }
}
