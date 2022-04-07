@extends('layouts.app')

@section('title') {{ $sink->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $sink->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $sink->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $sink->price }} BYN
                            </div>
                            <a href="{{ route('addToCart', ['className' => 'sink', 'id' => $sink->id]) }}" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $sink->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $sink->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $sink->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $sink->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Форма</td>
                                    <td class="p-text">{{ $sink->form }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $sink->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Способ установки</td>
                                    <td class="p-text">{{ $sink->montage }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Материл</td>
                                    <td class="p-text">{{ $sink->material }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Количество чаш</td>
                                    <td class="p-text">{{ $sink->bowls }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Крыло</td>
                                    <td class="p-text">
                                        @if ($sink->wing == 1)
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
