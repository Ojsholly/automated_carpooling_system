<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('new-ui//plugins/pg-calendar/css/pignose.calendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('new-ui/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('new-ui/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('new-ui/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-4.0.12/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/file-upload/css/dropify.min.css') }}">
    <link href="{{ asset('new-ui/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datetimepicker-master/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }} ">
    {{-- End Social Media Button Styles --}}

    <style>
        .select2-container--default .select2-selection--single {
            height: 45px;
        }

        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

input[type=number] {
    -moz-appearance:textfield;
}

    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
            Main wrapper start
        ***********************************-->
    <div id="main-wrapper">
        <!-- Header -->
        @include('layouts.header.header')
        <!-- Sidebar -->
        @include('layouts.header.sidebar')
        <!-- Page Content -->
        @yield('content')
        <!-- Footer -->
        @include('layouts.header.footer')
    </div>

    <!--**********************************
            Main wrapper end
        ***********************************-->

    <!--**********************************
                Scripts
            ***********************************-->
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('new-ui/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('new-ui/js/custom.min.js') }}"></script>
    <script src="{{ asset('new-ui/js/settings.js') }}"></script>
    <script src="{{ asset('new-ui/js/gleek.js') }}"></script>
    <script src="{{ asset('new-ui/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('new-ui/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('new-ui/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('new-ui/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('new-ui/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('new-ui/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('new-ui/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="{{ asset('plugins/select2-4.0.12/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('new-ui/js/dashboard/dashboard-1.js') }}"></script>
    <!-- File Upload -->
    <script src="{{ asset('plugins/file-upload/js/dropify.min.js') }}"></script>
    {{-- <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('new-ui/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('new-ui/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
    <script src="{{ asset('plugins/google-place-picker-bootstrap/PlacePicker.js') }}"></script>
    <script src="{{ asset('plugins/datetimepicker-master/jquery.datetimepicker.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select').select2({
                placeholder: 'Select an option',
                allowClear: true,
                width: '100%'
            });
            @if(Session::has('success'))
                Swal.fire({
                icon:'success',
                title:'Success!',
                text:"{{Session::get('success')}}",
                timer:30000
                }).then((value) => {
                }).catch(swal.noop);
            @endif
            @if(Session::has('fail'))
                Swal.fire({
                icon:'error',
                title:'Oops!',
                text:"{{Session::get('fail')}}",
                timer:30000
                }).then((value) => {
                }).catch(swal.noop);
            @endif
            @if (Request::is('profile/change-avatar'))
            var avatar = $('.user-avatar').attr('src');
                $('#avatar').dropify({
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
            $('#make').change(function() {
                let car_make = $(this).val();
                option = '<option>-Please select a model-</option>';
                $.get("/get-car-models", {"car_make" : car_make}, function(car_models){
                    if(car_models.length == 0){

                    } else {
                        jQuery.each(car_models, function(index, item) {
                        option += '<option class="model" value="'+item.model+'">'+item.model+'</option>';
                        })
                    }
                    $('#model').html(option);
                    $('#model_year').html('<option></option>');
                });
            });
            $('#model').change(function() {
                let car_make = $('#make').val();
                let car_model = $(this).val();
                option = '<option>-Please select a model year-</option>';
                $.get("/get-model-year", {"car_make" : car_make, "car_model" : car_model}, function(model_year){
                    if (model_year.length == 0) {

                    } else {
                        jQuery.each(model_year, function(index, item){
                            option += '<option value="'+item.year+'">'+item.year+'</option>';
                        });
                    }
                    $('#model_year').html(option);
                });
            });
            $('#pickup_location').PlacePicker({
                key:"{{ env('GOOGLE_MAPS_API_KEY') }}",
                id: $(this).attr('id'),
                title: "Enter or select an address from the map.",
                btnClass: "btn btn-primary btn-lg",
                center: {lat: 9.082, lng: 8.6753},
                zoom: 8,
                success:function(data,address){
                    $('#pickup_location').val(data.formatted_address);
                }
            });
            $('#destination').PlacePicker({
                key:"{{ env('GOOGLE_MAPS_API_KEY') }}",
                id: $(this).attr('id'),
                title: "Enter or select an address from the map.",
                btnClass: "btn btn-primary btn-lg",
                center: {lat: 9.082, lng: 8.6753},
                zoom: 8,
                success:function(data,address){
                    $('#destination').val(data.formatted_address);
                }
            });
            $('.datetime').datetimepicker({
                value: "{{ date('Y-m-d H:i') }}",
                minDate: "{{ date('Y-m-d') }}",
                minTime: "{{ date('H:i') }}",
                step:"30"
            });
        });
    </script>
</body>

</html>
