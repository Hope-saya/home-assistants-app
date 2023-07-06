<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class DashboardJobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.job-applications.list-job-applications');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.job-applications.add-job-application');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $job_application = new JobApplication;
        $request->validate([
            'user_id' => 'required',
            'job_id' => 'required',
            'date' => 'required',
            'documents' => 'required',
            'availability' => 'required',


        ]);
        $job_application->user_id = $request->input('user_id');
        $job_application->job_id = $request->input('job_id');
        $job_application->date = $request->input('date');
        $job_application->documents = $request->input('documents');
        $job_application->availability = $request->input('availability');
        $job_application->save();

        return redirect()->route('dashboards.job-applications')->with('success', 'Job Application Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $job_application = JobApplication::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('dashboard.job-applications.edit-job-application');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $job_application = JobApplication::findOrFail($id);
        $request->validate([
            'user_id' => 'required',
            'job_id' => 'required',
            'date' => 'required',
            'documents' => 'required',
            'availability' => 'required',
        ]);

        $job_application->user_id = $request->input('user_id');
        $job_application->job_id = $request->input('job_id');
        $job_application->date = $request->input('date');
        $job_application->documents = $request->input('documents');
        $job_application->availability = $request->input('availability');
        $job_application->save();

        return redirect()->route('dashboards.job-applications')->with('success', 'Job Application Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $job_application = JobApplication::findOrFail($id);
    }
}
