@extends('layouts.dashboard');

@section('content')

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Edit A User</h2>
          
           
            <form class="forms-sample" method="POST" action="{{ route('users.update', $user->id) }}">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name" placeholder="Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" value="{{ $user->email }}" name="email" placeholder="Email">
                  </div>
                </div>
              </div>
              {{-- <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="password_confirmation">Password </label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                  </div>
                </div>
              </div> --}}

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
        </div>


</div>

@endsection