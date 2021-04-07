
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>8848 Trader</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  {{-- databletable --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      @if (Auth::user()->is_admin == 9)
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      @else
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      @endif
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="/ourcourse" style="font-family: 'Crete Round', serif;">Our Courses</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="/home" style="font-family: 'Crete Round', serif;">Resource</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contact" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @if (Auth::user()->is_admin == 9)
    <a href="/home" class="brand-link">
      <img src="{{asset('images/8848logo.png')}}" alt="8848Trader Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">8848 Trader</span>
    </a>
    @else
    <a href="/" class="brand-link">
      <img src="{{asset('images/8848logo.png')}}" alt="8848Trader Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">8848 Trader</span>
    </a> 
    @endif
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/8848logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if (Auth::user()->is_admin == 9)
               <li class="nav-item">
                <a href="/home" class="nav-link">
                  <i class="fas fa-chart-line"></i>
                  <p>
                   Dashboard
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
               @endif
          @if (Auth::user()->is_admin == 9)
          <li class="nav-item">
            <a href="/students" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Students
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->is_admin == 9)
          <li class="nav-item">
            <a href="/permitcourse" class="nav-link">
              <i class="fas fa-unlock"></i>
              <p>
                UnlockCourse
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->is_admin == 9)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-graduation-cap"></i>
              <p>
                Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/allcourses" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                   All Courses
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/courses" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Running Courses
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/upcourses" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Upcomming Classes
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if (Auth::user()->is_admin== 9)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-book"></i>
              <p>
               Weekly content
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/firstweek/create" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                   First Week 
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/secondweek/create" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Second Week
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/thirdweek/create" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Third Week
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/fourthweek/create" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Fourth Week
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
            </ul>
          </li>    
          @endif
          @if (Auth::user()->is_admin == 9)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-inbox"></i>
              <p>
                Inbox
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/inboxapply" class="nav-link">
                  <i class="fas fa-mobile"></i>
                  <p>
                    Applied Details
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inboxsubscribe" class="nav-link">
                  <i class="fas fa-subscript"></i>
                  <p>
                    Subscribed Details
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inbox" class="nav-link">
                  <i class="fas fa-envelope"></i>
                  <p>
                    Messages
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if (Auth::user()->is_admin == 9)
          <li class="nav-item">
            <a href="/notice" class="nav-link">
              <i class="fas fa-exclamation"></i>
              <p>
                Notice
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->is_admin == 9)
          <li class="nav-item">
            <a href="/registeradmin" class="nav-link">
              <i class="fas fa-registered"></i>
              <p>
                Register
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-book"></i>
              <p>
                Weekly Content
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/firstweek" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                   First Week 
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/secondweek" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Second Week
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/thirdweek" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Third Week
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/fourthweek" class="nav-link">
                  <i class="fas fa-book"></i>
                  <p>
                    Fourth Week
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 <i class="fas fa-sign-out-alt"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <img src="{{ asset('images/8848logo.png') }}" width="60" alt="">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">8848 Trader</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> --}}
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE App -->

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

  <script>
      $(document).ready(function(){
        // alert('Nabin');
        $('#datatable').DataTable();
       });
    </script>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
</body>
</html>
