<header id="header">
  <h2 class="sideTitle">Spotify</h2>
    <nav id="navi">
      <div class="sideLogo pb-3">
        <a href="{{ route('home') }}">
          <img src="../images/icons/logo.png" alt="">
        </a>
      </div>
      <ul class="nav-menu">
        <li class="pt-3 pb-3">
          <a href="#">Search <img src="../images/icons/search.png" class="icon"></a>
        </li>
      </ul>
      <ul class="nav-sns">
        <li><a href="https://twitter.com/" target="_blank">Browse</a></li>
        <li><a href="https://www.facebook.com/" target="_blank">Your Music</a></li>
        <li><a href="https://www.instagram.com/" target="_blank">Takuya</a></li>
        @guest
        <li>
          <a href="{{ route('login') }}" target="_blank">Login</a>
        </li>
        @else
        <li>
          <a href="{{ route('logout') }}" target="_blank" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
        @endguest
      </ul>
    </nav>

    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
</header>