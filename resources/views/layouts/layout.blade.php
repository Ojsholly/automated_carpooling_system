<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}"><!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-4.0.12/css/select2.min.css') }}">
    <!--Select2 Plugin -->
    <!-- Sweetalert2 Plugin -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/demo/style.css') }}">
    <!-- End layout styles -->
    {{-- Social Media Buttons Styles --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }} ">
    {{-- End Social Media Button Styles --}}

    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Jquery 3.4.1 -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Sweetalert2 plugin -->
    <script src="{{ asset('plugins/sweetalert2/js/sweetalert2.min.js') }}"></script>

</head>

<body>
    <script src=" {{ asset('js/preloader.js') }}"></script>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
    <span class="fa fa-car"></span>
    {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>

                    @if(auth()->user()->avatar)
                    <img src="{{ auth()->user()->avatar }}" alt="avatar" width="32" height="32"
                        style="margin-right: 8px;">
                    @endif
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
    </div>
    </nav>

    <main>
        @yield('content')
    </main>
    </div> --}}
    <div class="body-wrapper">
        <!-- Sidebar -->
        @include('layouts.header.sidebar')
        <!-- Header -->
        @include('layouts.header.header')
        <!-- Page Content -->
        @yield('content')
        <!-- Footer -->
        @include('layouts.header.footer')
    </div>
    <!-- Default Template Layout. -->
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/material.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <!-- endinject -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!--Select2 Plugin -->
    <script src="{{ asset('plugins/select2-4.0.12/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select').select2({
                placeholder: 'Select an option',
                width: '100%',
                height: '1500%'
            });
             @if(Session::has('success'))
                console.log('here');
                Swal.fire({
                icon:'success',
                title:'Success!',
                text:"{{Session::get('success')}}",
                timer:5000
                }).then((value) => {
                //location.reload();
                }).catch(swal.noop);
            @endif
            @if(Session::has('fail'))
                Swal.fire({
                icon:'error',
                title:'Oops!',
                text:"{{Session::get('fail')}}",
                timer:5000
                }).then((value) => {
                //location.reload();
                }).catch(swal.noop);
            @endif

        });
    </script>
</body>

</html>
