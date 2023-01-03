<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Binus Movie</title>

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
                                <li class="text-white">
                                <li class="active"><a href="{{ url('editThumbnail',$data->id) }}">Edit</a></li>
                                </li>
                                <li><a href="{{ url('/') }}">Home</a></li>
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

    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('alert')
                    <form action="{{ url('updateThumbnail',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label" style="color: white; font-weight: 800;">Nama
                                Produk
                            </label>
                            <input type=" text" class="form-control form-control-sm" name="nama_produk" id="nama_produk"
                                aria-describedby="helpId" placeholder="Nama Produk" value="{{ $data->nama_produk }}">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label" style="color: white; font-weight: 800;">Harga
                            </label>
                            <input type="number" class="form-control form-control-sm" name="harga" id="harga"
                                aria-describedby="helpId" placeholder="Harga" value="{{ $data->harga }}">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label" style="color: white; font-weight: 800;">Jumlah
                            </label>
                            <input type="number" class="form-control form-control-sm" name="jumlah" id="jumlah"
                                aria-describedby="helpId" placeholder="Jumlah" value="{{ $data->jumlah }}">
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label"
                                style="color: white; font-weight: 800;">Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="5">{{ $data->keterangan }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" style="color: white; font-weight: 800;">Thumbnail</label>
                            @if('thumbnail')
                            <img style="max-width:100px;max-height:100px"
                                src="{{ asset('thumbnail') . '/' . $data->thumbnail }}">
                            @endif
                            <input type="file" name="thumbnail">
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <a href="{{ url('/') }}" class="btn btn-secondary">
                                    BACK
                                </a>
                            </div>
                            <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
                        </div>
                    </form>
                </div>
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
