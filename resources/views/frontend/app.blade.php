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
    <title>8848 Trading</title>
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
            <a class="navbar-brand" href="#"><img src="{{ asset('images/8848logo.png') }}" width="80" alt=""> <strong style="font-family: 'Crete Round', serif;">8848 Traders</strong></a>
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
              </ul>
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
            </div>`
            <div>
              <a href="/contact" class="btn btn-danger btn-sm">Chat Now</a>
            </div>
        </div>
      </div>
    </div>

    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h1>Quicks Links</h1>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/tradingcommunity1st">Our Community</a></li>
              <li><a href="/frontendcourses">Our Courses</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-4">
           <h1>Contact us</h1>
           <ul>
             <li>Prithvi Path, Dharan</li>
             <li><a href="Tel: 025-525164">Tel: 025-525164</a></li>
             <li><a href="mailto: info@8848trading.com">Email: info@8848trading.com</a></li>
           </ul>
          </div>

          <div class="col-md-4">
            <h1>Social</h1>
            <a href="https://www.facebook.com/8848trader/"><i class="fab fa-facebook" style="font-size: 2rem;color: blue"></i></a>
            <a href="https://www.instagram.com/8848_trader/?igshid=9g27wbgrqd1r&fbclid=IwAR3O1Rk1FQLbt68vbsyhwI-xBhaj6Ml49sLebrJ_Ml1z1g6UQHKVy-oulwU"><i class="fab fa-instagram" style="font-size: 2rem;color: blue ; color:  #9b3675"></i></a>
            <a href=""><i class="fab fa-telegram" style="font-size: 2rem;color: blue"></i></a>
            <a href=""><i class="fab fa-twitter" style="font-size: 2rem;color: blue"></i></a>
            <a href=""><i class="fab fa-discord" style="font-size: 2rem;color: blue"></i></a>

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
  </body>
</html>