@extends('theme')

@section('body')
<nav class="sidebar close" id="sidebar">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="{{ asset('images/logo.png') }}" alt="School Logo">
      </span>

      <div class="text logo-text">
        <span class="name"> Iyanju </span>
      </div>
    </div>
    <span class='bx bx-chevron-right toggle' id="toggle"></span>
  </header>
  <hr />

  <div class="menu-bar ">
    <div class="menu">
      <ul class="menu-links">

        <li class="nav-link">
          <!-- active -->
          <a href="/dashboard">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="/settings">
            <i class='bx bx-wrench bx-flip-horizontal icon'></i>
            <span class="text nav-text">Settings</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="bottom-content">
      <hr />
      <li class="nav-link">
        <a href="{{ route('profile') }}">
          <i class='bx bx-user icon'></i>
          <span class="text nav-text">Profile</span>
        </a>
      </li>

      <li>
        <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>

    </div>
  </div>
</nav>

<div class="content d-flex flex-column">
  <div class="flex-grow-1">
    @yield('content')
  </div>
  <div class="p-3">
    <hr>
    <div class="d-flex d-flex justify-content-between credit">
      Iyanju
      <!-- <img src="" alt=""> -->
      <div class="social">
        <p>Product of <a href="">Platinum Innovations</a> </p>
      </div>
    </div>
  </div>
</div>

@endsection