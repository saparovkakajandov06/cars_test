<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Тест для Машины </title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/dist_css/adminlte.min.css')}}">
  </head>
  <body class="hold-transition sidebar-mini">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Главная страница</a>
      </li>
     

    </ul>
    
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

  

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       
          <li class="nav-item">
            <a href="{{route('cars.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Машины
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('markas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Марка
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('brands.index')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
              Бренды
              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('models.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Модели
              
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
              Выход
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
              
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <div class="container">


      @yield ('content')

      <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong><a href="#">Разработал Какаджан Сапаров</a>.</strong> Все права защищены.
  </footer>


      <script src="{{asset('js/jquery/css/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- bs-custom-file-input -->
<script src="{{asset('js/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  </body>
</html>