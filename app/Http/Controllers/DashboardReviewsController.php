<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reviews = Review::all();

        return view('dashboard.reviews.list-reviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($application_id)
    {
        //

        return view('dashboard.reviews.add-review', compact('application_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $id = Auth::id();

        $review = new Review();
        $request->validate([
            'comments' => 'required',
            'star_rating' => 'required',

        ]);
        $review->comments = $request->input('comments');
        $review->star_rating = $request->input('star_rating');
        $review->user_id = $id;
        $review->application_id = $request->input('application_id');
        $review->save();


        Alert::success('Review Added', 'Thank you for your feedback');
        return redirect()->route('home')->with('success', 'Review Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $review = Review::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $review = Review::findOrFail($id);
        return view('dashboard.reviews.edit-review', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $review = Review::findOrFail($id);
        $request->validate([
            'comments' => 'required',
            'name' => 'required',
            'star_rating' => 'required',
        ]);
        $review->comments = $request->input('comments');
        $review->name = $request->input('name');
        $review->star_rating = $request->input('star_rating');
        $review->save();


        Alert::success('Review Updated', 'Thank you for your feedback');
        return redirect()->route('dashboards.reviews')->with('success', 'Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $review = Review::findOrFail($id);
        $review->delete();

        Alert::success('Review Deleted', 'Thank you for your feedback');

        return redirect()->route('dashboards.reviews')->with('success', 'Review Deleted');
    }
}
