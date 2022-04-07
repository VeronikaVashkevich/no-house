@extends('layouts.app')

@section('title') {{ $pvcPanel->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $pvcPanel->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $pvcPanel->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $pvcPanel->price }} BYN
                            </div>
                            <a href="{{ route('addToCart', ['className' => 'pvcPanel', 'id' => $pvcPanel->id]) }}" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $pvcPanel->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $pvcPanel->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $pvcPanel->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Фактура</td>
                                    <td class="p-text">{{ $pvcPanel->texture }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $pvcPanel->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Монтаж</td>
                                    <td class="p-text">{{ $pvcPanel->mounting }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $pvcPanel->color }}</td>
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
