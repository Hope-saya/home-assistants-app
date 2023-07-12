<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class DashboardJobApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobApplications = JobApplication::all();
        return view('dashboard.jobApplications.list-jobApplications', compact('jobApplications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.jobApplications.add-jobApplication');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $jobApplication = new JobApplication;
        $request->validate([
            'title' => 'required',
            'salary_range' => 'required',
            'location' => 'required',
            'contact' => 'required',
            'skillset' => 'required',
            'about' => 'required',
            'availability' => 'required',



        ]);
        $jobApplication->title = $request->input('title');
        $jobApplication->salary_range = $request->input('salary_range');
        $jobApplication->location = $request->input('location');
        $jobApplication->contact = $request->input('contact');
        $jobApplication->skillset = $request->input('skillset');
        $jobApplication->about = $request->input('about');
        $jobApplication->availability = $request->input('availability');



        $jobApplication->save();

        return redirect()->route('home')->with('success', 'Job Application Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $jobApplication = JobApplication::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('dashboard.jobApplications.edit-jobApplication');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $jobApplication = new JobApplication;
        $request->validate([
            'title' => 'required',
            'salary_range' => 'required',
            'location' => 'required',
            'contact' => 'required',
            'skillset' => 'required',
            'about' => 'required',
            'availability' => 'required',



        ]);
        $jobApplication->title = $request->input('title');
        $jobApplication->salary_range = $request->input('salary_range');
        $jobApplication->location = $request->input('location');
        $jobApplication->contact = $request->input('contact');
        $jobApplication->skillset = $request->input('skillset');
        $jobApplication->about = $request->input('about');
        $jobApplication->availability = $request->input('availability');



        $jobApplication->save();

        return redirect()->route('dashboards.jobApplications')->with('success', 'Job Application Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $jobApplication = JobApplication::findOrFail($id);
    }
}
