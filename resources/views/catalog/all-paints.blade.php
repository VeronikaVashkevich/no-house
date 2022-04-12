@extends('layouts.app')

@section('title') Лакокрасочные материалы no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            @if(count($paints) >= 1)
                <div class="section-title section-title-center">
                    <h3>Краски</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($paints as $paint)
                                @if($paint->type == 'dye')
                                    <div class="good">
                                        <div class="good-image">
                                            <img src="{{ $paint->image }}" alt="good picture">
                                        </div>
                                        <div class="good-price">{{ $paint->price }} BYN</div>
                                        <div class="good-name">
                                            <a href="{{ route('paint.show', $paint) }}">{{ $paint->name }}</a>
                                        </div>
                                        <a href="#">
                                            <input type="button" value="В корзину" class="btn btn-primary">
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            @if(count($paints) >= 1)
                <div class="section-title section-title-center">
                    <h3>Эмали</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($paints as $paint)
                                @if($paint->type == 'enamel')
                                    <div class="good">
                                        <div class="good-image">
                                            <img src="{{ $paint->image }}" alt="good picture">
                                        </div>
                                        <div class="good-price">{{ $paint->price }} BYN</div>
                                        <div class="good-name">
                                            <a href="{{ route('paint.show', $paint) }}">{{ $paint->name }}</a>
                                        </div>
                                        <a href="#">
                                            <input type="button" value="В корзину" class="btn btn-primary">
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            @if(count($varnishes) >= 1)
                <div class="section-title section-title-center">
                    <h3>Лаки</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($varnishes as $varnish)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $varnish->image }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $varnish->price }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route('varnishes.show', $varnish) }}">{{ $varnish->name }}</a>
                                    </div>
                                    <a href="{{ route('addToCart', ['className' => 'varnish', 'id' => $varnish->id]) }}">
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
