@extends('layouts.app')

@section('title') Управление заказами no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

        <section id="catalog" class="section">
            <div class="section-title section-title-center">
                <h1>Все заказы</h1>
            </div>
            <div class="section-content">
                <div class="cart">
                @if(count($orders) != 0)
                    @foreach($orders as $item)
                        <div class="cart-item">
                            <div class="cart-item-name">
                                <h6>Номер заказа:{{ $item->number }}</h6>
                            </div>

                            <div class="cart-item-qty">
                                Дата заказа: {{ $item->created_at }}
                            </div>
                            <div class="cart-item-price">
                                Сумма заказа: {{ $item->totalSum }}
                            </div>
                            <div class="cart-item-delete">
                                <form action="{{ route('orders.show', $item->id) }}">
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="submit" value="Посмотреть" class="btn">
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h2>На сайте отсутствуют заказы</h2>
                @endif

            </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
