@extends('layouts.app')

@section('title') Линолуем - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Линолуем</h3>
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
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
