<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pijar Camp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/plyr.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css') }}/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img') }}/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('upload') }}">Upload Produk</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Section Begin -->
    <section class="blog spad">
        <div class="container">
            @include('alert')
            <div class="row row-cols-4">
                @foreach ($data as $item)
                <div class="col">
                    <div class="blog__item small__item set-bg-cover set-bg"
                        data-setbg="{{ asset('thumbnail') . '/' . $item->thumbnail }}">
                        <div class="blog__item__text text-uppercase ">
                            <h4><a href="{{ url('show',$item->id) }}">{{ $item->nama_produk }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Main Section End -->


</body>

<!-- Js Plugins -->
<script src="{{ asset('js') }}/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js') }}/bootstrap.min.js"></script>
<script src="{{ asset('js') }}/player.js"></script>
<script src="{{ asset('js') }}/jquery.nice-select.min.js"></script>
<script src="{{ asset('js') }}/mixitup.min.js"></script>
<script src="{{ asset('js') }}/jquery.slicknav.js"></script>
<script src="{{ asset('js') }}/owl.carousel.min.js"></script>
<script src="{{ asset('js') }}/main.js"></script>

</html>
