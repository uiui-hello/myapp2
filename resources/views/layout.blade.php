<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <nav class="nabbar navbar-expand-lg navbar-dark bg-primary mb-4 py-2 px-5">
    <a class="navbar-brand" href="#"> ToDoリスト </a>
    <button class="btn btn-secondary dropdown-toggle float-right bg-transparent border border-0" type="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      {{Auth::user()->name}}
    </button>
    <div class="dropdown-menu" id="navbarSupportedContent">
        <a class="dropdown-item" href="{{route('logout') }}" onclick="event.preventDefault();
    document.getElementById ('logout-form').submit();">ログアウト</a>
        <form id='logout-form' action="{{ route('logout')}}" method="POST" style="display: none;">
    @csrf
       </form>
    </div>
  </nav>

  <div class="container">
    @if(session('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{@session('message')}}
    </div>
    @endif

    @yield('header')
    @yield('content')
  </div>

  @yield('scripts')
</body>

</html>