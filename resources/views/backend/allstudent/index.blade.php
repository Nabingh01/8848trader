@extends('backend.app')

@section('title')
    index
@endsection

@section('location')
    index
@endsection

@section('content')
@if (Auth::user()->is_admin == 9)
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link btn btn-primary btn-sm" href="/permitcourse">UnlockCourse</a>
                </li>
              </ul>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/students/create" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>
                                New Student</a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-center">All Students</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>email</th>
                                <th>Course</th>
                                <th>Country</th>
                                <th>First Installment</th>
                                <th>Second Installment</th>
                                <th>Third Installment</th>
                                <th>Fourth Installment</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($students as $students)
                                <tr>
                                    <td>{{ $students->id }}</td>
                                    <td>{{ $students->name }}</td>
                                    <td>{{ $students->contact }}</td>
                                    <td>{{ $students->email }}</td>
                                    <td>{{ $students->course }}</td>
                                    <td>{{ $students->country }}</td>
                                    <td>{{ $students->firstinstallment }}</td>
                                    <td>{{ $students->secondinstallment }}</td>
                                    <td>{{ $students->thirdinstallment }}</td>
                                    <td>{{ $students->fourthinstallment }}</td>
                                    <td>
                                        <form action="/students/{{ $students->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/students/{{ $students->id }}/edit" class="btn btn-sm btn-primary">
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