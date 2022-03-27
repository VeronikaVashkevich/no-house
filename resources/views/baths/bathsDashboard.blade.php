@extends('layouts.app')

@section('title') Панель управления ваннами @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление ваннами</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('baths.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($baths as $bath)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $bath->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $bath->price }} BYN</div>
                                <div class="good-name">
                                    {{ $bath->name }}
                                </div>
                                <a href="{{ route('baths.edit', $bath->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('baths.destroy', $bath->id) }}" method="post">
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
