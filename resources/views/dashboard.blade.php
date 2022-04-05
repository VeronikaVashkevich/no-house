@extends('layouts.app')

@section('title') Панель управления @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Панель управления</h3>
            </div>
            <div class="section-content">
                <div class="panel">
                    <ul>
                        <li class="panel-el">
                            <a href="{{ route('wallpapersDashboard') }}">Обои</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('pvsPanelsDashboard') }}">Панели ПВХ</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('doorsDashboard') }}">Двери</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('tilesDashboard') }}">Плитка</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('sinksDashboard') }}">Мойки для кухни</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('bathsDashboard') }}">Ванны</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('mixersDashboard') }}">Смесители</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('laminateDashboard') }}">Ламинат</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('linoleumDashboard') }}">Линолеум</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('parquetDashboard') }}">Паркет</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('paintDashboard') }}">Краски, эмали</a>
                        </li>
                        <li class="panel-el">
                            <a href="{{ route('varnishesDashboard') }}">Лаки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('footer')
    @parent
@endsection
