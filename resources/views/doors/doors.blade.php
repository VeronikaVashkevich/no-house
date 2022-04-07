@extends('layouts.app')

@section('title') Двери - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Двери</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @foreach($doors as $door)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $door->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $door->price }} BYN</div>
                                <div class="good-name">
                                    <a href="{{ route('doors.show', $door->id) }}">{{ $door->name }}</a>
                                </div>
                                <a href="{{ route('addToCart', ['className' => 'door', 'id' => $door->id]) }}">
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
