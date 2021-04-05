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
                                @foreach ($permit as $key=>$permit)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $permit->name }}</td>
                                    <td>{{ $permit->email }}</td>
                                    <td>{{ $permit->is_admin }}</td>
                                    <td>
                                        <form action="/permitcourse/{{ $permit->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/permitcourse/{{ $permit->id }}/edit" class="btn btn-sm btn-primary">
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