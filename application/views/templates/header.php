<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>technomedic.id</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body style="background-color: #F9FBFF;">

    <style>
        .poppins-regular-nav {
            font-family: "Poppins", sans-serif;
            margin: 0 8px;
            font-size: 14px;
            font-weight: 500;
            font-style: normal;
            color: #929396;
        }

        .nav li.active a {
            color: #000;
            /* Atur warna teks untuk tab yang aktif */
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-default navbar-expand-lg py-3 border-up-0 border-bottom border-gray fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.svg" alt="logo" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <img draggable="false" src="assets/img/menu.svg">
            </button>
            <div class="collapse navbar-collapse nav navbar-nav text-center navbar-scrollable"
                id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="">
                        <a class="nav-link nav poppins-regular-nav active" aria-current="page" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav poppins-regular-nav" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav poppins-regular-nav" href="#implementasi">Implementasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav poppins-regular-nav" href="#klien">Klien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav poppins-regular-nav" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            $('.nav li').click(function () {
                $('.nav li').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
