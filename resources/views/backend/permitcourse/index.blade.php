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
                        <div class="col-md-8">
                            <h1 class="text-center">All SignIn</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>is_admin</th>
                                <th>action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($user as $key=>$user)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                    <td>{{ $user->is_admin }}</td>
                                    <td>
                                        <form action="/permitcourse/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/permitcourse/{{ $user->id }}/edit" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                            edit
                                        </a>
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