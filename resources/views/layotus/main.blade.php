<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>@yield('title', 'Магазин продуктов')</title>
</head>
<body>

<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link
            @if(request()->route()->getName() === 'home')
                active
            @endif
            " aria-current="page">Главная</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.create') }}" class="nav-link
            @if(request()->route()->getName() === 'categories.create')
                active
            @endif
            ">Добавить категорию</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.create') }}" class="nav-link
            @if(request()->route()->getName() === 'products.create')
                active
            @endif
            ">Добавить продукт</a>
        </li>
    </ul>
</header>

<main>
<div class="content">
    <div class="container">
        @yield('content')
    </div>
</div>
</main>

<footer></footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
