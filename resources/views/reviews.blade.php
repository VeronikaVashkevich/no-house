@extends('layouts.app')

@section('title') Отзывы - no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

        <section id="catalog" class="section">
            <div class="section-title section-title-center">
                <h1>Отзывы</h1>
            </div>
            <div class="section-content">
                <div class="reviews">
                    <div class="review">
                        <div class="review-title">Ivan6234</div>
                        <div class="review-text">
                            Замечательный сайт, все подробно и понятно написано, ставлю ему 10 из
                            10. Обязательно буду заказывать еще на нем другие необходимые штуки для моего нового дома на
                            берегу Тихого океана. Peace!
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-title">LarisaKroshka</div>
                        <div class="review-text">
                            Все супер, так как заказывала в первый раз, получила неплохую скидку.
                        </div>
                    </div>
                </div>
                <div class="add-review">
                    <a href="#" class="btn btn-link">Добавить отзыв</a>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
