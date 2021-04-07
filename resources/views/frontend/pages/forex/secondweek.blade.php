@extends('backend.app')
@section('content')
@if (Auth::user()->is_admin>2)
<div>
    @foreach ($secondweek as $secondweek)
    @if (Auth::user()->is_admin == 9)
    <form action="/secondweek/{{ $secondweek->id }}" method="post">
        @csrf
        @method('delete')
        <a href="/secondweek/{{ $secondweek->id }}/edit" class="btn btn-sm btn-primary">
            <i class="fas fa-edit"></i>
            edit
        </a>
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="fas fa-trash-alt"></i>
            Delete
        </button>
        </form>
    @endif
    <div class="container d-flex flex-column justify-content-center align-items-center py-5">
        <h2>{{ $secondweek->name }}</h2>
    </div>  
    <div class="container">
        <p>{!! $secondweek->description !!}</p>
    </div>
    @endforeach
</div>
@else
    <div class="container text-center ">
        <p class="text-danger" style="font-size: 2rem;">Oops  <i class="fas fa-exclamation"></i></p>
        <p class="text-danger"> You have not joined our company <br>
            <h2 class="text-danger">Or</h2>
            <span class="text-danger">You have not cleared your second installment.</span>
        </p>
    </div>
@endif
@endsection