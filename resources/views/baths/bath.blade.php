@extends('layouts.app')

@section('title') {{ $bath->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $bath->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $bath->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $bath->price }} BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $bath->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $bath->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Материал</td>
                                    <td class="p-text">{{ $bath->material }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $bath->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Форма</td>
                                    <td class="p-text">{{ $bath->form }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $bath->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип установки</td>
                                    <td class="p-text">{{ $bath->montageType }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Максимальная нагрузка</td>
                                    <td class="p-text">{{ $bath->maxLoad }} кг</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Высота</td>
                                    <td class="p-text">{{ $bath->height }} см</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Ширина</td>
                                    <td class="p-text">{{ $bath->width }} см</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Глубина</td>
                                    <td class="p-text">{{ $bath->depth }} см</td>
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
