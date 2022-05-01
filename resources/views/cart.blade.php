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
                                    <select name="qty" class="form-control item-qty" data-price="{{ $item->price }}">
                                        @for($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}"
                                                    @if ($i == $item->quantity)
                                                    selected
                                                @endif
                                            >
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                   {{-- <form action="{{route('deleteFromCart', $item->id)}}" method="get"
                                          class="minus-item">
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="button" value="-" class="btn-qty btn-qty-minus">
                                    </form>
                                    <span class="qty" data-price="{{ $item->price }}">{{ $item->quantity }}</span>
                                    <input type="button" value="+" class="btn-qty btn-qty-plus">--}}
                                </div>
                                <div class="cart-item-price">{{ $item->price }}</div>
                                <div class="cart-item-delete">
                                    <form action="{{ route('deleteFromCart', $item->id) }}">
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="submit" value="Удалить" class="btn">
                                    </form>
                                </div>
                            </div>
                        @endforeach

                    <div class="total-cost">
                        Общая стоимость:
                        <span class="cost">{{ $total }} BYN</span>
                    </div>

                    @else

                        <h2>У вас нет товаров в корзине</h2>

                    @endif

                </div>

                <div class="delivery">
                    <div class="delivery-form">
                        <div class="delivery-title">
                            <h5>Адрес доставки</h5>
                        </div>
                        <div class="delivery-fields">
                            <form action="{{ route('orders.store') }}" method="post">
                                @method('post')
                                @csrf
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
                                    <label for="apartment">
                                        <input type="text" id="apartment" placeholder="Квартира" name="apartment"
                                               class="form-control">
                                    </label>
                                </div>
{{--                                <input type="hidden" name="cart" value="{{ $cart }}">--}}
                                @foreach($cart as $good)
                                    <input type="hidden" name="cart[]" value="{{ $good }}">
                                @endforeach
                                <input type="hidden" name="totalSum" value="{{ $total }}">
                                <button class="btn btn-primary" @if(count($cart) == 0 || !Auth::user()) disabled @endif type="submit">Оформить доставку</button>
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

    <script>
        var total = $('.cost').text();

        $(document).ready(function () {
            $('.item-qty').each(function () {
                $(this).change(function () {
                    total = 0;

                    $('.item-qty').each(function () {
                        total += $(this).data('price') * $(this).val();
                        console.log($(this).data('price'));
                    });

                    $('.cost').text(total.toFixed(2) + 'BYN');
                    // $('[name="totalSum"]').val(total.toFixed(2))
                })
            })
        })
    </script>
@endsection

@section('footer')
    @parent
@endsection
