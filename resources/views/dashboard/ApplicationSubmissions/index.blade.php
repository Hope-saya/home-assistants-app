@extends('layouts.dashboard');

@section('content')

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Application Submissions</h4>
            
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                  
                    <th>ID</th>
                 
                    <th>JOB ID</th>
                    <th>HOUSEHELP_ID</th>
                    <th>START DATE</th>
                    <th>FILE</th>
                    <th>OTHER INFORMATION</th>
                    <th>VERDICT</th>
                    <th>DATE VERDICT WAS MADE</th>
                    <th>END OF CONTRACT</th>
                    <th>RATE</th>
                    
                    
                    
                  </tr>
                </thead>

                <tbody>
                  @foreach($applicationSubmissions as $ApplicationSubmission)
                  <tr>
                    <td>{{ $ApplicationSubmission->id }}</td>
                    
                    <td>{{ $ApplicationSubmission->job_id }}</td>
                   
                    <td>{{ $ApplicationSubmission->househelp_id }}</td>
                    <td>{{ date('Y-m-d', strtotime($ApplicationSubmission->date)) }}</td>
                    <td>
                      @if ($ApplicationSubmission->file)
                          <a href="{{ asset($ApplicationSubmission->file) }}" target="_blank">View Document</a>
                      @else
                          No document available.
                      @endif
                  </td>
                    <td>{{ $ApplicationSubmission->textarea }}</td>
                    <td>{{ $ApplicationSubmission->verdict }}</td>
                    <td></td>
                    <td></td>
                    <td> <a href="reviews/create/{{$ApplicationSubmission->id}}">Leave a Review</a></td>
                    <td> 
                      @can('update', $ApplicationSubmission)
                      <a href="applicationSubmissions/{{$ApplicationSubmission->id}}/edit}}" class="btn btn-warning btn-sm">Edit</a>
                      @endcan
                      @can('delete', $ApplicationSubmission)
                      <form action="applicationSubmissions/{{$ApplicationSubmission->id}}/destroy}}" method="post" class="d-inline" onclick="return confirm('Are you sure you want to delete this application submission?')">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                      </form>
                      @endcan
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
