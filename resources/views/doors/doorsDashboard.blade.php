@extends('layouts.app')

@section('title') Панель управления дверьми @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление дверьми</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('doors.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($doors as $door)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $door->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $door->price }} BYN</div>
                                <div class="good-name">
                                    {{ $door->name }}
                                </div>
                                <a href="{{ route('doors.edit', $door->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('doors.destroy', $door->id) }}" method="post">
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
