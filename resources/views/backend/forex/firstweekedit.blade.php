@extends('backend.app')

@section('title')
    edit
@endsection

@section('location')
    edit   
@endsection

@section('content')
@if (Auth::user()->is_admin == 9)
<div class="container mt-4">
    <h4>First Week</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <a href="/firstweek" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/firstweek/{{ $firstweek->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name"> Subject <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $firstweek->name }}">
                        </div>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor" class="form-control" name="description"  rows="3">{!! $firstweek->description!!}</textarea>
                        </div>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-save"></i>
                            update
                        </button>
                    </form>
                        <div class="py-5">
                            @if (session('message'))
                                <div class="alert alert-success alert-sm">
                                    {{ session('message') }}
                                </div>
                            @endif
                         </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection