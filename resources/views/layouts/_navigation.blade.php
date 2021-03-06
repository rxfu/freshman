<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="{{ route('home') }}" class="navbar-brand">广西师范大学教务处新生报名系统</a>
    </div>
    <!-- /.navbar-header -->

    @if (Auth::check())
      @include('layouts._topnav', ['user' => Auth::user()])
    @endif

    @yield('sidebar')
</nav>
<!-- /.navbar -->