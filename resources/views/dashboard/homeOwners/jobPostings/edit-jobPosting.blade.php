@extends('layouts.dashboard');

@section('content')

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Post A Job</h4>
           
            <form class="forms-sample" method="POST" action="{{ route('jobPostings.update',$jobPosting->id) }}">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" id="title" value="{{ $jobPosting->title }}" name="title" placeholder="Job title">
                  </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="salary_range">Salary Range</label>
                    <input type="text" class="form-control" id="salary_range" value="{{ $jobPosting->salary_range }}" name="salary_range" placeholder="">
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" value="{{ $jobPosting->description }}"name="description" placeholder="">
                  </div>
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="status">Status</label>
                      <select class="form-control" id="status" value="{{ $jobPosting->status }}"name="status">
                        <option>Pending</option>
                        <option>Open</option>
                        <option>Closed</option>
                      </select>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="location">location</label>
                    <input type="text" class="form-control" id="location" value="{{ $jobPosting->location }}" name="location" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" value="{{ $jobPosting->phone }}" name="phone" placeholder="">
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