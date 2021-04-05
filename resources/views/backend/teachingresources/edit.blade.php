@extends('backend.app')

@section('title')
    Create
@endsection

@section('location')
    create   
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <a href="/resources" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/resources/{{ $resource->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name"> Subject <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $resource->name }}">
                        </div>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="period"> period <span class="text-danger">*</span></label>
                            <input id="period" class="form-control" type="text" name="period" value="{{ $resource->period }}">
                        </div>
                        @error('period')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor" class="form-control" name="description"  rows="3"> {{ $resource->description }}</textarea>
                        </div>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="image"> Image <span class="text-danger">*</span></label>
                            <input id="image" class="form-control" type="file" name="image" value="{{ $resource->image }}">
                        </div>
                        <div class="mt-2">
                            <img src="{{ asset($resource->image)}}" alt="" width="120">
                        </div>
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="file"> File <span class="text-danger">*</span></label>
                            <input id="file" class="form-control" type="file" name="file" value="{{ $resource->file }}">
                        </div>
                        <div class="mt-2">
                            <img src="{{ asset($resource->file)}}" alt="" width="120">
                        </div>
                        @error('file')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-save"></i>
                            Update
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