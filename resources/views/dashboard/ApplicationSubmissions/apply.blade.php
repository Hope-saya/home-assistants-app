@extends('layouts.dashboard');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Apply for a Job</h4>
      
          
            <form class="forms-sample" method="POST" action="{{ route('ApplicationSubmissions.store') }}" enctype="multipart/form-data">
              @csrf

              <input type="hidden" id="job_id" name="job_id" value="{{$jobPosting->id}}">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Upload Document</label>
                    <input type="file" id="file" name="file" >
                   
                </div>
                  <div class="col-6">
                  <div class="form-group">
                    <label for="date">When are you available to Start?</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="textarea">Anything more you want to say?</label>
                <textarea class="form-control"  name="textarea" id="textarea" rows="4"></textarea>
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