@extends('backend.app')

@section('title')
    Create
@endsection

@section('location')
    create   
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <a href="/courses" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/courses" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name"> Course Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="fee"> Course Fee <span class="text-danger">*</span></label>
                            <input id="fee" class="form-control" type="text" name="fee" value="{{ old('fee') }}">
                        </div>
                        @error('fee')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="description"> Course Description <span class="text-danger">*</span></label>
                            <input id="description" class="form-control" type="text" name="description" value="{{ old('description') }}">
                        </div>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="image">Course Image <span class="text-danger">*</span></label>
                            <input id="image" class="form-control" type="file" name="image" value="{{ old('image') }}">
                        </div>
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-save"></i>
                            Save
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
@endsection