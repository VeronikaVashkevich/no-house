
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
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
