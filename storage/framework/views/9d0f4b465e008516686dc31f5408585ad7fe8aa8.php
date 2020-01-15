<?php $__env->startSection('content'); ?>

<div class="body-wrapper">
    <div class="main-wrapper">
        <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
            <main class="auth-page">
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div
                            class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                        </div>
                        <div
                            class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                            <div class="mdc-card">
                                <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                <form method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mdc-layout-grid">
                                        <div class="mdc-layout-grid__inner">
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                                <div class="mdc-text-field w-100">
                                                    <input
                                                        class="mdc-text-field__input <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="text-field-hero-input" name="name" value="<?php echo e(old('name')); ?>"
                                                        required autocomplete="name" autofocus>
                                                    <div class="mdc-line-ripple"></div>
                                                    <label for="text-field-hero-input"
                                                        class="mdc-floating-label">Name</label>
                                                </div>
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                                <div class="mdc-text-field w-100">
                                                    <input
                                                        class="mdc-text-field__input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="text-field-hero-input" type="email" name="email"
                                                        value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                                    <div class="mdc-line-ripple"></div>
                                                    <label for="text-field-hero-input"
                                                        class="mdc-floating-label">Email</label>
                                                </div>
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <div class="mdc-text-field w-100">
                                                    <input
                                                        class="mdc-text-field__input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        name="password" required autocomplete="new-password"
                                                        id="text-field-hero-input" type="password">
                                                    <div class="mdc-line-ripple"></div>
                                                    <label for="text-field-hero-input"
                                                        class="mdc-floating-label">Password</label>
                                                </div>
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <div class="mdc-text-field w-100">
                                                    <input class="mdc-text-field__input" type="password"
                                                        id="text-field-hero-input" name="password_confirmation" required
                                                        autocomplete="new-password">
                                                    <div class="mdc-line-ripple"></div>
                                                    <label for="text-field-hero-input"
                                                        class="mdc-floating-label">Confirm Password</label>
                                                </div>
                                            </div>
                                            
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <button type="submit" class="mdc-button mdc-button--raised w-100">
                                                    <?php echo e(__('Register')); ?>

                                                </button>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <a href="<?php echo e(route('login.provider', 'twitter')); ?>"
                                                    class="btn btn-block btn-social btn-twitter text-center">
                                                    <span class="fa fa-twitter"></span> <?php echo e(__('Sign in with Twitter')); ?>

                                                </a>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <a href="<?php echo e(route('login.provider', 'facebook')); ?>"
                                                    class="btn btn-block btn-social btn-facebook text-center">
                                                    <span class="fa fa-facebook"></span>
                                                    <?php echo e(__('Sign in with Facebook')); ?>

                                                </a>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <a href="<?php echo e(route('login.provider', 'google')); ?>"
                                                    class="btn btn-block btn-social btn-google text-center">
                                                    <span class="fa fa-google"></span> <?php echo e(__('Sign in with Google')); ?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div
                            class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- plugins:js -->
<script src=" <?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?> "></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=" <?php echo e(asset('js/material.js')); ?>"></script>
<script src="<?php echo e(asset('js/misc.js')); ?>"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/auth/register.blade.php ENDPATH**/ ?>