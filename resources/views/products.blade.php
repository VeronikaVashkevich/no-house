@extends('layouts.app')

@section('title') Корзина no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Лакокрасочные материалы</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <h4 class="goods-title">Краски</h4>
                    <div class="goods">
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>
                            <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>
                            <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>
                            <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>                        <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="goods-group">
                    <h4 class="goods-title">Эмали</h4>
                    <div class="goods">
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>
                            <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>
                            <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="goods-group">
                    <h4 class="goods-title">Лаки</h4>
                    <div class="goods">
                        <div class="good">
                            <div class="good-image">
                                <img src="{{ asset('img/item-pic.png') }}" alt="good picture">
                            </div>
                            <div class="good-price">15,78 BYN</div>
                            <div class="good-name">
                                <a href="{{ route('product') }}">Краска Fawori Plastic Mix-1 матовая 5 л</a>
                            </div>
                            <a href="#">
                                <input type="button" value="В корзину" class="btn btn-primary">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
