@extends('layotus.main')

@section('title') Создание категории @endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card w-25">
            <div class="card-header text-uppercase">
                Создание категории
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Название категрии</label>
                        <input type="text" class="form-control" id="name" placeholder="Красовочки и туфельки">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary text-uppercase">
                            СОЗДАТЬ КАТЕГОРИЮ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
