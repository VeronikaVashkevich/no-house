@extends('layouts.app')

@section('title') Панель управления ламинатом @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление ламинатом</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('laminate.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($laminate as $lam)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $lam->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $lam->price }} BYN</div>
                                <div class="good-name">
                                    {{ $lam->name }}
                                </div>
                                <a href="{{ route('laminate.edit', $lam->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('laminate.destroy', $lam->id) }}" method="post">
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
