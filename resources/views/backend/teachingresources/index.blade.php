@extends('backend.app')

@section('title')
    index
@endsection

@section('location')
    index
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/resources/create" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>
                                new resource</a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-center">All resources</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>period</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($resource as $key=>$resource)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $resource->name }}</td>
                                    <td>{{ $resource->period }}</td>
                                    <td>
                                        <form action="/resources/{{ $resource->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/resources/{{ $resource->id }}/edit" class="btn btn-sm btn-primary">
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