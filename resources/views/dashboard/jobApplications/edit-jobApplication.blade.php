@extends('layouts.dashboard');

@section('content')

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Post A Job Application</h4>
          
            <form class="forms-sample" method="POST" action="{{ route('jobApplications.update',$jobApplication->id) }}">
              @csrf>
              @method('PATCH')
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" id="title"value="{{ $jobApplication->title }}" name="title" placeholder="Job title">
                  </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="salary_range">Salary Expectation</label>
                    <input type="text" class="form-control" id="salary_range" value="{{ $jobApplication->salary_range }}"name="salary_range" placeholder="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" value="{{ $jobApplication->phone }}"name="phone" placeholder="phone">
                  </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="status">Status</label>
                      <select class="form-control" id="status" value="{{ $jobApplication->status }}"" name="status">
                        <option>Open to Work</option>
                        <option>Hired </option>
                      
                      </select>
                  
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="about">About</label>
                    <input type="text" class="form-control" id="about" value="{{ $jobApplication->about }}" name="about" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" value="{{ $jobApplication->location }}"name="location" placeholder="">
                  </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="availability">Availability</label>
                      <select class="form-control" id="availability" value="{{ $jobApplication->availability }}"name="availability">
                        <option>Full-time</option>
                        <option>Part-time </option>
                        <option>Either</option>
                      </select>
                    </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="skillset">Skillset</label>
                      <select class="form-control" id="skillset" value="{{ $jobApplication->skillset }}"name="skillset">
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
                    <input type="text" class="form-control" id="contact" value="{{ $jobApplication->contact }}" name="contact" placeholder="">
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