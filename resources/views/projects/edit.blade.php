@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Customer Edit Page</div>
  <div class="card-body">
      
      <form action="{{ route('customers.update',$customer->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$customer->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$customer->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$customer->email}}" class="form-control"></br>
        <div class="form-group row">
          <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
              <h5> Status </h5>
          </label>
          <div class="form-group ">
              <div class="form-check">
                      <input class="form-check-input" type="radio" value="1" {{ ($customer->status=="1")? "checked" : "" }} name="status">
                      <label class="form-check-label">Active</label>
              </div>
              <div class="form-check">
                      <input class="form-check-input" type="radio" value="0" {{ ($customer->status=="0")? "checked" : "" }} name="status">
                      <label class="form-check-label">Deactive</label>
              </div>
          </div>
        </div></br>
        {{-- <input type="hidden" name="old_image" value="{{$customer->image}}"> --}}
        <img src="{{ asset('storage/'.$customer->image) }}" widh="70" height="70">
        <input type="file" accept="image/png, image/gif, image/jpeg" class="col-lg-10 form-control" id="image" placeholder="Image" name="image"></br></br>
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop