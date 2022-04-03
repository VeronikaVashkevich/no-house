@extends('layouts.app')

@section('title') Добавить ламинат @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <section id="recommendations" class="section">
            <div class="section-title">
                <h1>Добавить ламинат</h1>
            </div>
            <div class="section-content">
                <form method="POST" action="{{ route('laminate.store') }}" enctype="multipart/form-data">
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
                        <label for="abrasionResistanceClass" class="form-label">
                            <input id="abrasionResistanceClass" type="text" placeholder="Класс устойчивости к истиранию"
                                   class="form-control @error('abrasionResistanceClass') is-invalid @enderror"
                                   name="abrasionResistanceClass" required>

                            @error('abrasionResistanceClass')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="loadClass" class="form-label">

                            <input id="loadClass" type="text" class="form-control @error('loadClass') is-invalid @enderror"
                                   name="loadClass" placeholder="Класс нагрузки"
                                   required >

                            @error('loadClass')
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
                        <label for="lockClass" class="form-label">

                            <input id="lockClass" type="text" class="form-control @error('lockClass') is-invalid @enderror"
                                   name="lockClass" placeholder="Тип замка"
                                   required>

                            @error('lockClass')
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
                        <label for="vShape" class="form-label">
                            <input type="checkbox" name="vShape" id="vShape"> V-образная фаска

                            @error('vShape')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="corkLayer" class="form-label">
                            <input type="checkbox" name="corkLayer" id="corkLayer"> Слой пробки

                            @error('corkLayer')
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
                        <label for="height" class="form-label">

                            <input id="height" type="number" class="form-control @error('height') is-invalid @enderror"
                                   name="height" placeholder="Высота, мм" min="1"
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

