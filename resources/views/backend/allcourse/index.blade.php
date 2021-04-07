@extends('backend.app')

@section('title')
    All Course
@endsection

@section('location')
    All course
@endsection

@section('content')
@if (Auth::user()->is_admin == 9)
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/allcourses/create" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>
                                New courses</a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-center">Courses</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($allcourse as $allcourse)
                                <tr>
                                    <td>{{ $allcourse->id }}</td>
                                    <td>{{ $allcourse->name }}</td>
                                    <td>
                                        <form action="/allcourses/{{ $allcourse->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/allcourses/{{ $allcourse->id }}/edit" class="btn btn-sm btn-primary">
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
@endif
@endsection