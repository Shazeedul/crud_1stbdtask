@extends('layouts.post')
@section('content')
<div class="card">
    <div class="card-header">Posts</div>
    <div class="card-body">
        <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br/>
        <br/>

        {{-- @if ($maessage = Session::get('status'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif --}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Customer Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {{-- @php $i=1;
                @endphp
                @foreach ($customer as $item)
                    
                
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><img src="{{ asset('storage/'.$item->image) }}" widh="50" height="50" alt="" title=""></td>
                    <td>
                        @if ($item->status==0)
                            <button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Deactive</button>
                        @else
                            <button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Active</button>
                        @endif
                    </td>
                    <td>
                            <a href="{{ route('customers.show', $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ route('customers.edit', $item->id) }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <form action="{{ route('customers.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach --}}
                @php $i=1;
                @endphp
                @foreach ($post as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td><img src="{{ asset('storage/'.$item->post_img) }}" widh="50" height="50" alt="" title=""></td>
                    <td>{{$item->customer->name}}</td>
                    <td><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Deactive</button></td>
                    <td>
                        <a href="{{ route('posts.show', $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ route('posts.edit', $item->id) }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection