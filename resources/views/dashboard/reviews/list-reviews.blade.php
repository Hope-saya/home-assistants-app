@extends('layouts.dashboard');

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">View Reviews Made </h4>
     
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>Rated Person</th>
                <th>Job Title</th>
                <th>comments</th>
                <th>star_rating</th>
                <th></th>
             
               
              </tr>
            </thead>
            <tbody>
              @foreach($reviews as $review)
              <tr>
               <td>{{$review->id}}</td>
                <td>{{$review->user->name}}</td>
                <td>
                 {{$review->application->jobPosting->user->name}}
                 
                </td>
                <td>
                  {{$review->application->jobPosting->title}}
              </td>
                <td>{{$review->comments}}</td>
                <td>{{$review->star_rating}}</td>
            
                <td>{{ date('Y-m-d', strtotime($review->created_at)) }}</td>
                
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
