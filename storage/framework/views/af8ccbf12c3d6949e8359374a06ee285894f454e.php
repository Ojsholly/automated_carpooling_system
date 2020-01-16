<?php $__env->startSection('content'); ?>

<main class="content-wrapper">
    <?php
    $name = explode(' ', (Auth::user()->name) )
    ?>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form method="post" action="<?php echo e(route('profile/edit-profile')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Personal Information</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="first_name" type="text" value="<?php echo e($name[0]); ?>">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">First
                                                    Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="last_name" type="text" value="<?php echo e($name[1]); ?>">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Last
                                                    Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            value="<?php echo e(Auth::user()->email); ?>" type="email" name="email">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Email
                                                    Address</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" name="dob" type="date"
                                            max="<?php echo e(date('Y-m-d')); ?>" value="<?php echo e(Auth::user()->dob); ?>" required
                                            id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Date of
                                                    Birth</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="phone" value="<?php echo e(Auth::user()->phone); ?>" type="tel" value="">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Phone
                                                    Number</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <select name="country_code" value="<?php echo e(Auth::user()->country_code); ?>" required
                                            class="select">
                                            <option selected disabled>Select Country Code</option>
                                            <?php $__currentLoopData = $country_codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country_code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="+<?php echo e($country_code->phonecode); ?>" <?php if( Auth::user()->email ==
                                                '+'.$country_code->phonecode ): ?> selected
                                                <?php endif; ?>><?php echo e($country_code->nicename); ?>

                                                (+<?php echo e($country_code->phonecode); ?>)</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-form-field">
                                        <div class="mdc-radio mdc-radio--touch">
                                            <input <?php if( Auth::user()->gender == 'Male' ): ?> checked <?php endif; ?>
                                            class="mdc-radio__native-control" type="radio"
                                            value="Male" id="radio-1" name="gender">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-1">Male</label>
                                    </div>
                                    <div class="mdc-form-field">
                                        <div class="mdc-radio">
                                            <input <?php if( Auth::user()->gender == 'Female' ): ?> checked <?php endif; ?>
                                            class="mdc-radio__native-control" type="radio"
                                            value="Female" id="radio-1" name="gender">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-1">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Brief Introduction</h6>
                        <p>Introduce yourself to other members (min. 10 characters).</p>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <textarea name="intro" min="10" max="500" class="mdc-text-field__input"
                                        id="text-field-hero-input" required><?php echo e(Auth::user()->intro); ?></textarea>
                                </div>
                            </div>
                                    <p class="font-weight-bold text-center">Include why people should travel with you. Please
                                        don't
                                        include any personal details here.</p>
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
                            <button type="reset" class="mdc-button mdc-button--raised filled-button--light">
                                Reset
                            </button>
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/profile/edit-profile.blade.php ENDPATH**/ ?>