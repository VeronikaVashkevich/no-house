@extends('layouts.app')

@section('title') Панель управления ПВХ панелями @endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title section-title-center">
                <h3>Управление ПВХ панелями</h3>
            </div>
            <div class="section-content">
                <div class="add-block">
                    <a href="{{ route('pvcPanels.create') }}" class="btn btn-add">Добавить</a>
                </div>
                <div class="goods-group">
                    <div class="goods">
                        @foreach($pvcPanels as $pvcPanel)
                            <div class="good">
                                <div class="good-image">
                                    <img src="{{ $pvcPanel->image }}" alt="good picture">
                                </div>
                                <div class="good-price">{{ $pvcPanel->price }} BYN</div>
                                <div class="good-name">
                                    {{ $pvcPanel->name }}
                                </div>
                                <a href="{{ route('pvcPanels.edit', $pvcPanel->id) }}">
                                    <input type="button" value="Редактировать" class="btn btn-primary">
                                </a>
                                <form action="{{ route('pvcPanels.destroy', $pvcPanel->id) }}" method="post">
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
