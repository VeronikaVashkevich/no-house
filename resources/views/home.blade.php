@extends('layouts.app')

@section('title') Моя страница no-house @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

        <section id="catalog" class="section">
            <div class="section-title section-title-center">
                <h1>Мои заказы</h1>
            </div>
            <div class="section-content">
            </div>
        </section>
    </div>
@endsection

@section('footer')
    @parent
@endsection
