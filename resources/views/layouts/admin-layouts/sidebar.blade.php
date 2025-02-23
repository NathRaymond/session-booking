<!-- LOGO -->
<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{asset("admin-assets/images/auth-one-bg.jpg")}}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="{{asset("admin-assets/images/auth-one-bg.jpg")}}" alt="" height="17">
        </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{asset("admin-assets/images/auth-one-bg.jpg")}}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="{{asset("admin-assets/images/auth-one-bg.jpg")}}" alt="" height="50">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>

<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="{{ route('admin-dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Manage Session</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarApps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <!-- <a href="{{route("admin-session-page")}}" class="nav-link" data-key="t-chat"> Session </a> -->
                            <a href="#" class="nav-link" data-key="t-chat"> Session </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarMultilevel" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                    <i class="mdi mdi-logout"></i> <span data-key="t-multi-level">Logout</span>
                </a>

            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>