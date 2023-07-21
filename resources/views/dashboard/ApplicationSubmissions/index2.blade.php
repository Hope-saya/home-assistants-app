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
                    <th>ACTION</th>
                    
                    
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
                    <td>{{ $ApplicationSubmission->date_of_verdict }}</td>
                    <td>{{ $ApplicationSubmission->end_of_contract }}</td>
                  
                    

                    <td> 
                      @if($ApplicationSubmission->verdict == 'Accepted')
                      <a href="reviews/create/{{$ApplicationSubmission->id}}">Leave a Review</a>
                      @endif
                    </td>
                    <td>

                      
                     
                      <form action="{{ route('hire', $ApplicationSubmission->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button class="btn btn-warning btn-sm" type="submit">Hire</button>
                    </form>
                
                    <form action="{{ route('reject', $ApplicationSubmission->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Reject</button>
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
