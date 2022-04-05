@extends('layouts.app')

@section('title') Добавить лак @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title">
                <h1>Добавить лак</h1>
            </div>
            <div class="section-content">
                <form method="POST" action="{{ route('varnishes.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" placeholder="Название"
                                   required autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="appointment" class="form-label">

                            <input id="appointment" type="text" class="form-control @error('appointment') is-invalid @enderror"
                                   name="appointment" placeholder="Назначение"
                                   required >

                            @error('appointment')
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
                                   required >

                            @error('basis')
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
                                   required autofocus>

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
                                   name="price" placeholder="Цена"
                                   required min="0.01" step="0.01">

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="material" class="form-label">

                            <input id="material" type="text" class="form-control @error('material') is-invalid @enderror"
                                   name="material" placeholder="Вид окрашиваемого материала"
                                   required>

                            @error('material')
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
                                   required >

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
                                      placeholder="Описание"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="weight" class="form-label">

                            <input id="weight" type="number" class="form-control @error('weight') is-invalid @enderror"
                                   name="weight" placeholder="Вес, кг" min="0.01" step="0.01"
                                   required>

                            @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="time" class="form-label">

                            <input id="time" type="number" class="form-control @error('time') is-invalid @enderror"
                                   name="time" placeholder="Время высыхания, ч" min="1"
                                   required>

                            @error('time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Создать
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

