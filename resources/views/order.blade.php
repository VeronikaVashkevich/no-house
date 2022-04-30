@extends('layouts.app')

@section('title') Корзина no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="order" class="section">
            <div class="section-title section-title-center">
                <h3>Заказ #{{ $order->number }}</h3>
            </div>
            <div class="section-content">
                <div class="cart">
                    @if(count($goods) != 0)
                        @foreach($goods as $item => $key)
                            <div class="cart-item">
                                <div class="cart-item-name">
                                    <h6>{{ $key->name }}</h6>
                                </div>
                                <div class="cart-item-price">{{ $key->price }}</div>
                                <div class="cart-item-name">
                                    <h6>{{ $goodsRaw[$item]->good_qty }} шт</h6>
                                </div>
                            </div>
                        @endforeach

                    <div class="total-cost">
                        Общая стоимость:
                        <span class="cost">{{ $order->totalSum }} BYN</span>
                    </div>
                    @else
                        <h2>У вас нет товаров в корзине</h2>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
