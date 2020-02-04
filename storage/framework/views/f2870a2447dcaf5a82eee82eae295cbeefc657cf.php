<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('landing/css/font-awesome.min.css')); ?>"><!-- fontawesome css -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/jvectormap/jquery-jvectormap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2-4.0.12/css/select2.min.css')); ?>">
    <!--Select2 Plugin -->
    <!-- Sweetalert2 Plugin -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2/css/sweetalert2.min.css')); ?>">
    <!-- File Upload Plugin -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/file-upload/css/dropify.min.css')); ?>">
    <!-- DataTables Plugin -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/dataTables/css/dataTables.css')); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/demo/style.css')); ?>">
    <!-- End layout styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-social.css')); ?> ">
    

    <link rel="shortcut icon" href="<?php echo e(asset('images/icon.png')); ?>" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>
    <script src=" <?php echo e(asset('js/preloader.js')); ?>"></script>
    <div class="body-wrapper">
        <!-- Sidebar -->
        <?php echo $__env->make('layouts.header.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Header -->
        <?php echo $__env->make('layouts.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- Footer -->
        <?php echo $__env->make('layouts.header.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Default Template Layout. -->
    </div>
    </div>

    <!-- Jquery 3.4.1 -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!-- Sweetalert2 plugin -->
    <script src="<?php echo e(asset('plugins/sweetalert2/js/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- plugins:js -->
    <script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?php echo e(asset('vendors/chartjs/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jvectormap/jquery-jvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?php echo e(asset('js/material.js')); ?>"></script>
    <script src="<?php echo e(asset('js/misc.js')); ?>"></script>
    <!-- endinject -->
    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
    <!--Select2 Plugin -->
    <script src="<?php echo e(asset('plugins/select2-4.0.12/js/select2.min.js')); ?>"></script>
    <!-- File Upload -->
    <script src="<?php echo e(asset('plugins/file-upload/js/dropify.min.js')); ?>"></script>
    <!-- DataTables Plugin -->
    <script src="<?php echo e(asset('plugins/dataTables/js/dataTables.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.select').select2({
                placeholder: 'Select an option',
                width: '100%',
                height: '1500%'
            });
             <?php if(Session::has('success')): ?>
                Swal.fire({
                icon:'success',
                title:'Success!',
                text:"<?php echo e(Session::get('success')); ?>",
                timer:10000
                }).then((value) => {
                }).catch(swal.noop);
            <?php endif; ?>
            <?php if(Session::has('fail')): ?>
                Swal.fire({
                icon:'error',
                title:'Oops!',
                text:"<?php echo e(Session::get('fail')); ?>",
                timer:10000
                }).then((value) => {
                }).catch(swal.noop);
            <?php endif; ?>
            <?php if(Request::is('change-avatar')): ?>
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
            <?php endif; ?>
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
            $('.table').DataTable( {
            columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
                ]
            });
        });
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/layouts/layout.blade.php ENDPATH**/ ?>