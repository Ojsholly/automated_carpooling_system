<div class="main-wrapper mdc-drawer-app-content">
    <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <button
                    class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
                <?php
                $name = explode(' ', (Auth::user()->name) )
                ?>
                <span class="mdc-top-app-bar__title">Greetings <?php echo e($name[0]); ?>!</span>
            </div>
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                <div class="menu-button-container menu-profile d-none d-md-block">
                    <button class="mdc-button mdc-menu-button">
                        <span class="d-flex align-items-center">
                            <span class="figure">
                                <?php if(auth()->user()->avatar && auth()->user()->avatar_type == 0): ?>
                                <img src="<?php echo e(asset('uploads/avatars/'.auth()->user()->avatar)); ?>" alt="user-avatar"
                                    class="user user-avatar">
                                <?php elseif(auth()->user()->avatar && auth()->user()->avatar_type == 1): ?>
                                <img src="<?php echo e(asset(auth()->user()->avatar)); ?>" alt="user-avatar" class="user user-avatar">
                                <?php else: ?>
                                <img src="<?php echo e(asset('images/profile.jfif')); ?>" alt="user-avatar" class="user user-avatar">
                                <?php endif; ?>
                            </span>
                            <span class="user-name"><?php echo e(Auth::user()->name); ?></span>
                        </span>
                    </button>
                    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon-only">
                                    <i class="mdi mdi-account-edit-outline text-primary"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal"><a
                                            href="<?php echo e(url('profile/edit-profile')); ?>">Edit profile</a></h6>
                                </div>
                            </li>
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon-only">
                                    <i class="mdi mdi-settings-outline text-primary"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal"><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="divider d-none d-md-block"></div>
                <div class="menu-button-container d-none d-md-block">
                    <button class="mdc-button mdc-menu-button">
                        <i class="mdi mdi-settings"></i>
                    </button>
                    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon-only">
                                    <i class="mdi mdi-alert-circle-outline text-primary"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal">Settings</h6>
                                </div>
                            </li>
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon-only">
                                    <i class="mdi mdi-progress-download text-primary"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal">Update</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
<div class="menu-button-container d-none d-md-block">
    <button class="mdc-button mdc-menu-button">
        <i class="mdi mdi-arrow-down-bold-box"></i>
    </button>
    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
            <li class="mdc-list-item" role="menuitem">
                <div class="item-thumbnail item-thumbnail-icon-only">
                    <i class="mdi mdi-lock-outline text-primary"></i>
                </div>
                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Lock screen</h6>
                </div>
            </li>
            <li class="mdc-list-item" role="menuitem">
                <div class="item-thumbnail item-thumbnail-icon-only">
                    <i class="mdi mdi-logout-variant text-primary"></i>
                </div>
                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Logout</h6>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</header>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form><?php /**PATH C:\xampp\htdocs\laravel\automated_carpooling_system\resources\views/layouts/header/header.blade.php ENDPATH**/ ?>