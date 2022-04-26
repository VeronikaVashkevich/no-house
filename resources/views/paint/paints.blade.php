@extends('layouts.app')

@section('title') Краски (эмали) - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Краски (эмали)</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="goods">
                        @foreach($paints as $paint)
                            @if($paint->type == $type)
                                <div class="good">
                                    <div class="good-image">
                                        <img src="{{ $paint->image }}" alt="good picture">
                                    </div>
                                    <div class="good-price">{{ $paint->price }} BYN</div>
                                    <div class="good-name">
                                        <a href="{{ route('paint.show', ['paint' => $paint]) }}">{{ $paint->name }}</a>
                                    </div>
                                    <a href="{{ route('addToCart', ['className' => 'paint', 'id' => $paint->id]) }}">
                                        <input type="button" value="В корзину" class="btn btn-primary">
                                    </a>
                                </div>
                            @endif
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
