@extends('frontend.app')
@section('content')
    {{-- banner --}}
    <div id="hero" class="d-flex flex-column justify-content-center align-items-center py-5" style="background-attachment: fixed">
        <div class="container text-center text-md-left ">
          <h1 style="font-family: 'Courgette', cursive;">Be An Independent Trader</h1>
          <a href="/stockmarketcommunity" class="btn btn-info btn-sm">8848 Trading Community</a>
          <a href="/signup" class="btn btn-danger btn-sm">Sign up here</a>
        </div>
      </div>  
      {{--  --}}
      <div class="mt-4">
        <div class="container py-3 mt-4">
          <div class="row">
            <div class="col-md-8">
              {{--  --}}
              <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <img src="../images/trading2.jpg" class="card-img-top" alt="..." style="border-radius:4%;">
                </div>
                  <div class="col-md-6">
                    <h1>About <i><span class="text-danger">Company</span></i></h1>
                    <strong>8848 Trader</strong> provides first hand training programmes that fully equips students for the forex trading world. This is one of the  institutions that offers a life time mentorship programme aimed at assisting students to be full time, successful forex traders. <br><br>
                    Our main goal is to teach clients how to trade forex, and also enhance them, by guiding our clients and giving them first hand teaching going through trades with the senior tutors. It is not an “over- night success get rich scam” it requires dedication, discipline and hard work just like any other career.
                  </div>
              </div>
              {{--  --}}
              <hr class="solid">
              <div class="row">
                <div class="col-md-6">
                  <div>
                    <h1>What will you achieve by <span class="text-danger"><i>joining us</i></span> ?</h1>
                    <p>
                    <i class="fas fa-check"></i> Understanding Forex and financial market.<br><br>
                    <i class="fas fa-check"></i> Learn how to read charts(not only forex)<br><br>
                    <i class="fas fa-check"></i> Ongoing mentorship<br><br>
                    <i class="fas fa-check"></i> Independent trading skill that can pay rest of the life.
                     </p>
                  </div>
                </div>
                  <div class="col-md-6 p-3">
                    <div class="container d-flex flex-column justify-content-center align-items-center">
                      <img src="../images/choose.jpg" alt="" style="border-radius: 4%">
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
       {{--  --}}
       <div class="bg-light mt-4">
        <div class="container py-4">
          <div class="row">
                <div class="col-md-3">
                  <div class="card">
                    <img src="images/forex.jpg" class="card-img-top" alt="..." style="max-height: 13rem; min-height: 13rem;">
                    <div class="card-body"style="height: 18rem;">
                      <h4>What is <span class="text-danger"><i>Forex</i></span> ?</h4>
                      <p class="card-text">The FX market is a global decentralized market where the world’s different currencies change hands instantly which makes the constant fluctuations and oscillations in the exchange rates</p>
                    </div>
                  </div>
                </div>
                <!-- Crypto Currency -->
                <div class="col-md-3">
                  <div class="card">
                    <img src="images/crypto.jpg" class="card-img-top" alt="..." style="max-height: 13rem; min-height: 13rem;">
                    <div class="card-body" style="height: 18rem;">
                      <h4> What is <span class="text-danger"><i>Cryptocurrency</i></span> ?</h4>
                      <p class="card-text">A cryptocurrency (or “crypto”) is a digital currency that can be used to buy goods and services, but uses an online ledger with strong cryptography to secure online transactions. Much of the interest in these unregulated currencies is to trade for profit, with speculators at times driving prices skyward.</p>
                    </div>
                  </div>
                </div>
                <!-- About Forex -->
                <div class="col-md-3">
                  <div class="card">
                    <img src="images/stockmarket.jpg" class="card-img-top" alt="..." style="max-height: 13rem; min-height: 13rem;">
                    <div class="card-body" style="height: 18rem;">
                      <h4>What is <span class="text-danger"><i>stockmarket</i></span> ?</h4>
                      <p class="card-text">A stock market, equity market, or share market is the aggregation of buyers and sellers of stocks, which represent ownership claims on businesses; these may include securities listed on a public stock </p>
                    </div>
                  </div>
                </div>
            <!-- About Forex -->
            <div class="col-md-3">
              <h4>Market Overview</h4>
              <!-- SimpleFX widget MARKET OVERVIEW - START -->
