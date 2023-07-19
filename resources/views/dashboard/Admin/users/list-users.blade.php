@extends('layouts.dashboard');

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Users List</h4>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Date Joined</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                <td>
                  
                  <a href="users/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('users.delete', $user->id) }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @csrf
                    @method('DELETE')
            
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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
