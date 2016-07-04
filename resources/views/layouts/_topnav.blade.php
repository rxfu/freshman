<!-- Topnav -->
<ul class="nav navbar-top-links navbar-right">
    <li>欢迎{{ $user->xm }}同学使用新生报名系统！</li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user fa-fw"></i>
            <span>{{ $user->xm }}</span>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> 登出</a></li>
        </ul>
    </li>
</ul>
<!-- /.navbar-top-links -->