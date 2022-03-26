@extends('layouts.app')

@section('title') Панель управления плиткой @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление плиткой</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('tiles.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($tiles as $tile)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $tile->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $tile->price }} BYN</div>
                                <div class="good-name">
                                    {{ $tile->name }}
                                </div>
                                <a href="{{ route('tiles.edit', $tile->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('tiles.destroy', $tile->id) }}" method="post">
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
