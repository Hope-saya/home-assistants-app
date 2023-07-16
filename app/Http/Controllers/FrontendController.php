<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FrontendController extends Controller
{
    //
    //
    public function homePage()
    {
        return view('frontend.home');
    }

    // //Auth
    // public function jobPostingsBlog()
    // {

    //     return view('frontend.jobPostingsBlog');
    // }

    // public function jobApplicationsBlog()
    // {
    //     return view('frontend.jobApplicationsBlog');
    // }
    //Auth

    public function contactUs()
    {
    }

    public function blog()
    {
    }

    public function jobPosting()
    {
    }
}
