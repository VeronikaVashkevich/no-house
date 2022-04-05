@extends('layouts.app')

@section('title') {{ $paint->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $paint->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $paint->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $paint->price }} BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $paint->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $paint->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $paint->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $paint->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Назначение</td>
                                    <td class="p-text">{{ $paint->appointment }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Вес</td>
                                    <td class="p-text">{{ $paint->weight }} кг</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Время высыхания</td>
                                    <td class="p-text">{{ $paint->time }} ч</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Вид окрашиваемого материала</td>
                                    <td class="p-text">{{ $paint->material }}</td>
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
