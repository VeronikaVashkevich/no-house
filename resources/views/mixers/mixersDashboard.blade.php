@extends('layouts.app')

@section('title') Панель управления смесителями @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление смесителями</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('mixers.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($mixers as $mixer)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $mixer->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $mixer->price }} BYN</div>
                                <div class="good-name">
                                    {{ $mixer->name }}
                                </div>
                                <a href="{{ route('mixers.edit', $mixer->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('mixers.destroy', $mixer->id) }}" method="post">
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
