@extends('layouts.post')
@section('content')
 
<div class="card">
  <div class="card-header">Create Post Page</div>
  <div class="card-body">
    <div class="pull-right">
      <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}" title="Go back"> <i class="fas fa-backward "></i>Go Back </a>
    </div>
    <br>
      <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Title</label></br>
        <input type="text" name="title" id="postTitle" class="form-control"></br>
        <label>Description</label></br>
        <textarea name="description" id="" class="form-control" ></textarea></br>
        <label>Customer Name</label>
            <select class="form-control" id="customername" name="customer_id">
                <option selected>Open this select menu</option>
                @foreach ($customer as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        <label class="custom-file-label" for="image">Choose file</label></br>
        <input type="file" class="custom-file-input" id="image" name="post_img"></br></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection