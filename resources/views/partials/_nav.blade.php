<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">




<li class=""><a href="{{route('cars.index')}}">Машины</a></li>
<li class=""><a href="{{route('markas.index')}}">Марка</a></li>
<li class=""><a href="{{route('brands.index')}}">Бренды</a></li>
<li class=""><a href="{{route('models.index')}}">Модели</a></li>

</ul>
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@if (Auth::check()){{ Auth::user()->name }}@endif <span class="caret"></span></a>
  <ul class="dropdown-menu">
    @if (Auth::check())
      @if (Auth::user()->hasRole('Admin'))
        <li><a href="{{ route('register') }}">Регистрация</a></li>
        <li><a href="{{ route('users.index') }}">Администратор</a></li>
        <li><a href="{{ route('admin') }}">Админ</a></li>
        <li role="separator" class="divider"></li>
      @endif
    @endif
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Выход</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>



