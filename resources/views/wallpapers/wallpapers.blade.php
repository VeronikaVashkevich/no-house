@extends('layouts.app')

@section('title') Обои - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Обои</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @foreach($wallpapers as $wallpaper)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $wallpaper->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $wallpaper->price }} BYN</div>
                                <div class="good-name">
                                    <a href="{{ route('wallpapers.show', $wallpaper->id) }}">{{ $wallpaper->name }}</a>
                                </div>
                                <a href="{{ route('addToCart', ['className' => 'wallpaper', 'id' => $wallpaper->id]) }}">
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
