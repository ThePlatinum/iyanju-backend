@extends('theme')

@section('body')
<div class="d-flex flex-column justify-content-between h-100">
  <div style="padding-top: 5%;">
    @yield('content')
  </div>
  <div class="p-3">
    <hr>
    <div class="d-flex justify-content-between credit">
      Iyanju
      <!-- <img src="" alt=""> -->
      <div class="social">
        <p>copywrite Platinum @2021</p>
      </div>
    </div>
  </div>
</div>
@endsection