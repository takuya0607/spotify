@extends('layouts.app')

@section('content')

@include('includes/_sideNavMenu')

<div id="mainContainer" class="col-md-10 float-right">
  <h2 class="row justify-content-center text-white mt-3">You Might Also Like</h2>
  <div class="text-white">
    <div class="albumContainer row mt-5 ml-3">
      @foreach ($album_songs as $album_song)
      <div class="col-md-2">
        <a href="{{ url('albums/' .$album_song->album->id) }}">
          <img class="homeAlbumImage" src="{{$album_song->album->artworkPath}}" alt="">
          <h5 class="homeAlbumTitle text-center mt-2">{{$album_song->album->title}}</h5>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>

<!-- <div class="card">
      <div class="card-header">Dashboard</div>

      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

        <p class="">ログインに成功しました!</p>
      </div>
  </div> -->

@include('includes/_footerNavMenu')

@endsection