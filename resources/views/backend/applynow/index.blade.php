@extends('backend.app')

@section('title')
    Applied Details
@endsection

@section('location')
    Applied Details
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Applied Details</h1>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>contact</th>
                                <th>email</th>
                                <th>course</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($apply as $apply)
                                <tr>
                                    <td>{{ $apply->id }}</td>
                                    <td>{{ $apply->name }}</td>
                                    <td>{{ $apply->contact }}</td>
                                    <td>{{ $apply->email}}</td>
                                    <td>{{ $apply->allcourse->name}}</td>
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