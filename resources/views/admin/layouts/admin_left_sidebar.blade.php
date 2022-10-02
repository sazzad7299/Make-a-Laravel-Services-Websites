<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a @if(\Request::segment(2)=='admin') class="active" @endif href="{{route('admin.home')}}"><div class="pull-left"><i class="zmdi zmdi-home mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a @if(\Request::segment(2)=='service') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-run mr-20"></i><span class="right-nav-text">Services</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active-page" href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="auth_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='portfolio') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr1"><div class="pull-left"><i class="zmdi zmdi-collection-plus mr-20"></i><span class="right-nav-text">Portfolio</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr1" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active-page" href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="auth_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='project') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr2"><div class="pull-left"><i class="zmdi zmdi-favorite mr-20"></i><span class="right-nav-text">Project</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr2" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active-page" href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="auth_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='blog') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr3"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Blog</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr3" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active-page" href="{{url('admin/blog')}}">List</a>
                </li>
                <li>
                    <a class="active-page" href="{{url('admin/blog/create')}}">Add Blog</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='about') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr3"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">About</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr3" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active-page" href="blank.html">Add Portfolio</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="auth_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='contact') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr4"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Contact</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr4" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class="active-page" href="blank.html">Add Portfolio</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="auth_dr" class="collapse collapse-level-2">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <a @if(\Request::segment(2)=='all-quate') class="active" @endif href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-bookmark-outline mr-20"></i><span class="right-nav-text">Free Quate</span></div><div class="clearfix"></div></a>
        </li>
    </ul>
</div>
<!-- /Left Sidebar Menu -->
