@extends('layouts.app')

@section('title') Панель управления обоями @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление обоями</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('wallpapers.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($wallpapers as $wallpaper)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $wallpaper->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $wallpaper->price }} BYN</div>
                                <div class="good-name">
                                    {{ $wallpaper->name }}
                                </div>
                                <a href="{{ route('wallpapers.edit', $wallpaper->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('wallpapers.destroy', $wallpaper->id) }}" method="post">
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
