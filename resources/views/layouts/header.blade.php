<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Dompet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <link href="{{ url('admin//vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('admin/vendor/nouislider/nouislider.min.css') }}">
    <!-- Style css -->
    <link href="{{ url('admin/css/style.css') }}" rel="stylesheet">

</head>

<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="waviy">
        <span style="--i: 1">L</span>
        <span style="--i: 2">o</span>
        <span style="--i: 3">a</span>
        <span style="--i: 4">d</span>
        <span style="--i: 5">i</span>
        <span style="--i: 6">n</span>
        <span style="--i: 7">g</span>
        <span style="--i: 8">.</span>
        <span style="--i: 9">.</span>
        <span style="--i: 10">.</span>
    </div>
</div>
<!--*******************
  Preloader end
 ********************-->

<!--**********************************
  Main wrapper start
 ***********************************-->
<div id="main-wrapper">
    <!--**********************************
   Nav header start
  ***********************************-->
    <div class="nav-header">
        <a href="{{route('home.index')}}" class="brand-logo">
            <img width="100%" src="{{ url('logo.png') }}" alt="" srcset="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
   Nav header end
  ***********************************-->


    <!--**********************************
   Header start
  ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">Dashboard</div>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item">
                            <div class="input-group search-area">
                                <input type="text" class="form-control" placeholder="Search here..." />
                                <span class="input-group-text"><a href="javascript:void(0)"><i
                                            class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
   Header end ti-comment-alt
  ***********************************-->

    <!--**********************************
   Sidebar start
  ***********************************-->
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">

                <li>

                    {{-- <ul aria-expanded="true"> --}}
                        <li><a href="index.html"></a></li>
                        <li><a href="{{route('home.index')}}">Dashboard</a></li>
                        <li><a href="{{route('hospital.booking')}}">Booking`s</a></li>
                        <li><a href="{{route('hospital.bed')}}">Bed Details</a></li>
                        <li><a href="{{route('hospital.profile')}}">Account</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>

                        </li>
                    {{-- </ul> --}}
                </li>


            </ul>
            {{-- <div class="copyright">
			  <p>
				<strong>Dompet Payment Admin Dashboard</strong> © 2021 All Rights
				Reserved
			  </p>
			  <p class="fs-12">
				Made with <span class="heart"></span> by DexignLab
			  </p>
			</div> --}}
<<<<<<< HEAD
        </div>
    </div>
    <!--**********************************
   Sidebar end
  ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">


=======
		  </div>
		</div>
		<!--**********************************
			  Sidebar end
		  ***********************************-->
          <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
>>>>>>> dev-homepage
