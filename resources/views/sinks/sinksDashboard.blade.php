@extends('layouts.app')

@section('title') Панель управления мойками @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление мойками</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('sinks.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($sinks as $sink)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $sink->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $sink->price }} BYN</div>
                                <div class="good-name">
                                    {{ $sink->name }}
                                </div>
                                <a href="{{ route('sinks.edit', $sink->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('sinks.destroy', $sink->id) }}" method="post">
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
