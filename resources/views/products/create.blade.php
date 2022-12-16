@extends('layotus.main')

@section('title') Создание продукта @endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header text-uppercase">
                Создание продукта
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Название</label>
                        <input type="email" class="form-control" id="name" placeholder="Название продукта">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание </label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Категории</label>
                        <select class="form-select" id="category_id">
                            <option selected>Замени</option>
                            <option value="1">Нас</option>
                            <option value="2">На</option>
                            <option value="3">Свои</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary text-uppercase">
                            СОЗДАТЬ ЕДЕНИЦУ ПРОДУКТА
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
