@extends('backend.app')

@section('title')
    messages
@endsection

@section('location')
    messages
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Messages</h1>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>message</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($message as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
                                    <td>{{ $message->message }}</td>
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