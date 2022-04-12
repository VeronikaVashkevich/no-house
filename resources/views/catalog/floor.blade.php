@extends('layouts.app')

@section('title') Напольные покрытия no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            @if(count($laminate) >= 1)
                <div class="section-title section-title-center">
                    <h3>Ламинат</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($laminate as $lam)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $lam->image }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $lam->price }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route('laminate.show', $lam) }}">{{ $lam->name }}</a>
                                    </div>
                                    <a href="{{ route('addToCart', ['className' => 'laminate', 'id' => $lam->id]) }}">
                                        <input type="button" value="В корзину" class="btn btn-primary">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            @if(count($linoleum) >= 1)
                <div class="section-title section-title-center">
                    <h3>Линолеум</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($linoleum as $lin)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $lin->image }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $lin->price }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route('linoleum.show', $lin) }}">{{ $lin->name }}</a>
                                    </div>
                                    <a href="{{ route('addToCart', ['className' => 'linoleum', 'id' => $lin->id]) }}">
                                        <input type="button" value="В корзину" class="btn btn-primary">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            @if(count($parquet) >= 1)
                <div class="section-title section-title-center">
                    <h3>Паркет</h3>
                </div>
                <div class="section-content">
                    <div class="goods-group">
                        <div class="goods">
                            @foreach($parquet as $par)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $par->image }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $par->price }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route('parquet.show', $par) }}">{{ $par->name }}</a>
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
