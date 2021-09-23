@extends('layouts.app')

@section('content')
<div class="row justify-content-center">

  <div class="col-md-8">
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

<div id="nowPlayingBarContainer" class="col-md-12">
  <div id=nowPlayingBar>

    <div id="nowPlayingLeft">
      <div class="content">
        <span class="albumLink">
          <img src="https://imagebee.org/patterns/square/square-4-3000x3000.jpg" class="albumArtwork">
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