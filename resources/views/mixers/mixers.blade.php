@extends('layouts.app')

@section('title') Смесители - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
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
                                <a href="{{ route('addToCart', ['className' => 'mixer', 'id' => $mixer->id]) }}">
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
