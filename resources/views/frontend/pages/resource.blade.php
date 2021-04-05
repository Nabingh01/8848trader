@extends('frontend.app')
@section('content')
    <div>
       <div class="container">
        <div class="row">
            @foreach ($resource as $resource)
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4>{{ $resource->name }} ({{ $resource->period }})</h4>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <img src="{{ $resource->image }}" alt="" style="min-height: 24rem; max-height: 24rem; width: 100%">
                          <p>
                            {!! $resource->description !!}
                          </p>
                          <h4>file:</h4><a href="{{ $resource->file }}">{{ $resource->file }}</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
       </div>
    </div>
@endsection