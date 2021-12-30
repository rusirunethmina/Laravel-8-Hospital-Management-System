<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('home') }}" target="_blank">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#home"
                        aria-expanded="false" aria-controls="home">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="home" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Slider Menu</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Home About</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Home Portfolio</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Home Brand</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('add.doctor_view') }}">
                                    <span class="nav-text">Add Doctor</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
