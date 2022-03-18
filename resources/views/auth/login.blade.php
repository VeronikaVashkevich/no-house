@extends('layouts.app')

@section('title') Войти - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title">
                <h1>Войти</h1>
            </div>
            <div class="section-content">
                <form method="POST" action="{{ route('login') }}" class="auth-form">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" placeholder="Электронная почта"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">
                        <input id="password" type="password" placeholder="Пароль"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-label" for="remember">
                                Запомнить меня
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Войти
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link btn-password" href="{{ route('password.request') }}">
                                Забыли пароль
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection

