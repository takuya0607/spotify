@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="leftTitle h2 text-white text-center">
        {{ __('Create your free account') }}
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <!-- username -->
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>

            <div class="col-md-8">
              <input id="username" type="text" class="form @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus placeholder="ニックネームを入力してください">

              @error('username')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- firstName -->
          <div class="form-group row">
            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('姓') }}</label>

            <div class="col-md-8">
              <input id="firstName" type="text" class="form @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="name" autofocus placeholder="名字を入力してください">

              @error('firstName')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- lastName -->
          <div class="form-group row">
            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('名') }}</label>

            <div class="col-md-8">
              <input id="lastName" type="text" class="form @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="name" autofocus placeholder="名前を入力してください">

              @error('lastName')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- email -->
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

            <div class="col-md-8">
              <input id="email" type="email" class="form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mailを入力してください">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- email2 -->
          <div class="form-group row">
            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">{{ __('E-mail確認') }}</label>

            <div class="col-md-8">
              <input id="email-confirm" type="email" class="form" name="email_confirmation" required autocomplete="email" placeholder="同じE-mailを入力してください">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- password -->
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-8">
              <input id="password" type="password" class="form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワードを入力してください">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <!-- password2 -->
          <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Password確認') }}</label>

            <div class="col-md-8">
              <input id="password-confirm" type="password" class="form" name="password_confirmation" required autocomplete="new-password" placeholder="同じパスワードを入力してください">
            </div>
          </div>

          <input type="hidden" name="signUpDate" value="<?php echo date('Y-m-d H:i:s') ?>" />
          <input type="hidden" name="profilePic" value="aaa" />

          <div class="form-group row text-center">
            <div class="col-md-8 offset-md-4">
              <a class="text-white font-weight-bold small" href="login"> {{ __('既にアカウントをお持ちの方はこちら') }}</a>
            </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="registerButton">
                {{ __('新規登録') }}
              </button>
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

  @endsection