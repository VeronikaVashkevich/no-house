@extends('layouts.app')

@section('title') {{ $linoleum->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $linoleum->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $linoleum->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $linoleum->price }} BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $linoleum->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $linoleum->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Материал</td>
                                    <td class="p-text">{{ $linoleum->material }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $linoleum->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Основа</td>
                                    <td class="p-text">{{ $linoleum->base }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $linoleum->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Назначение</td>
                                    <td class="p-text">{{ $linoleum->appointment }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Длина рулона, м</td>
                                    <td class="p-text">{{ $linoleum->length }}</td>
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
