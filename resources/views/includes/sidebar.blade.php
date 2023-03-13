<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('CT') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        @if (isset(auth()->user()->picture))
        <img src="{{ Storage::url(Auth::user()->picture) }}">
        @else
        <img class="avatar border-gray" src="{{ asset('img/No Profile Picture.png') }}" alt="...">
        @endif
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>
          @auth
            {{ auth()->user()->name }}
            @endauth
            <b class="caret"></b>
          </span>
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> S </span>
                <span class="sidebar-normal"> Settings </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($menuParent == 'laravel' || $activePage == 'dashboard') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" {{ ($menuParent == 'laravel' || $activePage == 'dashboard') ? ' aria-expanded="true"' : '' }}>
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($menuParent == 'dashboard' || $menuParent == 'laravel') ? ' show' : '' }}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>





    </ul>
  </div>
</div>