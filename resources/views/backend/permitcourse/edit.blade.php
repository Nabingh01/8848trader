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
                    <form action="/permitcourse/{{ $permit->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                       <div class="form-group">
                           <label for="">{{ $permit->name }}</label>
                       </div>
                       <div class="form-group">
                           <label for="email">email</label>
                           <input id="email" class="form-control" type="text" name="email" value="{{ $permit->email }}">
                       </div>
                       <div class="form-group">
                           <label for="is_admin">is_admin</label>
                           <select id="is_admin" class="form-control" name="is_admin">
                               <option>{{ $permit->is_admin }}</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
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