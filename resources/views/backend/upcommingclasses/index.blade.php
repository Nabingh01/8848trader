@extends('backend.app')

@section('title')
    Upcomming coure
@endsection

@section('location')
    Upcomming course
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/upcourses/create" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>
                                Upcomming courses</a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-center"> Upcomming Courses</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Upcomming course</th>
                                <th>starting from</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($upcourse as $upcourse)
                                <tr>
                                    <td>{{ $upcourse->id }}</td>
                                    <td>{{ $upcourse->allcourse->name }}</td>
                                    <td>{{ $upcourse->date }}</td>
                                    <td>
                                        <form action="/upcourses/{{ $upcourse->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/upcourses/{{ $upcourse->id }}/edit" class="btn btn-sm btn-primary">
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