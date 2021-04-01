@extends('frontend.app')
@section('content')
    {{-- banner --}}
    <div id="hero" class="d-flex flex-column justify-content-center align-items-center py-5" style="background-attachment: fixed;">
        <div class="container text-center text-md-left ">
          <h1 style="font-family: 'Courgette', cursive;">Be An Independent Trader</h1>
          <a href="/tradingcommunity1st" class="btn btn-danger btn-sm"><h5>8848 Trading Community</h5></a>
        </div>
      </div>  

      {{--  --}}
      <div class="bg-light mt-4">
        <div class="container">
          <div class="row">
            <!-- About Forex -->
            <div class="col-md-3">
              <h4>What is Forex</h4>
              <div class="card">
                <img src="images/forex.jpg" class="card-img-top" alt="..." style="max-height: 12rem; min-height: 12rem;">
                <div class="card-body"style="height: 14rem;">
                  <p class="card-text">The FX market is a global decentralized market where the world’s different currencies change hands instantly which makes the constant fluctuations and oscillations in the exchange rates</p>
                </div>
              </div>
            </div>
            <!-- Crypto Currency -->
            <div class="col-md-3">
              <h4> What is Cryptocurrency</h4>
              <div class="card">
                <img src="images/crypto.jpg" class="card-img-top" alt="..." style="max-height: 12rem; min-height: 12rem;">
                <div class="card-body" style="height: 14rem;">
                  <p class="card-text">A cryptocurrency (or “crypto”) is a digital currency that can be used to buy goods and services, but uses an online ledger with strong cryptography to secure online transactions. Much of the interest in these unregulated currencies is to trade for profit, with speculators at times driving prices skyward.</p>
                </div>
              </div>
            </div>
            <!-- About Forex -->
            <div class="col-md-3">
              <h4>What is stockmarket</h4>
              <div class="card">
                <img src="images/stockmarket.jpg" class="card-img-top" alt="..." style="max-height: 12rem; min-height: 12rem;">
                <div class="card-body" style="height: 14rem;">
                  <p class="card-text">A stock market, equity market, or share market is the aggregation of buyers and sellers of stocks, which represent ownership claims on businesses; these may include securities listed on a public stock </p>
                </div>
              </div>
            </div>
            <!-- About Forex -->
            <div class="col-md-3">
              <h4>Market Overview</h4>
              <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container " style="height: 5rem;">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock Market Today</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
  {
  colorTheme: "light";
  dateRange: "12M";
  exchange: "US";
  showChart: true;
  locale: "en";
  largeChartUrl: "";
  isTransparent: false;
  showSymbolLogo: false;
  width: "400";
  height: "600";
  plotLineColorGrowing: "rgba(33, 150, 243, 1)";
  plotLineColorFalling: "rgba(33, 150, 243, 1)";
  gridLineColor: "rgba(240, 243, 250, 1)";
  scaleFontColor: "rgba(120, 123, 134, 1)";
  belowLineFillColorGrowing: "rgba(33, 150, 243, 0.12)";
  belowLineFillColorFalling: "rgba(33, 150, 243, 0.12)";
  symbolActiveColor: "rgba(33, 150, 243, 0.12)";
}
  </script>
</div>
<!-- TradingView Widget END -->
            </div>
            <!--  -->
          </div>
        </div>
      {{-- services --}}
      <div class="mt-4">
        <div class="container py-3 mt-4">
          <div class="row">
            <div class="col-md-8">
              {{--  --}}
              <div class="row">
                <div class="col-md-6">
                  <div class="card" style=";">
                    <img src="../images/trading2.jpg" class="card-img-top" alt="...">
                  </div>
                </div>
                  <div class="col-md-6">
                    <h1>About <i><span class="text-danger">Company</span></i></h1>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium temporibus ut in minus atque maiores? Autem ab optio, magni incidunt quidem modi labore id iste velit ea similique repellat asperiores temporibus laboriosam repellendus illum ullam dicta eveniet cum dolores ipsam dolorum! Officiis expedita laboriosam incidunt magni temporibus blanditiis laborum ut?
                  </div>
              </div>
              {{--  --}}
              <hr class="solid">
              <div class="row">
                <div class="col-md-6">
                  <div>
                    <h1>Why <span class="text-danger"><i>Choose</i></span> us</h1>
                    <p>
                    <i class="fas fa-check"></i> FX Traders looking for trade alerts, ideas, live webinars & analysis from experienced traders <br>
                    <i class="fas fa-check"></i> FX Traders looking for a community to join, and likeminded traders to collaborate with <br>
                    <i class="fas fa-check"></i> Traders looking to step up their game and take things seriously <br>
                    <i class="fas fa-times"></i> NOT for traders looking to "get rich quick", or only looking to copy signals blindly
                     </p>
                  </div>
                </div>
                  <div class="col-md-6 p-3">
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                      <video  controls style="min-width: 20rem; max-width: 20rem;">
                        <source src="../videos/trading.mp4" type="video/mp4">
                        <source src="mov_bbb.ogg" type="video/ogg">
                      </video>
                    </div>
                  </div>
              </div>
              {{--  --}}
            </div>
              <div class="col-md-4" style="background-color: #f8f5f1">
                <div class="container-fluid bg-danger text-white d-flex">
                  <i class="fas fa-envelope py-3" style="font-size: 4rem"></i>
                  <div class="container py-3"><h4>Don't Miss Any Updates!</h4>
                    <p>Analysis straight to your inbox.</p></div>
                </div>
                <h4>What we share:</h4>
                <p>
                <i class="fas fa-check"></i> FX Market Analysis <br>
                <i class="fas fa-check"></i> Stock Market Analysis <br>
                <i class="fas fa-check"></i> News Coverage <br>
                <i class="fas fa-check"></i> Training Webinars <br> <br>
                  And much more! Subscribe below and receive free <br> content to your email.
                </p>
                <a href="/subscribe" class="btn btn-outline-danger">Subscribe free</a>
                <hr class="solid">
                <h4>Notice:</h4>
                 @foreach ($notice as $notice)
                 <div class="bg-white">
                  <p>{!! $notice->name !!}</p>
                </div>
                 @endforeach
              </div>
          </div>
          {{--  --}}
        </div>
      </div>
@endsection