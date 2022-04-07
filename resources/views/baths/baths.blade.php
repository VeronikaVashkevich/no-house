@extends('layouts.app')

@section('title') Ванны - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Ванны</h3>
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
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
