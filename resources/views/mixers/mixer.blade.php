@extends('layouts.app')

@section('title') {{ $mixer->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $mixer->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $mixer->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $mixer->price }} BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $mixer->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $mixer->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Материал</td>
                                    <td class="p-text">{{ $mixer->material }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $mixer->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Механизм</td>
                                    <td class="p-text">{{ $mixer->mechanism }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $mixer->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Назначение</td>
                                    <td class="p-text">{{ $mixer->purpose }}</td>
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
