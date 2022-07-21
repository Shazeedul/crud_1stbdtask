@extends('layouts.comment')
@section('content')
    <div class="card">
        <div class="card-header">Comments</div>
        <div class="card-body">
            <a href="{{ route('comments.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
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
                            <th>Comment</th>
                            <th>Post</th>
                            <th>User Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i=1;
                    @endphp
                    @foreach ($comments as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->comment}}</td>
                        <td>{{$item->post->title}}</td>
                        <td>{{$item->post->customer->name}}</td>
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
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection