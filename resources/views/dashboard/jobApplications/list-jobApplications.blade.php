@extends('layouts.dashboard');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Job Postings</h4>
            <p class="card-description">
              Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                  
                    <th>
                      ID
                    </th>
                    <th>
                      JOB ID
                    </th>
                    <th>
                      USER ID
                    </th>
                    <th>
                      title
                    </th>
                    <th>
                      Salary Range
                    </th>
                    <th>
                      Location
                    </th>
                    <th>
                      Contact
                    </th>
                    <th>
                      Skillset
                    </th>
                    <th>
                      About
                    </th>
                    <th>
                      Availability
                    </th>
                    <th>
                      DateCreated
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($jobApplications as $jobApplication)
                  <tr>
                    <td >
                      {{$jobApplication->id}}
                    </td>
                    <td >
                      {{$jobApplication->job_id}}
                    </td>
                    <td>
                      {{$jobApplication->user_id}}
                    </td>
                    <td >
                      {{$jobApplication->title}}
                   
                      {{$jobApplication->salary_range}}
                    </td>
                    <td>
                      {{$jobApplication->location}}
                    </td>
                    <td>
                      {{$jobApplication->contact}}
                    </td>
                    <td >
                      {{$jobApplication->skillset}}
                    </td>
                    <td >
                      {{$jobApplication->about}}
                    </td>
                    <td >
                      {{$jobApplication->availability}}
                    </td>
                    <td>{{ date('Y-m-d', strtotime($jobApplication->created_at)) }}</td>
                    <td>
                      <a href="jobApplications/{{$jobApplication->id}}" class="btn btn-primary">Show</a>
                      <a href="jobApplications/{{$jobApplication->id}}/edit" class="btn btn-primary">Edit</a>
                      <form action="jobApplications/{{$jobApplication->id}}" method="post" class="d-inline">
                          {{ csrf_field() }}
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
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
