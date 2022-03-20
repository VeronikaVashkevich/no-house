@extends('layouts.app')

@section('title') {{ $wallpaper->name }} no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="slider">

        </section>

        <section id="recommendations" class="section">
            <div class="section-title">
                <h3>{{ $wallpaper->name }}</h3>
            </div>
            <div class="section-content">
                <div class="product">
                    <div class="product-header">
                        <div class="product-image">
                            <img src="{{ $wallpaper->image }}" alt="product image">
                        </div>
                        <div class="product-header-sub">
                            <div class="product-price">
                                {{ $wallpaper->price }} BYN
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-description">
                            {{ $wallpaper->description }}
                        </div>
                        <div class="product-parameters">
                            <div class="block-title">
                                <h5>Характеристики</h5>
                            </div>
                            <table class="parameters">
                                <tr>
                                    <td class="p-title">Название</td>
                                    <td class="p-text">{{ $wallpaper->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Тип</td>
                                    <td class="p-text">{{ $wallpaper->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Текстура</td>
                                    <td class="p-text">{{ $wallpaper->texture }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $wallpaper->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Основа</td>
                                    <td class="p-text">{{ $wallpaper->basis }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">Цвет</td>
                                    <td class="p-text">{{ $wallpaper->color }}</td>
                                </tr>
                                <tr>
                                    <td class="p-title">3D</td>
                                    <td class="p-text">
                                        @if ($wallpaper->is_3d == 1)
                                            Да
                                        @else
                                            Нет
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-title">Влажные</td>
                                    <td class="p-text">
                                        @if ($wallpaper->is_wet == 1)
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
