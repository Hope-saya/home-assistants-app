@extends('layouts.dashboard');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Apply for a Job</h4>
      
          
            <form action="{{ route('applicationSubmissions.update', ['applicationSubmission' => $applicationSubmission->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" id="job_id" name="job_id" value="{{$jobPosting->id}}">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Upload Document</label>
                    <input type="file" id="file" name="file" value="{{$ApplicationSubmission->file}}">
                   
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="date">When are you available to Start?</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$ApplicationSubmission->date}}" placeholder="">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="textarea">Anything more you want to say?</label>
                <textarea class="form-control"  name="textarea" id="textarea" value="{{$ApplicationSubmission->textarea}}" rows="4"></textarea>
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