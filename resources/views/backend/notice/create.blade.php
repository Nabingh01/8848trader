@extends('backend.app')

@section('title')
    Create
@endsection

@section('location')
    create   
@endsection

@section('content')
@if (Auth::user()->is_admin == 9)
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <a href="/notice" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/notice" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Notice</label>
                            <textarea id="editor" class="form-control" name="name"  rows="3"></textarea>
                        </div>
                        @error('name')
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
@endif
@endsection