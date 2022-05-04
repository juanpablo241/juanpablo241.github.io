<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light theme-1">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="http://icewall.left4code.com/dist/images/logo.svg" rel="shortcut icon">
    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">

    <link rel="stylesheet" href="{{ url('/static/css/adminStyle.css?v='.time()) }}">

    <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    @include('admin.sidebar')


    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div
        class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center">
            <!-- BEGIN: Logo -->
            <a  href="" class="-intro-x hidden md:flex">
                <img style="width: 60px" alt="Midone - HTML Admin Template" class="w-6" src="{{url('../public/images/logonutresa.png')}}">
                <span style=" font-weight: bold; color: #F1F5F9; font-size: 25px; margin-left: 0" class="text-white text-lg ml-3">
                    BGI
                    <br>
                    <span style="font-size: 15px; opacity: .8; margin: 0; font-weight: 500; color: #689076"
                        class="text-white text-lg ml-3">Grupo Nutresa</span>
                </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin')}}">Dashboard</a>
                    </li>
                    @section('breadcrumb')

                    @show

                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification notification--light sm:hidden" href="">
                    <i data-lucide="search" class="notification__icon dark:text-slate-500"></i>
                </a>

            </div>

            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template"
                        src="http://icewall.left4code.com/dist/images/profile-2.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <ul
                        class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium">{{ Auth::user()->name}}</div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ Auth::user()->email}}</div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ Auth::user()->area}}</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile
                            </a>
                        </li>

                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->

            @section('siderbar')

            @show
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                    @section('content')

                    @show
                </div>
            </div>
            <!-- END: Content -->
        </div>
    </div>
    <script src="{{url('/static/libs/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(".editor").each(function () {
            const el = this;
            ClassicEditor.create(el).catch((error) => {
                console.error(error);
            });
        });
    </script>
    <!-- BEGIN: JS Assets-->
    
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
    <script src="http://icewall.left4code.com/dist/js/app.js"></script>
    <!-- END: JS Assets-->
    <div class="signup" style="display: none">
        @if(Session::has('message'))
        <div class="container">
            <div class="mtop16 alert alert-{{Session::get('typealert')}}" style="display: none;">
                {{Session::get('message')}}
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
                @endif
                <script>
                    $('.alert').slideDown();
                    serTimeout(function () { $('.alert').slideUp(); }, 10000);
                </script>
            </div>
        </div>
        @endif

    </div>
</body>

</html>