@extends('layouts.app')

@section('title') Паркет - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Паркет</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @foreach($parquet as $par)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $par->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $par->price }} BYN</div>
                                <div class="good-name">
                                    <a href="{{ route('parquet.show', $par) }}">{{ $par->name }}</a>
                                </div>
                                <a href="#">
                                    <input type="button" value="В корзину" class="btn btn-primary">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
