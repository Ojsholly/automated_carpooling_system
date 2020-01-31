<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}"><!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-4.0.12/css/select2.min.css') }}">
    <!--Select2 Plugin -->
    <!-- Sweetalert2 Plugin -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}">
    <!-- File Upload Plugin -->
    <link rel="stylesheet" href="{{ asset('plugins/file-upload/css/dropify.min.css') }}">
    <!-- Form Slider Plugin -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/slider-forms/css/slideform.css') }}"> --}}
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

</head>

<body>
    <script src=" {{ asset('js/preloader.js') }}"></script>
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

    <!-- Jquery 3.4.1 -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Sweetalert2 plugin -->
    <script src="{{ asset('plugins/sweetalert2/js/sweetalert2.min.js') }}"></script>
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
    <!-- File Upload -->
    <script src="{{ asset('plugins/file-upload/js/dropify.min.js') }}"></script>
    <!-- Form Slider Plugin -->
    <script src="{{ asset('plugins/slider-forms/js/jquery.slideform.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select').select2({
                placeholder: 'Select an option',
                width: '100%',
                height: '1500%'
            });
             @if(Session::has('success'))
                Swal.fire({
                icon:'success',
                title:'Success!',
                text:"{{Session::get('success')}}",
                timer:10000
                }).then((value) => {
                }).catch(swal.noop);
            @endif
            @if(Session::has('fail'))
                Swal.fire({
                icon:'error',
                title:'Oops!',
                text:"{{Session::get('fail')}}",
                timer:10000
                }).then((value) => {
                }).catch(swal.noop);
            @endif
            @if (Request::is('change-avatar'))
            var avatar = $('.user-avatar').attr('src');
                $('.avatar').dropify({
                wrap: '<div class="dropify-wrapper"></div>',
                height: '300px',
                defaultFile: avatar,
                maxFileSize: '2000',
                filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Sorry, this file is too large'
                },
            });
            @endif
            $('.file_input').dropify({
                wrap: '<div class="dropify-wrapper"></div>',
                height: '300px',
                maxFileSize: '2000',
                filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                messages: {
                'default': 'Drag and drop a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Sorry, this file is too large'
                },
            });
            $('.make').click(function() {
                let car_make = $(this).attr('data-value');
                $('#car_make').val(car_make);
                list = '<li class="mdc-list-item" data-value="">-Please select a model-</li>';
                $.get("/get-car-models", {"car_make" : car_make}, function(car_models){
                    if(car_models.length == 0){

                    } else {
                        jQuery.each(car_models, function(index, item) {
                        list += '<li class="mdc-list-item model" data-value="'+item.model+'">'+item.model+'</li>';
                        })
                    }
                    $('.car_model_list').html(list);
                    $('.model_year').html('<li class="mdc-list-item" data-value=""></li>');
                });
            });
            $('body').on('click', '.model', function() {
                let car_make = $('#car_make').val();
                let car_model = $(this).attr('data-value');
                $('#car_model').val(car_model);
                list = '<li class="mdc-list-item" data-value="">-Please select a model year-</li>';
                $.get("/get-model-year", {"car_make" : car_make, "car_model" : car_model}, function(model_year){
                    if (model_year.length == 0) {

                    } else {
                        jQuery.each(model_year, function(index, item){
                            list += '<li class="mdc-list-item model_year" data-value="'+item.year+'">'+item.year+'</li>';
                        });
                    }
                    $('.model_years').html(list);
                });
            });
        });
    </script>
</body>

</html>
