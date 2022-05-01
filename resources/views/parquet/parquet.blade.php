@extends('layouts.app')

@section('title') {{ $parquet->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $parquet->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $parquet->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $parquet->price }} BYN
                            </div>
                            <a href="{{ route('addToCart', ['className' => 'parquet', 'id' => $parquet->id]) }}" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $parquet->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $parquet->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $parquet->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Порода дерева</td>
                                    <td class="p-text">{{ $parquet->tree }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Покрытие</td>
                                    <td class="p-text">{{ $parquet->covering }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Длина</td>
                                    <td class="p-text">{{ $parquet->length }} мм</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Ширина</td>
                                    <td class="p-text">{{ $parquet->width }} мм</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Толщина</td>
                                    <td class="p-text">{{ $parquet->thickness }} мм</td>
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
