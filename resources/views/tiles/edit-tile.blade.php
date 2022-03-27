@extends('layouts.app')

@section('title') Редактировать плитку @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title">
                <h1>Редактировать плитку</h1>
            </div>
            <div class="section-content">
                <form method="post" action="{{ route('tiles.update', $tile) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name" class="form-label">

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" placeholder="Название" value="{{ $tile->name }}"
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
                                   name="type" required value="{{ $tile->type }}">

                            @error('type')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="form" class="form-label">

                            <input id="form" type="text" class="form-control @error('form') is-invalid @enderror"
                                   name="form" placeholder="Форма" value="{{ $tile->form }}"
                                   required >

                            @error('form')
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
                                   required value="{{ $tile->color }}">

                            @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="price" class="form-label">

                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                   name="price" placeholder="Цена" value="{{ $tile->price }}"
                                   required min="0.01" step="0.01">

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="wearClass" class="form-label">

                            <input id="wearClass" type="text" class="form-control @error('wearClass') is-invalid @enderror"
                                   name="wearClass" placeholder="Класс износостойкости"
                                   required value="{{ $tile->wear_class }}">

                            @error('wearClass')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="purpose" class="form-label">

                            <input id="purpose" type="text" class="form-control @error('purpose') is-invalid @enderror"
                                   name="purpose" placeholder="Применение" value="{{ $tile->purpose }}"
                                   required>

                            @error('purpose')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="frostResistance" class="form-label">
                            <input type="checkbox" name="frostResistance" id="frostResistance"
                            @if($tile->frost_resistance) checked @endif> Морозостойкость

                            @error('frostResistance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">

                            <input id="image" type="file" class="form-control @error('basis') is-invalid @enderror"
                                   name="image" placeholder="Изображение"
                                   value="{{ $tile->image }}">

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
                                      placeholder="Описание">value="{{ $tile->description }}"</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="height" class="form-label">

                            <input id="height" type="number" class="form-control @error('height') is-invalid @enderror"
                                   name="height" placeholder="Высота, мм" min="1" value="{{ $tile->height }}"
                                   required>

                            @error('height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="width" class="form-label">

                            <input id="width" type="number" class="form-control @error('width') is-invalid @enderror"
                                   name="width" placeholder="Ширина, мм" min="1" value="{{ $tile->width }}"
                                   required>

                            @error('width')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="depth" class="form-label">

                            <input id="depth" type="number" class="form-control @error('depth') is-invalid @enderror"
                                   name="depth" placeholder="Толщина, мм" min="1" value="{{ $tile->depth }}"
                                   required>

                            @error('depth')
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

