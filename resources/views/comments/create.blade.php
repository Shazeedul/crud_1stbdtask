@extends('layouts.comment')
@section('content')
 
<div class="card">
  <div class="card-header">Create Customer Page</div>
  <div class="card-body">
    <div class="pull-right">
      <a class="btn btn-primary btn-sm" href="{{ route('comments.index') }}" title="Go back"> <i class="fas fa-backward "></i>Go Back </a>
    </div>
    <br>
      <form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>Confirm Password</label></br>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"></br>
        <label class="custom-file-label" for="image">Choose file</label></br>
        <input type="file" class="custom-file-input" id="image" name="image"></br></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection