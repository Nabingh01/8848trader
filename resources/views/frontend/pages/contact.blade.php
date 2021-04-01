@extends('frontend.app')
@section('content')
    <div  style="background-color: #f8f5f1">
        <div id="hero" class="d-flex flex-column justify-content-center align-items-center mt-4 py-5" style="height: 10vh">
            <div class="container d-flex flex-column justify-content-center align-items-center ">
              <h1 style="font-size: 2rem"><span class="text-danger">Contact</span> us</h1>
            </div>
          </div> 
          {{--  --}}
          <div class="container py-3">
            
            <div class="">
              @if (session('message'))
                  <div class="alert alert-success alert-sm">
                      {{ session('message') }}
                  </div>
              @endif
           </div>
              <h3>Contact <span class="text-danger"><i>our team</i></span></h3>
              <p>Have questions about our services, looking to promote with us, or facing an issue? Send us a message using any of the methods below and <br> we will get back to you as soon as we can</p>
              <div class="row">
                  <div class="col-md-6 bg-white py-5">
                      <h3>Your support <span class="text-danger"><i>Questions</i></span></h3>
                      <hr class="solid bg-dark">
                      <p>We're here to help! Have a question about your membership, trading <br>  or questions about our services? Ask away!</p>
                      <h5>We usually take a business day or two to answer, please be patient with us!</h5>
                      <form action="/messages" method="post">
                        @csrf
                          <div class="form-group">
                              <label for="email">Email <span style="color: red">*</span></label>
                              <input id="email" class="form-control" type="email" name="email">
                          </div>
                          @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                          <div class="form-group">
                            <label for="message">Your message <span style="color: red">*</span></label>
                            <textarea id="message" class="form-control" name="message" rows="3"></textarea>
                        </div>
                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-outline-danger btn-sm  mt-4 ">Submit</button>
                      </form>
                  </div>
                  {{--  --}}
                  <div class="col-md-6 py-5">
                      <h4>Prefer to instant <span class="text-danger"><i>message</i></span> us?</h4>
                      <p>Send us a message on Facebook:</p>
                      <a href="https://www.facebook.com/8848trader/" class="btn btn-primary ">Contact on facebook</a>
                      <p>Send us a message on instagram:</p>
                      <a href="https://www.instagram.com/8848_trader/?igshid=9g27wbgrqd1r&fbclid=IwAR3O1Rk1FQLbt68vbsyhwI-xBhaj6Ml49sLebrJ_Ml1z1g6UQHKVy-oulwU" class="btn btn-success " style="background-color: #9b3675;"> Contact on Instagram</a>
                      <p><h4>Teaching hours:</h4>We are in office Monday-Friday, 9:00AM-4:00PM, US EST. Please allow us up to 1-2 business days to get back to your question.</p>
                  </div>
              </div>
          </div>
    </div>
@endsection