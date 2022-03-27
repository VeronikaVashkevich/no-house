@extends('layouts.app')

@section('title') Каталог no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

        <section id="catalog" class="section">
            <div class="section-title section-title-center">
                <h1>Каталог</h1>
            </div>
            <div class="section-content">
                <div class="menu">
                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="#" class="menu-link">
                                <h4>Внутренняя отделка</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="{{ route('wallpapers.index') }}" class="menu-link">Обои</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('pvcPanels.index') }}" class="menu-link">Панели ПВХ</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Жидкие обои</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="{{ route('doors.index') }}" class="menu-link">
                                <h4>Двери</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="#" class="menu-link">Межкомнатные двери</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Входные двери</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Стеклянные двери</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="{{ route('tiles.index') }}" class="menu-link">
                                <h4>Плитка</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="#" class="menu-link">Керамическая</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Мозаика</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Плитка из камня</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="#" class="menu-link">
                                <h4>Сантехника</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="{{ route('sinks.index') }}" class="menu-link">Мойки для кухни</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('baths.index') }}" class="menu-link">Ванные</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Смесители</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="#" class="menu-link">
                                <h4>Напольные покрытия</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="#" class="menu-link">Ламинат</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Ленолеум</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Пробковый пол</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="#" class="menu-link">
                                <h4>Лакокрасочные материалы</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="#" class="menu-link">Краски</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Эмали</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Лаки</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
