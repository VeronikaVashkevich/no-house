@extends('layouts.app')

@section('title') {{ $varnish->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $varnish->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $varnish->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $varnish->price }} BYN
                            </div>
                            <a href="{{ route('addToCart', ['className' => 'varnish', 'id' => $varnish->id]) }}" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $varnish->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $varnish->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Основа</td>
                                    <td class="p-text">{{ $varnish->basis }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $varnish->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Назначение</td>
                                    <td class="p-text">{{ $varnish->appointment }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Вес</td>
                                    <td class="p-text">{{ $varnish->weight }} кг</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Время высыхания</td>
                                    <td class="p-text">{{ $varnish->time }} ч</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Вид окрашиваемого материала</td>
                                    <td class="p-text">{{ $varnish->material }}</td>
                                </tr>
                            </table>
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
