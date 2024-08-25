<div class="logo">
   
</div>
<div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav main_nav">
        <li>
            <a href="{{ url('/admin/dashboard') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a data-toggle="collapse" href="#manageusers">
                <i class="now-ui-icons users_circle-08"></i>
                <p>
                    Manage User<b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="manageusers">
                <ul class="nav">
                    <li>
                        <a href="{{ url('/admin/users') }}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('roles') }}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="{{ route('location') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Locations</p>
            </a>
        </li>
        <li>
            <a data-toggle="collapse" href="#collapseExample">
                <i class="now-ui-icons loader_gear"></i>
                <p>
                    Settings<b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="collapseExample">
                <ul class="nav">
                    <li>
                        <a href="{{ url('/admin/logo_settings') }}">
                            {{-- <span class="sidebar-mini-icon">LS</span> --}}
                            <i class="now-ui-icons text_align-left"></i>
                            <span class="sidebar-normal"> Logo Setting </span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="{{ url('/admin/menus') }}">
                            <i class="now-ui-icons text_align-left"></i>
                            <span class="sidebar-normal"> Menu Setting </span>
                        </a>
                    </li> -->
                   
                </ul>
            </div>
        </li>
        <li>
            <a href="{{ url('/admin/pages') }}">
                <i class="now-ui-icons text_align-center"></i>
                <p>Pages</p>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/payments') }}">
                <i class="now-ui-icons text_align-center"></i>
                <p>Payments</p>
            </a>
        </li>
        
    </ul>
    <ul class="footer_link nav">
        <li class="active-pro1">
            <a class="dropdown-item" href="javascript:void(0)"
                onclick="event.preventDefault(); document.querySelector('#admin-logout-form').submit();">
                <i class="now-ui-icons sport_user-run"></i>
                <p>Logout</p>
                <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </li>
    </ul>
</div>
