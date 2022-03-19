@extends('layouts.app')

@section('title') Имя товара no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>Краска Dekor ВД-АК-216 для потолков (14 кг)</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ asset('img/product.png') }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                38,54 BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            Предназначена для окрашивания потолков в сухих помещениях. Краска ВД-АК-216 «DEKOR» для
                            потолков, предназначена для окрашивания потолков в сухих помещениях.
                            <br>
                            Краску можно наносить на бетонные, кирпичные, деревянные, включая древесно-волокнистые,
                            древесно-стружечные плиты, оштукатуренные, ранее окрашенные поверхности.
                            <br>
                            Легко наносится, быстро сохнет, не имеет резкого запаха. После высыхания образует ровную
                            матовую поверхность белого цвета.
                            <br>
                            Пожаро- и взрывобезопасна, нетоксична.
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Производитель</td>
                                    <td class="p-text">Россия</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Степень блеска</td>
                                    <td class="p-text">Матовая</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Применение</td>
                                    <td class="p-text">Потолки</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Время высыхания</td>
                                    <td class="p-text">1 час</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Запах</td>
                                    <td class="p-text">Отсутствует</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">Белый</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Фасовка</td>
                                    <td class="p-text">14 кг</td>
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
