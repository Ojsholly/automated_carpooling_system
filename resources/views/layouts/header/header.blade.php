<div class="main-wrapper mdc-drawer-app-content">
    <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <button
                    class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
                @php
                $name = explode(' ', (Auth::user()->name) )
                @endphp
                <span class="mdc-top-app-bar__title">Greetings {{ $name[0] }}!</span>
            </div>
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                <div class="menu-button-container menu-profile d-none d-md-block">
                    <button class="mdc-button mdc-menu-button">
                        <span class="d-flex align-items-center">
                            <span class="figure">
                                @if(auth()->user()->avatar && auth()->user()->avatar_type == 0)
                                <img src="{{ asset('uploads/avatars/'.auth()->user()->avatar) }}" alt="user-avatar"
                                    class="user user-avatar">
                                @elseif(auth()->user()->avatar && auth()->user()->avatar_type == 1)
                                <img src="{{ asset(auth()->user()->avatar) }}" alt="user-avatar" class="user user-avatar">
                                @else
                                <img src="{{ asset('images/profile.jfif') }}" alt="user-avatar" class="user user-avatar">
                                @endif
                            </span>
                            <span class="user-name">{{ Auth::user()->name }}</span>
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
                                            href="{{ url('profile/edit-profile') }}">Edit profile</a></h6>
                                </div>
                            </li>
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon-only">
                                    <i class="mdi mdi-settings-outline text-primary"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal"><a href="{{ route('logout') }}" onclick="event.preventDefault();
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
                {{-- <div class="menu-button-container">
                    <button class="mdc-button mdc-menu-button">
                        <i class="mdi mdi-bell"></i>
                    </button>
                    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                        <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon">
                                    <i class="mdi mdi-email-outline"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal">You received a new message</h6>
                                    <small class="text-muted"> 6 min ago </small>
                                </div>
                            </li>
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon">
                                    <i class="mdi mdi-account-outline"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal">New user registered</h6>
                                    <small class="text-muted"> 15 min ago </small>
                                </div>
                            </li>
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon">
                                    <i class="mdi mdi-alert-circle-outline"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal">System Alert</h6>
                                    <small class="text-muted"> 2 days ago </small>
                                </div>
                            </li>
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail item-thumbnail-icon">
                                    <i class="mdi mdi-update"></i>
                                </div>
                                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="item-subject font-weight-normal">You have a new update</h6>
                                    <small class="text-muted"> 3 days ago </small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="menu-button-container">
                    <button class="mdc-button mdc-menu-button">
                        <i class="mdi mdi-email"></i>
                        <span class="count-indicator">
                            <span class="count">3</span>
                        </span>
                    </button>
                    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                        <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                            <li class="mdc-list-item" role="menuitem">
                                <div class="item-thumbnail">
                                    <img src="{{ asset('images/faces/face4.jpg') }}" alt="user">
            </div>
            <div class="item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                <small class="text-muted"> 1 Minutes ago </small>
            </div>
            </li>
            <li class="mdc-list-item" role="menuitem">
                <div class="item-thumbnail">
                    <img src="{{ asset('images/faces/face2.jpg') }}" alt="user">
                </div>
                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                    <small class="text-muted"> 15 Minutes ago </small>
                </div>
            </li>
            <li class="mdc-list-item" role="menuitem">
                <div class="item-thumbnail">
                    <img src="{{ asset('images/faces/face3.jpg') }}" alt="user">
                </div>
                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                    <small class="text-muted"> 18 Minutes ago </small>
                </div>
            </li>
            </ul>
        </div>
</div> --}}
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
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>