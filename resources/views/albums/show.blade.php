@extends('layouts.app')

@section('content')

<div id="mainContainer" class="col-md-10">
  <div class="row col-md-10">
    <div class="albumImage mt-5 ml-5">
      <img src="../{{$albumId->album->artworkPath}}" alt="">
    </div>
    <div class="col-md-2 mt-5">
      <h5 class="albumTitle text-white mt-2">{{$albumId->album->title}}</h5>
      <h5 class="artistName mt-2">{{$albumId->album->artist->name}}</h5>
      <h5 class="songCount mt-2">{{$albumSongCount}} songs</h5>
    </div>
  </div>
  <div class="row">
    <div class="trackListContainer col-md-12">
      <?php $i = 1; ?>
      @foreach ($albumSongIds as $albumSongId)
      <ul class="text-white ml-3">
        <li class="trackListRow">
          <div class="trackCount">
            <?php echo $i++; ?>
            <img src="../images/icons/play-white.png" alt="Play">
          </div>
          <div class="d-flex justify-content-between">
            <div class="trackInfo">
              <span class="trackName text-white">{{$albumSongId->song->title}}</span>
              <span class="artistName">{{$albumId->album->artist->name}}</span>
            </div>

            <div class="trackOptions">
              <img class="optionsButton" src="../images/icons/more.png" alt="">
              <span class="duration">{{$albumSongId->song->duration}}</span>
            </div>
          </div>
        </li>
      </ul>
      @endforeach
    </div>
  </div>
</div>
@include('includes/_sideNavMenu')

@include('includes/_footerNavMenu')

@endsection