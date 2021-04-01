@extends('frontend.app')
@section('content')
    <div class="card py-3" style="background-color: #f8f5f1">
         <div class="container py-3">
             <h3 class="text-center">Apply Now</h3>
                <form action="/applydetail" method="post">
                 @csrf
                 <div class="form-group">
                     <label for="name">Your Name <span class="text-danger">*</span></label>
                     <input id="name" class="form-control" type="text" name="name">
                 </div>
                 @error('name')
                 <p class="text-danger">{{ $message }}</p>
                 @enderror
                 <div class="form-group">
                     <label for="contact">Contact <span class="text-danger">*</span></label>
                     <input id="contact" class="form-control" type="text" name="contact">
                 </div>
                 @error('contact')
                 <p class="text-danger">{{ $message }}</p>
                 @enderror
                 <div class="form-group">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input id="email" class="form-control" type="email" name="email">
                 </div>
                 @error('email')
                 <p class="text-danger">{{ $message }}</p>
                 @enderror
                 <div class="form-group">
                    <label for="country">Country <span class="text-danger">*</span></label>
                    <input id="country" class="form-control" type="text" name="country">
                 </div>
                 @error('country')
                 <p class="text-danger">{{ $message }}</p>
                 @enderror
                 <div class="form-group">
                    <label for="allcourse_id">Select Course</label>
                    <select id="allcourse_id" class="form-control" name="allcourse_id">
                        @foreach ($allcourse as $allcourse)
                        <option value="{{ $allcourse->id }}">{{ $allcourse->name }}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="container d-flex flex-column justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary btn-sm mt-2" style="width: 8rem">Apply</button>
                 </div>
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
@endsection