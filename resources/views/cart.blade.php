@extends('layouts.app')

@section('title') Корзина no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Корзина</h3>
            </div>
            <div class="section-content">
                <div class="cart">
                    @if(count($cart) != 0)
                        @foreach($cart as $item)
                            <div class="cart-item">
                                <div class="cart-item-image">
                                    <img src="{{ $item->attributes->image }}" alt="cart image">
                                </div>
                                <div class="cart-item-name">
                                    <h6>{{ $item->name }}</h6>
                                </div>
                                <div class="cart-item-qty">
                                    <input type="submit" value="-" class="btn-qty">
                                    <span class="qty">{{ $item->quantity }}</span>
                                    <input type="button" value="+" class="btn-qty">
                                </div>
                                <div class="cart-item-price">{{ $item->price }}</div>
                            </div>
                        @endforeach
                    @endif

                    <div class="total-cost">
                        Общая стоимость:
                        <span class="cost">{{ $total }}</span>
                    </div>
                </div>

                <div class="delivery">
                    <div class="delivery-form">
                        <div class="delivery-title">
                            <h5>Адрес доставки</h5>
                        </div>
                        <div class="delivery-fields">
                            <form action="">
                                <div class="form-group">
                                    <label for="city">
                                        <input type="text" id="city" placeholder="Город" name="city"
                                               class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="street">
                                        <input type="text" id="street" placeholder="Улица" name="street"
                                               class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="house">
                                        <input type="text" id="house" placeholder="Дом, корпус" name="house"
                                               class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="frontDoor">
                                        <input type="text" id="frontDoor" placeholder="Подъезд" name="frontDoor"
                                               class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="flat">
                                        <input type="text" id="flat" placeholder="Квартира" name="flat"
                                               class="form-control">
                                    </label>
                                </div>

                                <button class="btn btn-primary">Оформить доставку</button>
                            </form>
                            <div class="delivery-pay">
                                Оплата наличными или картой при получении
                            </div>
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
