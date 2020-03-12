<?php $__env->startSection('content'); ?>
<div class="body-wrapper">
    <div class="main-wrapper">
        <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
            <main class="auth-page">
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div
                            class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
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
                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mdc-layout-grid">
                                        <div class="mdc-layout-grid__inner">
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
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
                                                        type="email" name="email" value="<?php echo e(old('email')); ?>" required
                                                        autocomplete="email" autofocus id="text-field-hero-input">
                                                    <div class="mdc-line-ripple"></div>
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Email
                                                        Address</label>
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
                                                        name="password" required autocomplete="current-password"
                                                        type="password" id="text-field-hero-input">
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
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-form-field">
                                                    <div class="mdc-checkbox">
                                                        <input type="checkbox" name="remember"
                                                            class="mdc-checkbox__native-control" id="checkbox-1"
                                                            <?php echo e(old('remember') ? 'checked' : ''); ?> />
                                                        <div class="mdc-checkbox__background">
                                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                            </svg>
                                                            <div class="mdc-checkbox__mixedmark"></div>
                                                        </div>
                                                    </div>
                                                    <label for="checkbox-1"><?php echo e(__('Remember Me')); ?></label>
                                                </div>
                                            </div>
                                            <?php if(Route::has('password.request')): ?>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                                                <a
                                                    href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot Password')); ?></a>
                                            </div>
                                            <?php endif; ?>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                <button type="submit" class="mdc-button mdc-button--raised w-100">
                                                    <?php echo e(__('Login')); ?>

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
                            class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- plugins:js -->
<script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo e(asset('js/material.js')); ?>"></script>
<script src="<?php echo e(asset('js/misc.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/auth/login.blade.php ENDPATH**/ ?>