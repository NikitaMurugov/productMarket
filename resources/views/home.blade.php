@extends('layotus.main')

@section('content')
    <div class="row">
        @for($i = 0;$i < 12;$i++)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-header d-flex">
                        Название
                        <span class="badge bg-secondary me-0 m-auto text-uppercase" style="font-size: 0.5em">
                            категория
                        </span>
                    </div>
                    <div class="card-body">
                        <span>
                            Описание поста
                            Описание поста
                            Описание поста
                            Описание поста
                        </span>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
