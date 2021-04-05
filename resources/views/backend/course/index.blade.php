@extends('backend.app')

@section('title')
    Course
@endsection

@section('location')
    course
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/courses/create" class="btn btn-primary btn-sm">
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
                                <th>fee</th>
                                <th>description</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($course as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>
                                        <form action="/courses/{{ $course->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/courses/{{ $course->id }}/edit" class="btn btn-sm btn-primary">
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