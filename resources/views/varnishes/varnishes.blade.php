@extends('layouts.app')

@section('title') Лаки - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
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
                                <a href="#">
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
