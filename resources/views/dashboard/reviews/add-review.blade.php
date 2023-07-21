@extends('layouts.dashboard');

@section('content')

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add a Review</h4>
           
            <form class="forms-sample" method="POST" action="{{ route('reviews.store') }}">
              @csrf

              <input type="hidden" id="application_id" name="application_id" value="{{$application_id}}">

              <div class="form-group">
                <label for="comments">Comments </label>
                <input type="text" class="form-control" name="comments" id="comments" placeholder="comments">
              </div>
              <div class="form-group">
                <label for="star_rating">Stars</label>
                <input type="text" class="form-control" name="star_rating" id="star_rating" placeholder="star_rating">
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