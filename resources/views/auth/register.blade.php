@extends('layouts.app')

@section('title') Регистрация - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title">
                <h1>Регистрация</h1>
            </div>
            <div class="section-content">
                <form method="POST" action="{{ route('register') }}" class="auth-form">
                    @csrf

                    <div class="form-group">
                        <label for="name" >
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" required autofocus
                                    placeholder="Имя">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="email" >

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" required
                                   placeholder="Электронная почта">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="password">

                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   placeholder="Пароль">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required placeholder="Повторите пароль">
                        </label>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Зарегистрироваться
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
