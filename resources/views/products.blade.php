@extends('layouts.app')

@section('title') Результат поиска no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Результаты поиска</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @if(count($goods) >= 1)
                            @foreach($goods as $good)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $good['image'] }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $good['price'] }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route($good['routeName'] . '.show', $good['id']) }}">{{ $good['name'] }}</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2>Увы, у нас нет соответствующих товаров</h2>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
