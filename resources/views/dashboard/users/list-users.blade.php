@extends('layouts.dashboard');

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users</h4>
        <p class="card-description">
          Add class <code>.table-hover</code>
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>Date Joined</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
               <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            
                <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                <td>
                  <a href="users/{{$user->id}}" class="btn btn-primary">Show</a>
                  <a href="users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>
                  <form action="users/{{$user->id}}" method="post" class="d-inline">
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
    </div>
</div>


@endsection
