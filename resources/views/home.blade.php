@extends('layouts.app')

@section('content')

<header id="header">
  <h2 class="sideTitle">Spotify</h1>
    <nav id="navi">
      <div class="sideLogo pb-3">
        <a  href="{{ route('home') }}">
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
      </ul>
    </nav>

    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
</header>

<div class="row justify-content-center">
  <div class="container">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <p class="">ログインに成功しました!</p>
        </div>
      </div>
    </div>
  </div>

  <div id="nowPlayingBarContainer" class="col-md-12">
    <div id=nowPlayingBar>

      <div id="nowPlayingLeft">
        <div class="content">
          <span class="albumLink">
            <img src="../images/icons/square.png" class="albumArtwork">
          </span>

          <div class="trackInfo">

            <span class="trackName">
              <span>Happy</span>
            </span>

            <span class="artistName">
              <span>bbb</span>
            </span>

          </div>

        </div>
      </div>

      <div id="nowPlayingCenter">

        <div class="playerControls">

          <div class="buttons">

            <button class="controlButton shuffle" title="Shuffle button">
              <img src="../images/icons/shuffle.png" alt="Shuffle">
            </button>

            <button class="controlButton previous" title="Previous button">
              <img src="../images/icons/previous.png" alt="Previous">
            </button>

            <button class="controlButton play" title="Play button">
              <img src="../images/icons/play.png" alt="Play">
            </button>

            <button class="controlButton pause" title="Pause button" style="display: none;">
              <img src="../images/icons/pause.png" alt="Pause">
            </button>

            <button class="controlButton next" title="Next button">
              <img src="../images/icons/next.png" alt="Next">
            </button>

            <button class="controlButton repeat" title="Repeat button">
              <img src="../images/icons/repeat.png" alt="Repeat">
            </button>

          </div>

        </div>

        <div class="playbackBar d-flex justify-content-between">
          <span class="progressTime current">0.00</span>

          <div class="progressBar mt-1">
            <div class="progressBarBg">
              <div class="progressParts"></div>
            </div>
          </div>

          <span class="progressTime remaining">0.00</span>
        </div>
      </div>

      <div id="nowPlayingRight">
        <div class="volumeBar">

          <button class="controlButton volume" title="Volume button">
            <img src="../images/icons/volume.png" alt="Volume">
          </button>

          <div class="progressBar mt-1">
            <div class="progressBarBg">
              <div class="progressParts"></div>
            </div>
          </div>

        </div>
      </div>


    </div>

  </div>

</div>

@endsection