@extends('layouts.blogs')

@section('content')
<nav>
  <div class="filter-container">
    <i class="filter-icons">➕</i><a href="{{ route('jobPostings.store') }}">Create New Job Postings Blog</a>
    <a href="{{ route('homeOwner') }}" class="dashboard-link">
      <i class="dashboard-icon fas fa-tachometer-alt"></i> Go to my Dashboard
    </a>
  </div>
</nav>

<div class="job-postings-container">
  @foreach($jobPostings as $jobPosting)
  <div class="post">
    <h2>
      <i class="fas fa-user-circle"></i>
      {{ $jobPosting->title }}<span class="badge badge-danger">{{ $jobPosting->status }}</span>
    </h2>

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
      <a href="{{ route('apply',$jobPosting->id) }}" class="btn btn-danger btn-sm">Apply</a>
      <a href="/jobPostings/{{ $jobPosting->id }}">Read more...</a>
    </div>
  </div>
  @endforeach
</div>
@endsection
