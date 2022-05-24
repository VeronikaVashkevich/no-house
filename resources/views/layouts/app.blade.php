<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">

</head>
<body>
<div class="wrapper">
    <div class="content">
        @section('header')
            <header>
                <div class="header-content-top">
                    <div class="container header-top-container">
                        <div class="site-title">
                            <a href="{{ route('index') }}">no-house</a>
                        </div>
                        <div class="header-search">
                            <form action="{{ route('search') }}" id="searchForm" method="get">
                                <label for="search">
                                    <input type="text" name="search_field" id="search" placeholder="Поиск товаров для дома">
                                </label>
                                <button type="submit" class="btn btn-search">Поиск</button>
                            </form>
                        </div>
                        <div class="authentication">
                            @role('admin')
                            <a href="{{ route('dashboard') }}">Панель управления &nbsp/&nbsp</a>
                            @endrole
                            @auth
                                <a href="{{ route('home') }}">Личный кабинет &nbsp/&nbsp</a>
                                <a href="{{ route('logout') }}">Выйти</a>
                            @else
                                <a href="{{ route('login') }}">Вход &nbsp/&nbsp </a>
                                <a href="{{ route('register') }}">Регистрация</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="header-content-bottom">
                    <div class="container header-bottom-container">
                        <div class="navigation">
                            <div class="nav-group">
                                <a href="{{ route('catalog') }}" class="nav-group-link">
                                    <img src="{{asset('img/menu.png')}}" alt="menu">
                                </a>
                                <a href="{{ route('catalog') }}" class="nav-group-link" style="margin-left: 13px">
                                    Каталог
                                </a>
                            </div>
                            <a href="{{ route('deliveryInfo') }}" class="nav-link">Доставка и оплата</a>
                            <a href="{{ route('reviews.index') }}" class="nav-link">Отзывы</a>
                        </div>
                        <div class="cart-link-block">
                            <a href="{{ route('cart') }}" class="cart-link">Корзина</a>
                        </div>
                    </div>
                </div>
            </header>
        @show

        @yield('content')
    </div>
    <div class="footer">
        @section('footer')
            <footer>
                <div class="container footer-container">
                    <div class="time">
                        <div class="footer-text">
                            Время работы
                        </div>
                        <div class="footer-content">
                            8:00 - 20:00
                        </div>
                    </div>
                    <div class="short-number">
                        <div class="footer-text">
                            Короткий номер
                        </div>
                        <div class="footer-content">
                            7777
                        </div>
                    </div>
                </div>
            </footer>
        @show
    </div>
</div>
</body>
</html>
