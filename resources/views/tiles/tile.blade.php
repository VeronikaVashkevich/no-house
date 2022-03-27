@extends('layouts.app')

@section('title') {{ $tile->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $tile->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $tile->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $tile->price }} BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $tile->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $tile->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $tile->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $tile->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Форма</td>
                                    <td class="p-text">{{ $tile->form }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $tile->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Высота</td>
                                    <td class="p-text">{{ $tile->height }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Ширина</td>
                                    <td class="p-text">{{ $tile->width }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Толщина</td>
                                    <td class="p-text">{{ $tile->depth }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Применение</td>
                                    <td class="p-text">{{ $tile->purpose }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Класс износостойкости</td>
                                    <td class="p-text">{{ $tile->wear_class }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Морозостойность</td>
                                    <td class="p-text">
                                        @if ($tile->frost_resistance == 1)
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
