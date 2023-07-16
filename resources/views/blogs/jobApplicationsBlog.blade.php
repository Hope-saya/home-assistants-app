
@extends('layouts.blogs')

@section('content')
    
<nav>
  <div class="filter-container">
      
    <i class="filter-icons">➕</i><a href="{{ route('jobApplications.store') }}">Create New</a>
 
  </div>
</nav>
    @foreach($jobApplications as $jobApplication)
    <div class="post">

      <h2>
        <i class="fas fa-user-circle"></i>
        {{ $jobApplication->title }} </h2>
      {{-- </h2><span><button class="badge badge-danger"> {{$jobApplication->status}}</button></span></h2>    --}}
         
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
        <button class="btn btn-warning btn-sm">Message</button>
        <button class="btn btn-danger btn-sm">Apply</button>
        <a href="/jobApplications/{{ $jobApplication->id }}">Read more...</a>
  
    </div>
    @endforeach
@endsection