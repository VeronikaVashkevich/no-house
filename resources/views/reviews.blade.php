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
                    @foreach($reviews as $review)
                        <div class="review">
                            <div class="review-title">{{ $review->username }}</div>
                            <div class="review-text">{{ $review->text }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="add-review">
                    <a class="btn btn-link js-add-review">Добавить отзыв</a>
                    <div class="add-review-form display-none">
                        <form action="{{ route('reviews.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="form-label">

                                    <input id="username" type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           name="username" placeholder="Ваше имя"
                                           required autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="text" class="form-label">
                                    <textarea name="text" id="text" class="form-control"
                                              placeholder="Текст отзыка"></textarea>
                                    @error('text')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Сохранить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function () {
            $('.js-add-review').click(function () {
                $('.add-review-form').removeClass('display-none')
            })
        })
    </script>
@endsection

@section('footer')
    @parent
@endsection
