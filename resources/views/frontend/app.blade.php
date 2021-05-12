<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    {{-- costom css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/costom.css') }}">
    {{-- fontawesome --}}
    {{-- googlefonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Crimson+Text:ital,wght@1,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <title>8848 Trader</title>
    <style type="text/css">
      .inline { 
       display: inline-block;
       border: 1px solid red; 
       /* margin:10px; */
       }
     </style>
  </head>
  <body>
      {{-- topbar --}}
      {{-- navbar --}}
      {{-- <div class="div " style="background-color: #e40017">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex align-items-center" style="background-color:#e40017">
              <div class="logo me-auto">
              <a href="/" class="logo"><img src="../images/logo0.png" alt="" style="width: 8rem; height: 8rem;"></a>
              </div>
              <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#e40017">
                <div class="container">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                      <li class="nav-item">
                        <a class="nav-link text-white" aria-current="" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="/tradingcommunity1st">Community</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="/courses">Courses</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.tradingview.com/chart/?symbol=NASDAQ:AAPL&source=unauth_header&feature=launch_chart">View Charts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="/contact">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav><!-- .navbar -->
            </div>
        </div>
      </div> --}}

      <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/8848logo.png') }}" width="100" alt=""> <strong style="font-family: 'Crete Round', serif;">8848 Trader</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/" style="font-family: 'Crete Round', serif;">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Crete Round', serif;">
                    Community
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/indicescommunity" style="font-family: 'Crete Round', serif;">Forex/indices Community</a></li>
                    <li><a class="dropdown-item" href="/stockmarketcommunity" style="font-family: 'Crete Round', serif;">Stock market Community</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/ourcourse" style="font-family: 'Crete Round', serif;">Our Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact" style="font-family: 'Crete Round', serif;">Contact</a>
                </li>
                @if (Auth::user())
                <li class="nav-item">
                  <a class="nav-link" href="/home" style="font-family: 'Crete Round', serif;">Resource</a>
                </li>
                <li>
                  <img src="{{asset('images/8848logo.webp')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px">
                </li>
                {{-- <li>
                  <a href="#" class="nav-link">{{Auth()->user()->name}}</a>
                </li> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Crete Round', serif;">
                    {{Auth()->user()->name}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                  </ul>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link text-danger " href="/login" style="font-family: 'Crete Round', serif;">SignIn</a>
                </li>
                @endif
            </div>
          </div>
        </nav>
      </div>
      
      
    @yield('content')
    <div class="bg-light py-2">
      <div>
        <div class="container d-flex justify-content-between">
            <div>
              <strong class="text-danger">Need help?</strong> Chat with our representative
            </div>
            <div>
              <a href="/contact" class="btn btn-danger btn-sm">Chat Now <i class="far fa-comment-dots" style="font-size: 20px"></i> </a>
            </div>
        </div>
      </div>
    </div>

    <div class="py-5" style="background-color: #ec4646">
      <div class="container text-white" >
        <div class="row">
          <div class="col-md-4">
            <h1>Quicks Links</h1>
            <ul>
              <li><a class="text-white" href="/">Home</a></li>
              <li><a class="text-white" href="/stockmarketcommunity">Our Community</a></li>
              <li><a class="text-white" href="/courses">Our Courses</a></li>
              <li><a class="text-white" href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-6 ">
           <h1>Contact us</h1>
           <ul>
             <a class="text-white" href=""><li>15 Isla Ave, <br>Glenroy, VIC 3046, Australia</li></a>
             <li><a class="text-white" href="Tel: +61 450 864 242">Tel: +61 450 864 242</a></li>
             <li><a class="text-white" href="mailto: Info@8848trader.com">Email:Info@8848trader.com</a></li>
           </ul>
          </div>

          <div class="col-md-2">
            <h1>Social</h1>
            <a class="text-white" href="https://www.facebook.com/8848trader/" target="_blank"><i class="fab fa-facebook" style="font-size: 1.2rem;"></i></a>
            <a class="text-white" href="https://www.instagram.com/8848_trader/?igshid=9g27wbgrqd1r&fbclid=IwAR3O1Rk1FQLbt68vbsyhwI-xBhaj6Ml49sLebrJ_Ml1z1g6UQHKVy-oulwU" target="_blank"><i class="fab fa-instagram" style="font-size: 1.2rem;"></i></a>
            <a class="text-white" href=""><i class="fab fa-twitter" style="font-size: 1.2rem;"></i></a>
            <a class="text-white" href="https://discord.com/invite/FdG2MTgmku" target="_blank"><i class="fab fa-discord" style="font-size: 1.2rem;"></i></a>

          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    {{-- twak.to --}}
    <!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
  window.__lc = window.__lc || {};
  window.__lc.license = 12786519;
  ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12786519/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

    {{-- twak.to --}}
  </body>
</html>