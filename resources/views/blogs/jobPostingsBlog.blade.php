@extends('layouts.blogs')

@section('content')

<nav>
  <div class="filter-container">
      
    <i class="filter-icons">➕</i><a href="{{ route('jobPostings.store') }}">Create New</a>
 
  </div>
</nav>
    
    @foreach($jobPostings as $jobPosting)
    <div class="post">
      <h2>
        <i class="fas fa-user-circle"></i>
        {{ $jobPosting->title }}<span class="badge badge-danger">{{ $jobPosting->status }}</span> </h2>
     
       
        <p> Ksh.{{ $jobPosting->salary_range }}</p>
        <p>
          <i class="fas fa-map-marker-alt"></i>
          {{ $jobPosting->location }}
        <h2>Description</h2>
        <p>{{ $jobPosting->description }}</p>
       
        <p>
         <span class="green-text">{{ $jobPosting->contact }}
           {{ $jobPosting->skillset }}</span>
        </p>

        <button class="btn btn-warning btn-sm">Message</button>
        <button class="btn btn-danger btn-sm">Apply</button>
        <a href="/jobPostings/{{ $jobPosting->id }}">Read more...</a>
  
    </div>
    @endforeach
@endsection