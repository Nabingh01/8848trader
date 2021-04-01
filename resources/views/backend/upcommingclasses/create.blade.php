@extends('backend.app')

@section('title')
    Upcomming course
@endsection

@section('location')
    upcomming Course   
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <a href="/upcourses" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/upcourses" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="allcourse_id">Course</label>
                            <select id="allcourse_id" class="form-control" name="allcourse_id">
                                @foreach ($allcourse as $allcourse)
                                    <option value="{{ $allcourse->id }}">{{ $allcourse->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('course_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="date"> starting from<span class="text-danger">*</span></label>
                            <input id="date" class="form-control" type="date" name="date" value="{{ old('up_date') }}">
                        </div>
                        @error('date')
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