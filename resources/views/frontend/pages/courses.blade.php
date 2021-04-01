@extends('frontend.app')
@section('content')
    <div class="bg-light">
        <div class="container">
            <h3>Running <span class="text-danger">Classes</span></h3>
            <hr class="solid">
            <div class="row">
                <div class="col-md-8 py-3">
                        @foreach ($course as $course)
                            {{-- running courses --}}
                    <div class="row">
                        {{-- image --}}
                        <div class="col-md-6">
                            <img src="{{ $course->image }}" class="card-img-top" style="max-height: 15rem; min-height: 15rem" alt="...">
                        </div>
                        {{-- "description" --}}
                        <div class="col-md-6">
                            <h3>{{ $course->allcourse->name }}</h3>
                            <p>{{ $course->description }}</p>
                        </div>
                        <hr class="solid">
                        {{-- end --}}
                    </div>
                    {{-- running course end --}}
                        @endforeach
                </div>
                {{-- upcomming courses --}}
                <div class="col-md-4 py-3" style="background-color: #f8f5f1">
                    <h4>Upcomming classes</h4>
                    {{-- coursedetail --}}
                    @foreach ($upcomming as $upcomming)
                    <div class="card" style="">
                        <div class="card-body">
                          <h5 class="card-title">{{ $upcomming->allcourse->name }}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Startingfrom:{{ $upcomming->date }}</h6>
                          <a href="/apply" class="card-link btn btn-danger btn-sm">Apply now</a>
                        </div>
                      </div>
                    @endforeach
                    {{-- end --}}
                </div>
            </div>
        </div>
    </div>
@endsection