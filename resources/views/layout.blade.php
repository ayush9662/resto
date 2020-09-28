<html>
<head>
<title>Page Name- @yield('title')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>
<body>
  <!--section inside the div or divv inside the section both are feasible-->
@section('header')
<div class="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Arise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Restolist">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/RestoAdd">Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search</a>
        </li>
        @if(Session::get('user'))
        <li class="nav-item">
          <a class="nav-link" href="/logout">welcome | {{Session::get('user')}}</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Useradd">Register</a>
        </li>
        @endif

      </ul>
    </div>
  </nav>
</div>
@show
<div class="container">
@yield('content')
</div>
<!--@section('footer')
<div class="footer">
<h1>This is footer section</h1>
</div>
@show-->
</body>
</html>
