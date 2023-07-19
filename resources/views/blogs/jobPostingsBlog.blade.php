@extends('layouts.blogs')

@section('content')

<nav>
  <div class="filter-container">
      
    <i class="filter-icons">➕</i><a href="{{ route('jobPostings.store') }}">Create New Job Postings Blog</a>
 
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
        <a href="{{ route('apply',$jobPosting->id) }}" class="btn btn-danger btn-sm" style="text-decoration: none; color: #fff; background-color: purple; padding: 8px 16px; border-radius: 4px;">Apply</a>
        <a href="/jobPostings/{{ $jobPosting->id }}">Read more...</a>
  
    </div>
    @endforeach
@endsection