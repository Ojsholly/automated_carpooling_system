<?php $__env->startSection('content'); ?>

<main class="content-wrapper">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form method="post" action="<?php echo e(route('profile/change-avatar')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Upload Profile Avatar</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <input class="mdc-text-field__input avatar" id="text-field-hero-input" required
                                        name="avatar" type="file">
                                </div>
                            </div>
                            <p class="font-weight-bold text-small text-center">Kindly limit the size of uploads to 2MB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="template-demo text-center">
                            <button type="submit" class="mdc-button mdc-button--raised mdc-button--dense">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/profile/change-avatar.blade.php ENDPATH**/ ?>