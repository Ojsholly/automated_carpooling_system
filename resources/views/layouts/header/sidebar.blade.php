<!--**********************************
            Sidebar start
        ***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="" href="{{ url('dashboard') }}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Profile</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('profile/change-avatar') }}">Change Avatar</a></li>
                    <li><a href="{{ url('profile/account-details') }}">Account Details</a></li>
                    <li><a href="{{ url('profile/view-profile') }}">View Profile</a></li>
                    <li><a href="{{ url('profile/edit-profile') }}">Edit Profile</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Cars</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('cars/add-new-car') }}">Add New Car</a></li>
                    <li><a href="{{ url('cars/view-cars') }}">View Cars</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Rides</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Add New Ride</a></li>
                    <ul aria-expanded="false">
                        <li><a href="{{ url('rides/add-new-ride') }}">Drive</a> </li>
                        <li><a href="{{ url('rides/join-new-ride') }}">Join a Ride</a></li>
                    </ul>
                    <li><a href="{{ url('rides/view-rides') }}">View Rides</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-graph menu-icon"></i> <span class="nav-text">Payments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('payments/make-payment') }}">Make Payment</a></li>
                    <li><a href="{{ url('payments/view-payments') }}">View Payment</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
