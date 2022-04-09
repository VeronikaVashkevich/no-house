@extends('layouts.app')

@section('title') Панель управления отзывами @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление отзывами</h3>
            </div>
            <div class="section-content">
                <div class="goods-group">
                    <div class="reviews">
                        @foreach($reviews as $review)
                            <div class="review">
                                <div class="review-username">
                                    {{ $review->username }}
                                </div>
                                <div class="review-text">
                                    {{ $review->text }}
                                </div>
                                <div class="review-controls">
                                    <form action="{{ route('reviews.update', $review) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="submit" value="Одобрить" class="btn btn-primary">
                                    </form>
                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Удалить" class="btn btn-danger">
                                    </form>
                                </div>
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
