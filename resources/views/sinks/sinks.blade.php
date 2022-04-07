@extends('layouts.app')

@section('title') Кухонные мойки - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Кухонные мойки</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @foreach($sinks as $sink)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $sink->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $sink->price }} BYN</div>
                                <div class="good-name">
                                    <a href="{{ route('sinks.show', $sink) }}">{{ $sink->name }}</a>
                                </div>
                                <a href="{{ route('addToCart', ['className' => 'sink', 'id' => $sink->id]) }}">
                                    <input type="button" value="В корзину" class="btn btn-primary">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
