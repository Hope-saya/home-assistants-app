@extends('layouts.dashboard');

@section('content')

<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reviews</h4>
        
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>comments</th>
                <th>star_rating</th>
               
              </tr>
            </thead>
            <tbody>
              @foreach($reviews as $review)
              <tr>
               <td>{{$review->id}}</td>
                <td>{{$review->name}}</td>
                <td>{{$review->comments}}</td>
                <td>{{$review->star_rating}}</td>
            
                <td>{{ date('Y-m-d', strtotime($review->created_at)) }}</td>
                <td>
                  <a href="reviews/{{$review->id}}" class="btn btn-primary btn-sm">Show</a>
                  <a href="reviews/{{$review->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <form action="reviews/{{$review->id}}" method="post" class="d-inline">
                      {{ csrf_field() }}
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
                  </td>
              </tr>
             @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>


@endsection
