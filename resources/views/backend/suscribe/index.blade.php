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
                    <h1 class="text-center">Subscription</h1>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First_Name</th>
                                <th>Last_Name</th>
                                <th>contact</th>
                                <th>Email</th>
                                <th>interested course</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($suscribtion as $suscribtion)
                                <tr>
                                    <td>{{ $suscribtion->id }}</td>
                                    <td>{{ $suscribtion->fname }}</td>
                                    <td>{{ $suscribtion->lname }}</td>
                                    <td><a href="tel:{{ $suscribtion->contact }}">{{ $suscribtion->contact }}</a></td>
                                    <td><a href="mailto:{{ $suscribtion->email}}">{{ $suscribtion->email}}</a></td>
                                    <td>{{ $suscribtion->allcourse->name}}</td>
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