@extends('layouts.blogs')

@section('content')
<nav>
  <div class="filter-container">
    <i class="filter-icons">➕</i><a href="{{ route('jobPostings.store') }}">Create New House Vacancy</a>
    <a href="{{ route('homeOwner') }}" class="dashboard-link">
      <i class="dashboard-icon fas fa-tachometer-alt"></i> Go to my Dashboard
    </a>
  </div>
</nav>

<div class="job-postings-container">
  @foreach($jobPostings as $jobPosting)
  <div class="post">
    <h2>
      
      {{ $jobPosting->title }}
    </h2>
    <p>
      <i class="fas fa-user-circle"></i>
      {{$jobPosting->user->name }} <span class="badge badge-danger">{{ $jobPosting->status }}</span>
    </p>
    <p>Ksh.{{ $jobPosting->salary_range }}</p>
    <p>
      <i class="fas fa-map-marker-alt"></i>
      {{ $jobPosting->location }}
    </p>

    <h2>Description</h2>
    <p>{{ $jobPosting->description }}</p>

    <p>
      <span class="green-text">{{ $jobPosting->contact }}
        {{ $jobPosting->skillset }}</span>
    </p>

    <div class="button-container">
      <button class="btn btn-warning btn-sm">Message</button>
      <a href="{{ route('apply',$jobPosting->id) }}" ><button class="btn btn-warning btn-sm">Apply</button></a>
      <a href="{{route('jobApplications.list')}}">Read more...</a>
    </div>
  </div>
  @endforeach
</div>
@endsection
