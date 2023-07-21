<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardJobApplicationsController extends Controller
{




    /**
     * 
     * Display a listing of the resource.
     */
    public function index()
    { //// Get the authenticated user
        $user = Auth::user();

        // Fetch only the job postings related to the authenticated user
        $jobApplications = JobApplication::where('user_id', $user->id)->get();

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
        // $user = Auth::user();
        $user_id = Auth::id();

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
            'status' => 'required',
            'phone' => 'required',
        ]);

        $jobApplication->title = $request->input('title');
        $jobApplication->salary_range = $request->input('salary_range');
        $jobApplication->location = $request->input('location');
        $jobApplication->contact = $request->input('contact');
        $jobApplication->skillset = $request->input('skillset');
        $jobApplication->about = $request->input('about');
        $jobApplication->availability = $request->input('availability');
        $jobApplication->status = $request->input('status');
        $jobApplication->phone = $request->input('phone');

        $jobApplication->user_id = $user_id;

        $jobApplication->save();
        Alert::success('Success', 'Job Application Added Successfully');
        return redirect()->route('jobApplications.list');
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
    public function edit($id)
    {
        //
        $jobApplication = JobApplication::with('user')->find($id);
        return view('dashboard.jobApplications.edit-jobApplication', compact('jobApplication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user_id = Auth::id();
        // Find the existing JobApplication by its ID
        $jobApplication = JobApplication::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'salary_range' => 'required',
            'location' => 'required',
            'contact' => 'required',
            'skillset' => 'required',
            'about' => 'required',
            'availability' => 'required',
            'status' => 'required',

            'phone' => 'required',



        ]);
        $jobApplication->title = $request->input('title');
        $jobApplication->salary_range = $request->input('salary_range');
        $jobApplication->location = $request->input('location');
        $jobApplication->contact = $request->input('contact');
        $jobApplication->skillset = $request->input('skillset');
        $jobApplication->about = $request->input('about');
        $jobApplication->availability = $request->input('availability');
        $jobApplication->status = $request->input('status');

        $jobApplication->phone = $request->input('phone');
        $jobApplication->user_id = $user_id;




        $jobApplication->save();

        Alert::success('Success', 'Job Application updated Successfully');

        return redirect()->route('jobApplications.list')->with('success', 'Job Application Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $jobApplication = jobApplication::find($id);
        if ($jobApplication) {
            $jobApplication->delete();
            Alert::success('Success', 'Job Application Added Successfully');
            return redirect()->route('jobApplications.list')->with('success', 'Job Posting Deleted');
        } else {
            Alert::error('Error', 'Job Application not found');
            return redirect('jobApplications.list')->with('status', 'jobApplication not found');
        }
    }
}
