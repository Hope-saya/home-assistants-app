@extends('layouts.dashboard');

@section('content')
 
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Job Postings</h4>
           
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Job ID</th>
                    <th>User ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Salary Range</th>
                    <th>Location</th>
                    <th>Contact</th>
                    <th>Date Posted</th>
                  </tr>
                  
                </thead>

                <tbody>
                  @foreach($jobPostings as $jobPosting)
                  <tr>
                    <td>{{ $jobPosting->id }}</td>
                    <td>{{ $jobPosting->user_id }}</td>
                    <td> {{$jobPosting->title}}</td>
                    <td><label class="badge badge-danger"> {{$jobPosting->status}}</label></td>
                    <td>{{$jobPosting->description}}</td>
                    <td>{{ $jobPosting->salary_range }}</td>
                    <td>{{ $jobPosting->location }}</td>
                    <td>{{ $jobPosting->contact }}</td>
                    <td>{{ date('Y-m-d', strtotime($jobPosting->created_at)) }}</td>
                    <td>
                     
                      <a href="jobPostings/{{$jobPosting->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                     
   
                      <form action="jobPostings/{{$jobPosting->id}}/destroy" method="post" class="d-inline" onclick="return confirm('Are you sure you want to delete this job posting?')">
                        <input type="hidden" name="_method" value="DELETE">
                          {{ csrf_field() }}
                          
                          {{-- @method('DELETE') --}}
                          {{-- <input type="number" value="{{ $jobPosting->id }}" name="jobPostingId" hidden> --}}
                          <button class="btn btn-danger btn-sm" value="Delete User" type="submit"> Delete </button>
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


@endsection
