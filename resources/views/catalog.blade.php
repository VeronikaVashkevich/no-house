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
                            <a href="{{ route('catalog.interiorDecoration') }}" class="menu-link">
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
                                <a href="{{ route('wallpapers.index', ['is_wet' => 1]) }}" class="menu-link">Жидкие обои</a>
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
                                <a href="{{ route('doors.index', ['type' => 'indoor']) }}" class="menu-link">Межкомнатные двери</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('doors.index', ['type' => 'outdoor']) }}" class="menu-link">Входные двери</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('doors.index', ['type' => 'glass']) }}" class="menu-link">Стеклянные двери</a>
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
                                <a href="{{ route('tiles.index', ['type' => 'tile']) }}" class="menu-link">Керамическая</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('tiles.index', ['type' => 'mosaic']) }}" class="menu-link">Мозаика</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('tiles.index', ['type' => 'stone']) }}" class="menu-link">Плитка из камня</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="{{ route('catalog.plumbing') }}" class="menu-link">
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
                                <a href="{{ route('mixers.index') }}" class="menu-link">Смесители</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="{{ route('catalog.floor') }}" class="menu-link">
                                <h4>Напольные покрытия</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="{{ route('laminate.index') }}" class="menu-link">Ламинат</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('linoleum.index') }}" class="menu-link">Линолеум</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('parquet.index') }}" class="menu-link">Паркет</a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-list">
                        <div class="menu-list-title">
                            <a href="{{ route('catalog.allPaints') }}" class="menu-link">
                                <h4>Лакокрасочные материалы</h4>
                            </a>
                        </div>
                        <ul class="menu-items">
                            <li class="menu-item">
                                <a href="{{ route('paint.index', ['type' => 'dye']) }}" class="menu-link">Краски</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('paint.index', ['type' => 'enamel']) }}" class="menu-link">Эмали</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('varnishes.index') }}" class="menu-link">Лаки</a>
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
