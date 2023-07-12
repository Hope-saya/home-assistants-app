@extends('layouts.dashboard');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description">
              Basic form elements
            </p>
            <form class="forms-sample" method="POST" action="{{ route('reviews.store') }}">
              @csrf>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="name">
              </div>
              <div class="form-group">
                <label for="comments">Comments </label>
                <input type="text" class="form-control" id="comments" placeholder="comments">
              </div>
              <div class="form-group">
                <label for="star_rating">Rate</label>
                <input type="password" class="form-control" id="star_rating" placeholder="star_rating">
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