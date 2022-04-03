@extends('layouts.app')

@section('title') Панель управления линоулемом @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление линоулемом</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('linoleum.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($linoleum as $lin)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $lin->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $lin->price }} BYN</div>
                                <div class="good-name">
                                    {{ $lin->name }}
                                </div>
                                <a href="{{ route('linoleum.edit', $lin->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('linoleum.destroy', $lin->id) }}" method="post">
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
