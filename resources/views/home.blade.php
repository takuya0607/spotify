@extends('layouts.app')

@section('content')

@include('includes/_sideNavMenu')

<div id="mainContainer" class="col-md-10 float-right">
  <h2 class="row justify-content-center text-white mt-5">You Might Also Like</h2>
  <div class="text-white">

    @foreach ($albumSongs as $albumSong)
      <audio controls src="{{$albumSong->path}}"></audio>
    @endforeach

  </div>
  <!-- <div class=" card">
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
</div>

@include('includes/_footerNavMenu')

@endsection