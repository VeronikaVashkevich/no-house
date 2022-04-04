@extends('layouts.app')

@section('title') Панель управления паркетом @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление паркетом</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('parquet.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($parquet as $par)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $par->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $par->price }} BYN</div>
                                <div class="good-name">
                                    {{ $par->name }}
                                </div>
                                <a href="{{ route('parquet.edit', $par->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('parquet.destroy', $par->id) }}" method="post">
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
