@extends('layouts.app')

@section('title') Сантехника no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            @if(count($sinks) >= 1)
                <div class="section-title section-title-center">
                    <h3>Мойки для кухни</h3>
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
            @endif

                @if(count($baths) >= 1)
                    <div class="section-title section-title-center">
                        <h3>Ванные</h3>
                    </div>
                    <div class="section-content">
                        <div class="goods-group">
                            <div class="goods">
                                @foreach($baths as $bath)
                                    <div class="good">
                                        <div class="good-image">
                                            <img src="{{ $bath->image }}" alt="good picture">
                                        </div>
                                        <div class="good-price">{{ $bath->price }} BYN</div>
                                        <div class="good-name">
                                            <a href="{{ route('baths.show', $bath) }}">{{ $bath->name }}</a>
                                        </div>
                                        <a href="{{ route('addToCart', ['className' => 'bath', 'id' => $bath->id]) }}">
                                            <input type="button" value="В корзину" class="btn btn-primary">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

            @if(count($mixers) >= 1)
                <div class="section-title section-title-center">
                    <h3>Смесители</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($mixers as $mixer)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $mixer->image }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $mixer->price }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route('mixers.show', $mixer) }}">{{ $mixer->name }}</a>
                                    </div>
                                    <a href="#">
                                        <input type="button" value="В корзину" class="btn btn-primary">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
