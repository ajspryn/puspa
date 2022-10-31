<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ url('/') }}/assets/images/kpppa.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/kpppa.png" type="image/x-icon">
    <title>Forum Puspa</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/dropzone.css">
    <!-- Plugins css Ends-->
      <!-- Plugins css start-->
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/scrollbar.css">
      <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/datatables.css">
      <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ url('/') }}/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/responsive.css">
</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ url('/') }}/assets/images/kpppa.png"
                                width="50" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">

                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>

                        <li class="maximize"><a class="text-dark" href="#!"
                                onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        @auth
                            <li class="profile-nav onhover-dropdown p-0 me-0">
                                <div class="media profile-media"><img class="b-r-10"
                                        src="{{ url('/') }}/assets/images/dashboard/profile.jpg" alt="">
                                    <div class="media-body"><span>{{ Auth::user()->name }}</span>
                                        <p class="mb-0 font-roboto">{{ Auth::user()->email }} <i
                                                class="middle fa fa-angle-down"></i></p>
                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div">
                                    <li><a href="/profile"><i data-feather="user"></i><span>Profile </span></a></li>
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <li><a href="#"
                                                onclick="event.preventDefault(); this.closest('form').submit();"><i
                                                    data-feather="log-out"> </i><span>Log Out</span></a></li>
                                    </form>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
