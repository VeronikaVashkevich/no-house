@extends('layouts.app')

@section('title') Панель управления красками, эмалями @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление красками, эмалями</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('paint.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($paints as $paint)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $paint->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $paint->price }} BYN</div>
                                <div class="good-name">
                                    {{ $paint->name }}
                                </div>
                                <a href="{{ route('paint.edit', $paint->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('paint.destroy', $paint->id) }}" method="post">
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
