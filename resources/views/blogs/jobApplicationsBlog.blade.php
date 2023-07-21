@extends('layouts.blogs')

@section('content')
    
<nav>
  <div class="filter-container">
    <i class="filter-icons">➕</i><a href="{{ route('jobApplications.store') }}">Create New House Assistants Post</a>
    <a href="{{ route('houseAssistant') }}" class="dashboard-link">
      <i class="dashboard-icon fas fa-tachometer-alt"></i> Go to Dashboard
    </a>
  </div>
</nav>

<div class="job-applications-container">
  @foreach($jobApplications as $jobApplication)
  <div class="post">

   <div class="job-application">
  <h2>
  {{ $jobApplication->title }}
  </h2>
  <p>
    <i class="fas fa-user-circle"></i> {{ $jobApplication->user->name }}<span class="badge badge-danger">{{ $jobApplication->status }}</span>
    
    
  </p>
  <p>Reach me on: <span >{{ $jobApplication->phone}}</span></p>
</div>
    {{-- Uncomment the following lines if you want to show the status as a badge --}}
    {{-- <h2><span><button class="badge badge-danger">{{ $jobApplication->status }}</button></span></h2> --}}

    <p>Ksh.{{ $jobApplication->salary_range }}</p>
    <p>
      <i class="fas fa-map-marker-alt"></i>
      {{ $jobApplication->location }}
    </p>

    <h2>About</h2>
    <p>{{ $jobApplication->about }}</p>

    <p>
      <span class="green-text">{{ $jobApplication->availability }}
        {{ $jobApplication->skillset }}</span>
    </p>

    <div class="button-container">
      <a href="mailto:{{$jobApplication->user->email}}"><button class="btn btn-warning btn-sm">Message</button></a> 
      
     
    </div>

  </div>
  @endforeach
</div>
@endsection
