@extends('layouts.app')

@section('title') Добавить паркет @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title">
                <h1>Добавить паркет</h1>
            </div>
            <div class="section-content">
                <form method="POST" action="{{ route('parquet.store') }}" enctype="multipart/form-data">
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
                        <label for="type" class="form-label">
                            <input id="type" type="text" placeholder="Тип"
                                   class="form-control @error('type') is-invalid @enderror"
                                   name="type" required>

                            @error('type')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="tree" class="form-label">

                            <input id="tree" type="text" class="form-control @error('tree') is-invalid @enderror"
                                   name="tree" placeholder="Порода дерева"
                                   required >

                            @error('tree')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="covering" class="form-label">

                            <input id="covering" type="text" class="form-control @error('covering') is-invalid @enderror"
                                   name="covering" placeholder="Покрытие"
                                   required >

                            @error('covering')
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
                        <label for="thickness" class="form-label">

                            <input id="thickness" type="number" class="form-control @error('thickness') is-invalid @enderror"
                                   name="thickness" placeholder="Толщина, мм" min="1"
                                   required>

                            @error('thickness')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="width" class="form-label">

                            <input id="width" type="number" class="form-control @error('width') is-invalid @enderror"
                                   name="width" placeholder="Ширина, мм" min="1"
                                   required>

                            @error('width')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="length" class="form-label">

                            <input id="length" type="number" class="form-control @error('length') is-invalid @enderror"
                                   name="length" placeholder="Длина, мм" min="1"
                                   required>

                            @error('length')
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

