@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>Update User</h5>
          </div>

          <div class="card-body">

            @include('includes.errors')

            <form class="" action="{{ route('user.update', $user->id) }}" method="post">
              @csrf @method('put')

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ ucfirst($user->name) }}">
              </div>

              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $user->email}}">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <button type="submit" class="btn btn-primary btn-block">Update</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
