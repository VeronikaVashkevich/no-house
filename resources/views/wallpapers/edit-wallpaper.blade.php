@extends('layouts.app')

@section('title') Редактировать обои @endsection

@section('header')
@parent
@endsection

@section('content')
<div class="container">
    <section id="recommendations" class="section">
        <div class="section-title">
            <h1>Редактировать обои</h1>
        </div>
        <div class="section-content">
            <form method="POST" action="{{ route('wallpapers.update', $wallpaper) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name" class="form-label">

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" placeholder="Название" value="{{ $wallpaper->name }}"
                               required autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="type" class="form-label">
                        <input id="type" type="text" placeholder="Тип"
                               class="form-control @error('type') is-invalid @enderror"
                               name="type" required value="{{ $wallpaper->type }}">

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="texture" class="form-label">

                        <input id="texture" type="text" class="form-control @error('texture') is-invalid @enderror"
                               name="texture" placeholder="Текстура"
                               required value="{{ $wallpaper->texture }}">

                        @error('texture')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="color" class="form-label">

                        <input id="color" type="text" class="form-control @error('color') is-invalid @enderror"
                               name="color" placeholder="Цвет"
                               required value="{{ $wallpaper->color }}">

                        @error('color')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="price" class="form-label">

                        <input id="price" type="number" class="form-control @error('is_3d') is-invalid @enderror"
                               name="price" placeholder="Цена" value="{{ $wallpaper->price }}"
                               required min="0.01" step="0.01">

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="basis" class="form-label">

                        <input id="basis" type="text" class="form-control @error('basis') is-invalid @enderror"
                               name="basis" placeholder="Основа"
                               required value="{{ $wallpaper->basis }}">

                        @error('basis')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="is_3d" class="form-label">
                        <input type="checkbox" name="is_3d" id="is_3d"
                        @if($wallpaper->is_3d == 1) checked @endif> 3D
                        @error('is_3d')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">

                        <input id="image" type="file" class="form-control @error('basis') is-invalid @enderror"
                               name="image" placeholder="Изображение">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">
                            <textarea name="description" id="description" class="form-control"
                                      placeholder="Описание">value="{{ $wallpaper->description }}"</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Сохранить
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@section('footer')
@parent
@endsection

