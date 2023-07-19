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
                    <th>FILES</th>
                    <th>OTHER INFORMATION</th>
                    
                  </tr>
                </thead>

                <tbody>
                  @foreach($ApplicationSubmissions as $ApplicationSubmission)
                  <tr>
                    <td>{{ $ApplicationSubmission->id }}</td>
                 
                    <td>{{ $jobPosting->job_id }}</td>
                    <td>{{ $ApplicationSubmission->househelp_id }}</td>
                    <td>{{ date('Y-m-d', strtotime($ApplicationSubmission->date)) }}</td>
                    <td>{{ $ApplicationSubmission->files }}</td>
                    <td>
                    
                        <button class="btn btn-danger btn-sm" value=" " type="submit">Hire</button>
                        <button class="btn btn-danger btn-sm" value=" " type="submit">Reject</button>
                      
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
