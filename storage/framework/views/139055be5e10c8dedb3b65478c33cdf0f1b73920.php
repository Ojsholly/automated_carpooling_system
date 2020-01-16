<?php $__env->startSection('content'); ?>

<?php echo $__env->make('beautymail::templates.widgets.articleStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h4 class="secondary"><strong>Hello World</strong></h4>
<p>This is a test</p>

<?php echo $__env->make('beautymail::templates.widgets.articleEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('beautymail::templates.widgets.newfeatureStart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h4 class="secondary"><strong>Hello World again</strong></h4>
<p>This is another test</p>

<?php echo $__env->make('beautymail::templates.widgets.newfeatureEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('beautymail::templates.widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/emails/welcome.blade.php ENDPATH**/ ?>