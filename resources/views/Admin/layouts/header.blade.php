<header class="main-header">
    <!-- Logo -->
    <a href="{{route('home', app()->getLocale())}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Pro</b>F</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>PROFAT</b>FOOD</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">Profat Yönetim</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                                <a href="{{route('logout2', app()->getLocale())}}" class="btn btn-default btn-flat">{{ __('Logout') }}</a>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
