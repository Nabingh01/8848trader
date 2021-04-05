@extends('backend.app')

@section('title')
    Notice
@endsection

@section('location')
    Notice
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/notice/create" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>
                                New Notice</a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-center">Notice</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Notice</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($notice as $key=>$notice)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $notice->name }}</td>
                                    <td>
                                        <form action="/notice/{{ $notice->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/notice/{{ $notice->id }}/edit" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                            edit
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                            Delete
                                        </button>
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
@endsection