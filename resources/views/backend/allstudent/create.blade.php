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
                   <a href="/students" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/students" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name"> Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="contact"> Contact <span class="text-danger">*</span></label>
                            <input id="contact" class="form-control" type="text" name="contact" value="{{ old('contact') }}">
                        </div>
                        @error('contact')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="email"> Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="course"> course <span class="text-danger">*</span></label>
                            <input id="course" class="form-control" type="course" name="course" value="{{ old('course') }}">
                        </div>
                        @error('course')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="country"> Country <span class="text-danger">*</span></label>
                            <input id="country" class="form-control" type="country" name="country" value="{{ old('country') }}">
                        </div>
                        @error('country')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="firstinstallment">First Installment</label>
                            <select id="firstinstallment" class="form-control" name="firstinstallment">
                                <option>not cleared</option>
                                <option>cleared</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="secondinstallment">Second Installment</label>
                            <select id="secondinstallment" class="form-control" name="secondinstallment">
                                <option>not cleared</option>
                                <option>cleared</option>
                            </select>
                        </div><div class="form-group">
                            <label for="thirdinstallment">Third Installment</label>
                            <select id="thirdinstallment" class="form-control" name="thirdinstallment">
                                <option>not cleared</option>
                                <option>cleared</option>
                            </select>
                        </div><div class="form-group">
                            <label for="fourthinstallment">Fourth Installment</label>
                            <select id="fourthinstallment" class="form-control" name="fourthinstallment">
                                <option>not cleared</option>
                                <option>cleared</option>
                            </select>
                        </div>
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