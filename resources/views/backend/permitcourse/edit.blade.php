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
                   <a href="/permitcourse" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back</a>
                </div>
                <div class="card-body">
                    <form action="/permitcourse/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name<span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Name<span class="text-danger">*</span></label>
                            <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                        </div>
                       <div class="form-group">
                           <label for="is_admin">is_admin</label>
                           <select id="is_admin" class="form-control" name="is_admin">
                               <option value="0">user</option>
                               <option value="2">Unlock first week</option>
                               <option value="3">Unlock second week</option>
                               <option value="4">Unlock third week</option>
                               <option value="5">Unlock fourth week</option>
                           </select>
                       </div>
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