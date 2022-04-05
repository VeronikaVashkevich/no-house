@extends('layouts.app')

@section('title') Панель управления лаками @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление лаками</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('varnishes.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($varnishes as $varnish)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $varnish->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $varnish->price }} BYN</div>
                                <div class="good-name">
                                    {{ $varnish->name }}
                                </div>
                                <a href="{{ route('varnishes.edit', $varnish->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('varnishes.destroy', $varnish->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Удалить" class="btn btn-danger">
                                </form>
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
