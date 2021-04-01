@extends('frontend.app')
@section('content')
    {{-- banner --}}
    <div id="hero" class="d-flex flex-column justify-content-center align-items-center py-5 mt-4" style="background-attachment: fixed; height: 15vh">
        <div class="container text-center text-md-left ">
          <h1>Our <span class="text-danger">Community</span></h1>
        </div>
      </div> 

      {{-- about session --}}
      <div>
          <div class="container py-3">
              <h4>Real Community for <i><span class="text-danger">Realistic Traders</span></i></h4>
              <hr class="solid">
              <div class="row py-3">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/admin1.jpg" class="card-img-top" alt="...">
                      </div>
                  </div>
                  {{-- 2 --}}
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/admin2.jpg" class="card-img-top" alt="...">
                      </div>
                  </div>
                  {{-- 3 --}}
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/admin3.jpg" class="card-img-top" alt="...">
                      </div>
                </div>
              </div>
          </div>
          <div class="container py-3">
              <h4>Perfect For:</h4>
              <p>
                <i class="fas fa-check"></i> FX Traders looking for trade alerts, ideas, live webinars & analysis from experienced traders <br>
                <i class="fas fa-check"></i> FX Traders looking for a community to join, and likeminded traders to collaborate with <br>
                <i class="fas fa-check"></i> Traders looking to step up their game and take things seriously <br>
                <i class="fas fa-times"></i> NOT for traders looking to "get rich quick", or only looking to copy signals blindly
              </p>
          </div>
          <div class="container py-3">
              <h4>Here's <i><span class="text-danger">What's Inside</span></i></h4>
              <hr class="solid">
              <div class="row py-3">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/trading1.jpg" class="card-img-top" alt="...">
                    </div>
                  </div>
                  {{-- 2 --}}
                  <div class="col-md-8">
                      <h4 class="text-danger">SEE OUR TRADES IN REAL TIME</h4>
                      <p>
                        <i class="fas fa-caret-right"></i> Entries, exits, and full analysis <br>
                        <i class="fas fa-caret-right"></i> 0-3 trades shared per trading day <br>
                        <i class="fas fa-caret-right"></i> View trades from our team of traders <br>
                        <i class="fas fa-caret-right"></i> Our analysts are thoroughly screened, usually FTMO funded or myfxbook verified
                      </p>
                  </div>
              </div>
              {{-- row2 --}}
              <div class="row py-3">
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                      <img src="../images/forexbanner.jpg" class="card-img-top" alt="...">
                  </div>
                </div>
                {{-- 2 --}}
                <div class="col-md-8">
                    <h4 class="text-danger">TRAINING MATERIAL</h4>
                    <p>
                      <i class="fas fa-caret-right"></i> Live webinars with Joe Barrecca <br>
                      <i class="fas fa-caret-right"></i> Educational Library <br>
                      <i class="fas fa-caret-right"></i> Strategy Library <br>
                      <i class="fas fa-caret-right"></i> Trade Examples & Breakdowns
                    </p>
                </div>
            </div>
            {{-- row3 --}}
            <div class="row py-3">
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                      <img src="../images/trading2.jpg" class="card-img-top" alt="...">
                  </div>
                </div>
                {{-- 2 --}}
                <div class="col-md-8">
                    <h4 class="text-danger">OUR LIVE 24/7 TRADING COMMUNITY</h4>
                    <p>
                      <i class="fas fa-caret-right"></i> Friendly chatrooms <br>
                      <i class="fas fa-caret-right"></i> Helpful members & moderators <br>
                      <i class="fas fa-caret-right"></i> Members from 100+ countries globally <br>
                      <i class="fas fa-caret-right"></i> Trade Ideas from experienced members
                    </p>
                </div>
            </div>
            {{-- end --}}
          </div>
      </div>
@endsection