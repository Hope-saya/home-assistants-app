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
                  
                    <th>ID</th>
                 
                    <th>USER ID</th>
                    <th>title</th>
                    <th>Salary Range</th>
                    <th>Location</th>
                    <th>Contact</th>
                    <th>Skillset</th>
                    <th>About</th>
                    <th>Availability</th>
                    <th>Date Created</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($jobApplications as $jobApplication)
                  <tr>
                    <td>{{ $jobApplication->id }}</td>
                 
                    <td>{{ $jobApplication->user_id }}</td>
                    <td>{{ $jobApplication->title }}</td>
                    <td>{{ $jobApplication->salary_range }}</td>
                    <td>{{ $jobApplication->location }}</td>
                    <td>{{ $jobApplication->contact }}</td>
                    <td>{{ $jobApplication->skillset }}</td>
                    <td>{{ $jobApplication->about }}</td>
                    <td>{{ date('Y-m-d', strtotime($jobApplication->created_at)) }}</td>
                    <td>
                    
                      <a href="jobApplications/{{$jobApplication->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      <form action="jobApplications/{{$jobApplication->id}}/destroy" method="post" class="d-inline" onclick="return confirm('Are you sure you want to delete this job posting?')">
                        <input type="hidden" name="_method" value="DELETE">
                          {{ csrf_field() }}
                          
                          {{-- @method('DELETE') --}}
                          {{-- <input type="number" value="{{ $jobApplication->id }}" name="jobApplicationId" hidden> --}}
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
