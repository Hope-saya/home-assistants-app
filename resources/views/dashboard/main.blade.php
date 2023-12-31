@extends('layouts.dashboards')


@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="home-tab">
      <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
          </li>
        </ul>
        
      </div>
      <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
          <div class="row">
            <div class="col-sm-12">
              <div class="statistics-details d-flex align-items-center justify-content-between">
                <div>
                  <p class="statistics-title">Users</p>
                  <h3 class="rate-percentage">{{ count($users) }}</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                </div>
                <div>
                  <p class="statistics-title">Job Applications</p>
                  <h3 class="rate-percentage">{{ count($jobApplications) }}</h3>
                  <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span></span></p>
                </div>
                <div>
                  <p class="statistics-title">Job Postings</p>
                  <h3 class="rate-percentage">{{ count($jobPostings) }}</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                </div>
                <div>
                  <p class="statistics-title">Application Submissions</p>
                  <h3 class="rate-percentage">{{ count($applicationSubmissions ?? []) }}</h3>
                  <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                </div>
                <div class="d-none d-md-block">
                  <p class="statistics-title">Reviews</p>
                  <h3 class="rate-percentage">{{ count($reviews ?? []) }}</h3>
                  <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span></span></p>
                </div>
                
                </div>
              </div>
            </div>
          </div> 




@endsection

