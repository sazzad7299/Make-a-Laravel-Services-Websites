<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a @if(\Request::segment(2)=='admin') class="active" @endif href="{{route('admin.home')}}"><div class="pull-left"><i class=" glyphicon glyphicon-home mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a @if(\Request::segment(2)=='category') class="active" @endif href="{{route('admin.category.index')}}"><div class="pull-left"><i class="glyphicon glyphicon-th-list mr-20"></i><span class="right-nav-text">Category</span></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a @if(\Request::segment(2)=='tag') class="active" @endif href="{{route('admin.tag.index')}}"><div class="pull-left"><i class="glyphicon glyphicon-th mr-20"></i><span class="right-nav-text">Tag</span></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a @if(\Request::segment(2)=='service') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="glyphicon glyphicon-th-large mr-20"></i><span class="right-nav-text">Services</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a  href="{{route('admin.service.create')}}">Add Servies</a>
                </li>
                <li>
                    <a  href="{{route('admin.service.index')}}">Servie List</a>
                </li>

            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='portfolio') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr1"><div class="pull-left"><i class=" glyphicon glyphicon-equalizer mr-20"></i><span class="right-nav-text">Portfolio</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr1" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a  href="{{route('admin.portfolio.create')}}">Add Portfolio</a>
                </li>
                <li>
                    <a  href="{{route('admin.portfolio.index')}}">Portfolio List</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='project') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr2"><div class="pull-left"><i class="glyphicon glyphicon-fire mr-20"></i><span class="right-nav-text">Project</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr2" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a  href="{{route('admin.project.create')}}">Add Portfolio</a>
                </li>
                <li>
                    <a  href="{{route('admin.project.index')}}">Portfolio List</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='blog') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr3"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Blog</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr3" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a  href="{{route('admin.blog.index')}}">List</a>
                </li>
                <li>
                    <a href="{{route('admin.blog.create')}}">Add</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='team') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drteam"><div class="pull-left"><i class=" glyphicon glyphicon-user mr-20"></i><span class="right-nav-text">Team</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_drteam" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a  href="{{route('admin.team.index')}}">List</a>
                </li>
                <li>
                    <a href="{{route('admin.team.create')}}">Add</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='pages') class="active" @endif href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr4"><div class="pull-left"><i class="glyphicon glyphicon-book mr-20"></i><span class="right-nav-text">Pages</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="pages_dr4" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a href="{{route('admin.pages',[$about="about"])}}">About Us</a>
                </li>
                <li>
                    <a href="{{route('admin.pages',[$about="contact"])}}">Contact Us</a>
                </li>
            </ul>
        </li>
        <li>
            <a @if(\Request::segment(2)=='settings') class="active" @endif href="{{route('admin.settings')}}"><div class="pull-left"><i  class=" glyphicon glyphicon-retweet mr-20"></i><span class="right-nav-text">Website Info</span></div><div class="clearfix"></div></a>
        </li>
    </ul>
</div>
<!-- /Left Sidebar Menu -->
