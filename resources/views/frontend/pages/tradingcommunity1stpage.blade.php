@extends('frontend.app')
@section('content')
    <div>
        <div>
            <div id="hero" class="d-flex flex-column justify-content-center align-items-center py-5" style="background-attachment: fixed;">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                     <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-white">Trading Communities</h3>
                            <p class="text-white">Our communities bring traders together, allow experienced analysts to share their insight, and provide powerful resources to traders.</p>
                        </div>
                        <div class="col-md-4 py-3" style="background-color: white ">
                            <h3>Forex/Indices Community</h3>
                            <p>
                                - Chat with forex traders <br>
                                - See our trades & analysis <br>
                                - Live webinars + education <br>
                            </p>
                            <a href=" /tradingcommunity" class="btn btn-danger btn-sm">Learn More</a>
                        </div>
                        <div class="col-md-4 py-3 bg-danger">
                            <h3  class="text-white">Stock Market Community</h3>
                            <p class="text-white">
                                - Chat with forex traders <br>
                                - See our trades & analysis <br>
                                - Trading material and info <br>
                            </p>
                            {{-- <a href="" class="btn btn-danger btn-sm"><b>Learn More</b></a> --}}
                        </div>
                    </div>
                </div>
              </div> 
        </div>
    </div>
@endsection