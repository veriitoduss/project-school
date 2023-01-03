@extends('head.teacher')
<div class="super_container">
  <header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
      <div class="logo_container">
        <div class="logo">
          <img src="img/icono.ico" width="80" alt="">
        </div>
      </div>
      <nav class="main_nav_container">
        <div class="main_nav">
          <ul class="main_nav_list">
            <li class="main_nav_item"><a href="{{route('login.destroy')}}"><i class="fas fa-home"></i>Inicio</a></li>
            <li class="main_nav_item"><a href=""><i class="fas fa-user"></i>Perfil</a></li>

            <li class="main_nav_item">
              <a href="{{route('login.destroy')}}">{{auth()->user()->name}} <i class="fas fa-sign-out-alt" style="font-size: 20px;"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

</div>