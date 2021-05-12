<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
  </head>
  <body>
    {{-- suscribe --}}
    <div style="background-color: #f8f5f1">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <a href="" class="text-center"><img src="../images/8848logo.png" alt="" style="width: 10rem; height: 10rem;"></a>
            <div class="container text-center text-md-left ">
                <p style="font-family: 'Crimson Text', serif; font-size: 1.5rem">Sign up to receive emails from the 8848 Trading Community! <br>
                    Select your interests below.</p>
              </div>
        </div>
        <div class="container  py-3">
            <form action="/suscribtions" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">First Name <span class="text-danger">*</span></label>
                            <input id="fname" class="form-control" type="text" name="fname" value="{{ old('fname') }}">
                        </div>
                    </div>
                    @error('fname')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">Last Name <span class="text-danger">*</span></label>
                            <input id="lname" class="form-control" type="text" name="lname" value="{{ old('lname') }}">
                        </div>
                    </div>
                </div>
                @error('lname')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="email">E-mail <span class="text-danger">*</span></label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="contact">Contact no <span class="text-danger">*</span></label>
                    <input id="contact" class="form-control" type="contact" name="contact" value="{{ old('contact') }}">
                </div>
                @error('contact')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="country">Country<span class="text-danger">*</span></label>
                    <input id="country" class="form-control" type="country" name="country" value="{{ old('country') }}">
                </div>
                @error('country')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="allcourse_id">Select your interest  <span class="text-danger">*</span></label>
                    <select id="allcourse_id" class="form-control" name="allcourse_id">
                        @foreach ($allcourse as $allcourse)
                        <option value="{{ $allcourse->id }}">{{ $allcourse->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="container d-flex flex-column justify-content-center align-items-center py-3">
                    <button type="submit" class="btn btn-outline-danger btn-sm">Subscribe</button>
                </div>
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