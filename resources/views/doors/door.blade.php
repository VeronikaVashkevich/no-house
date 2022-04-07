@extends('layouts.app')

@section('title') {{ $door->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $door->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $door->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $door->price }} BYN
                            </div>
                            <a href="{{ route('addToCart', ['className' => 'door', 'id' => $door->id]) }}" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $door->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $door->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $door->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Текстура</td>
                                    <td class="p-text">{{ $door->construction }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $door->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Основа</td>
                                    <td class="p-text">{{ $door->doorTrim }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $door->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Ширина</td>
                                    <td class="p-text">{{ $door->width }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Высота</td>
                                    <td class="p-text">{{ $door->height }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Стекло</td>
                                    <td class="p-text">
                                        @if ($door->glass == 1)
                                            Да
                                        @else
                                            Нет
                                        @endif
                                    </td>
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
