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
                        <li class="panel-el">Жидкие обои</li>
                        <li class="panel-el">Двери</li>
                        <li class="panel-el">Плитка</li>
                        <li class="panel-el">Мойки для кухни</li>
                        <li class="panel-el">Ванны</li>
                        <li class="panel-el">Смесители</li>
                        <li class="panel-el">Ламинат</li>
                        <li class="panel-el">Ленолеум</li>
                        <li class="panel-el">Пробковый пол</li>
                        <li class="panel-el">Краски, эмали, лаки</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('footer')
    @parent
@endsection
