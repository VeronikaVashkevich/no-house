@extends('layouts.app')

@section('title') Плитка - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Плитка</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @foreach($tiles as $tile)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $tile->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $tile->price }} BYN</div>
                                <div class="good-name">
                                    <a href="{{ route('tiles.show', $tile) }}">{{ $tile->name }}</a>
                                </div>
                                <a href="{{ route('addToCart', ['className' => 'tile', 'id' => $tile->id]) }}">
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
