@extends('layouts.app')

@section('title') {{ $laminate->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $laminate->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $laminate->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $laminate->price }} BYN
                            </div>
                            <a href="{{ route('addToCart', ['className' => 'laminate', 'id' => $laminate->id]) }}" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $laminate->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $laminate->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Класс устойчивости к истиранию</td>
                                    <td class="p-text">{{ $laminate->abrasionResistanceClass }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $laminate->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Класс нагрузки</td>
                                    <td class="p-text">{{ $laminate->loadClass }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $laminate->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип замка</td>
                                    <td class="p-text">{{ $laminate->lockClass }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">V-образная фаска</td>
                                    <td class="p-text">
                                        @if ($laminate->vShape == 1)
                                            Есть
                                        @else
                                            Нет
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-title">Слой пробки</td>
                                    <td class="p-text">
                                        @if ($laminate->corkLayer == 1)
                                            Да
                                        @else
                                            Нет
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-title">Высота</td>
                                    <td class="p-text">{{ $laminate->height }} мм</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Ширина</td>
                                    <td class="p-text">{{ $laminate->width }} мм</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Длина</td>
                                    <td class="p-text">{{ $laminate->length }} мм</td>
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
