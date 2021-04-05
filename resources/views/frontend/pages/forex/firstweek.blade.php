@extends('backend.app')
@section('content')
    <div>
        @foreach ($firstweek as $firstweek)
        <div class="container d-flex flex-column justify-content-center align-items-center py-5">
            <h2>{{ $firstweek->name }}</h2>
        </div>  
        <div class="container">
            <p>{!! $firstweek->description !!}</p>
        </div>
        @endforeach
    </div>
@endsection