<div class="sfx-widget" id="sfx-market-overview"></div>
<script type="text/javascript" src="https://widgets.simplefx.com/sfx-widget.js"></script>
<script type="text/javascript">
	sfx('marketOverview', {
		containerId: 'sfx-market-overview',
		language: 'auto',
		width: "290px",
		height: "450px",
		symbols: ["BTCUSD","NINTENDO.JP","AAPL.US","VOLV.SE","GOOG.US","LHA.DE","XAUEUR","BAY.DE","TOYOTA.JP","AUDCAD","USDSEK","ASX200","AUDCHF","AUDJPY","AUDNZD","AUDUSD","CAC40","CADCHF","CADJPY","CHFJPY","DAX30","DJI30","EURAUD","EURCAD","EURCHF","EURCZK","EURDKK","EURGBP","EURHKD","EURHUF","EURJPY","EURMXN","EURNOK","EURNZD","EURPLN","EURSEK","EURSGD","EURTRY","EURUSD","EURZAR","FTSE100","GBPAUD","GBPCAD","GBPCHF","GBPHKD","GBPNZD","GBPJPY","GBPUSD","HSI50","IBEX35","LTCUSD","NDX100","NIKKEI225","NZDCAD","NZDCHF","NZDJPY","NZDUSD","SMI20","SPX500","STOXX50","UKOIL","USDCAD","USDCHF","USDCNH","USDCZK","USDHKD","USDDKK","USDHUF","USDJPY","USDMXN","USDNOK","USDPLN","USDRUB","USDSGD","USDTRY","USDZAR","USOIL","XAGAUD","XAGUSD","XAUAUD","XAUUSD","EURRUB","NATURALGAS","USDILS","CHFPLN","AMZN.US","BABA.US","BAC.US","C.US","FB.US","FCX.US","FSLR.US","GS.US","JPM.US","MCD.US","NFLX.US","PG.US","TSLA.US","TWTR.US","WMT.US","XOM.US","RACE.US","ETHUSD","NTT.JP","PANASONI.JP","SONY.JP","ETCUSD","ADS.DE","ALV.DE","BMW.DE","DBK.DE","RWE.DE","SIE.DE","VOW.DE","AMD.US","ABB.SE","ERIC.SE","FING.SE","NDASEK.SE","TELIA.SE","SNAP.US","BCHUSD","USDKRW","ZECUSD","NVDA.US","ATVI.US","T.US","NKE.US","PFE.US","QCOM.US","DIS.US","BIDU.US","GM.US","ASELS.TR","TCELL.TR","THYAO.TR","BIMAS.TR","KOZAL.TR","ABEV.BR","PETROBRA.BR","ITAU.BR","TUPRAS.TR","VALE.BR","FENER.TR","MAVI.TR","TEL.JP","SUZUKI.JP","SHISEIDO.JP","SUZANO.BR","COSAN.BR","LLOY.UK","GLEN.UK","TSCO.UK","VOD.UK","BP.UK","GSK.UK","EZJ.UK","BARC.UK","CNA.UK","BATS.UK","OCDO.UK","BN.FR","BNP.FR","GLE.FR","RNO.FR","SAN.FR","AIR.FR","FP.FR","FR.FR","TLRY.US","GWPH.US","RKT.US","PLTR.US","RIOT.US","AMC.US","GME.US","STLA.FR","DASH.US","MAGALU.BR","B3.BR","XTZUSD","WAVUSD","YFIUSD","NEOUSD","EOSUSD","ADAUSD","DOTUSD","BNBUSD","ABNB.US","ZM.US","BYND.US","NWG.UK","DHER.DE","LNKUSD","SPCE.US","MSFT.US","PTON.US","WORK.US","UBER.US","BA.US"],
		theme: "dark",
		customElements: ["header","chartGridLines"],
		categoriesOrder: ["Crypto","Equities JP","Equities US","Equities SE","Equities DE","Precious Metals","Forex","Indices Cash","Commodities","Equities TR","Equities BR","Equities UK","Equities FR"],

	})
</script>
<!-- SimpleFX widget - END -->
            </div>
          </div>
        </div>
@endsection