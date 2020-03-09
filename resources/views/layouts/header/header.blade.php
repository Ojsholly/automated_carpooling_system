<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
    <div class="brand-logo">
        <a href="{{ url('dashboard') }}">
            <b class="logo-abbr"><img src="{{ asset('new-ui/images/logo.png') }}" alt=""> </b>
            <span class="logo-compact"><img src="{{ asset('new-ui/images/logo-compact.png') }}" alt=""></span>
            <span class="brand-title">
                <img src="{{ asset('new-ui/images/logo-text.png') }}" alt="">
            </span>
        </a>
    </div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        @if(auth()->user()->avatar && auth()->user()->avatar_type == 0)
                        <img src="{{ asset('uploads/avatars/'.auth()->user()->avatar) }}" class="user-avatar"
                            alt="user-avatar" height="40" width="40">
                        @elseif(auth()->user()->avatar && auth()->user()->avatar_type == 1)
                        <img src="{{ asset(auth()->user()->avatar) }}" alt="user-avatar" height="40" width="40"
                            class="user-avatar">
                        @else
                        <img src="{{ asset('images/profile.jfif') }}" alt="user-avatar" height="40" width="40"
                            class="user-avatar">
                        @endif
                        {{-- <img src="images/user/1.png" height="40" width="40" alt=""> --}}
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{ url('profile/view-profile') }}"><i class="icon-user"></i>
                                        <span>View Profile</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('profile/edit-profile') }}"><i class="icon-badge"></i>
                                        <span>Edit Profile</span></a>
                                </li>
                                <hr class="my-2">
                                <li>
                                    <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                </li>
                                <li>
                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                            class="icon-key"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
