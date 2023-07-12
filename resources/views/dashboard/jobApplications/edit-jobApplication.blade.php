@extends('layouts.dashboard');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Post A Job Application</h4>
            <p class="card-description">
              Post A Job Application
            </p>
            <form class="forms-sample" method="POST" action="{{ route('jobApplications.store') }}">
              @csrf>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Job title">
                  </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="salary_range">Salary Expectation</label>
                    <input type="text" class="form-control" id="salary_range" name="salary_range" placeholder="">
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="about">About</label>
                    <input type="text" class="form-control" id="about" name="about" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="">
                  </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="availability">Availability</label>
                      <select class="form-control" id="availability" name="availability">
                        <option>Full-time</option>
                        <option>Part-time </option>
                        <option>Either</option>
                      </select>
                    </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="skillset">Skillset</label>
                      <select class="form-control" id="skillset" name="skillset">
                        <option>Babysitting</option>
                        <option>Laundry</option>
                        <option>All Inclusive</option>
                      </select>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="">
                  </div>
              </div>


              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
        </div>


</div>

@endsection