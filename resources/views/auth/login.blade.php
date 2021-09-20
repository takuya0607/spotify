@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="h2 text-white text-center">
        {{ __('Login to your account') }}
      </div>
      <div class="card-body">
        <form id="loginForm" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>

            <div class="col-md-8">
              <input id="username" type="text" class="form @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="" autofocus placeholder="ニックネームを入力してください">

              @error('username')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

            <div class="col-md-8">
              <input id="password" type="password" class="form @error('password') is-invalid @enderror" name="password" required placeholder="パスワードを入力してください">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group row text-center">
            <div class="col-md-8 offset-md-4">
              <a class="text-white font-weight-bold small" href="/register"> {{ __('アカウントをお持ちでない方はこちら') }}</a>
            </div>
          </div>

          <div class="form-group row mb-0 text-center">
            <div class="col-md-8 offset-md-4">
              <button type="submit" name="loginButton" class="loginButton">
                {{ __('ログイン') }}
              </button>

              @if (Route::has('password.request'))
              <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                {{ __('パスワードをお忘れですか?') }}
              </a>
              @endif
            </div>
          </div>
        </form>

      </div>
    </div>
    <div class="col-md-5 ml-5">
      <div class="rightTitle h1">
        <h1>{{ __('Get great music, right now') }}</h1>
      </div>
      <div class="rightTitle h2 text-white">
        <h2>{{ __('Listen to loads of songs for free') }}</h2>
      </div>
      <div>
        <ul class="rightList text-white">
          <li>Discover music you'll fall in love with</li>
          <li>Create your own playlist</li>
          <li>Follow artists to keep up to date</li>
        </ul>
      </div>

    </div>
  </div>
</div>

@endsection