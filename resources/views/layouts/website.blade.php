<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="manual-book">
    <meta name="googlebot" content="noindex">
    <title>Manual Book</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- Local --}}
    <link rel="stylesheet" href="{{ asset('css/website.css') }}">

</head>
<body>

<header>

    <img src="{{ asset('web-images/background.jpg') }}" class="header-background w-100" alt="background">

    <div class="header-body w-100">

        <div class="navbar-top">
            <img src="{{ asset('web-images/buana.png') }}" class="logo" alt="logo-buana" >
            <div class="top-navbar-body">
                <a href="h#" class="top-navbar-items">Website Kami</a>
                <a href="" class="top-navbar-items">Produk Kami</a>
            </div>
        </div>

        <form action="" class="search">
            <input type="text" placeholder="Cari...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>

    </div>

    <nav class="navbar">

        <div id="button-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div id="navbar-body">
            <button class="navbar-items" data-link="about-manual"> Tentang Buku Manual </button>
            <button class="navbar-items" data-link="team-manual"> Team </button>
            <button class="navbar-items" data-link="list-manual"> Daftar Buku Manual </button>
        </div>
    </nav>

</header>

<main></main>

<footer>
     <div class="text-center">Copyright @ 2021 All Rights Reserved, Powered by Kelompok Kami</div> 
</footer>

{{-- Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{-- Local --}}
<script src="{{ asset('js/website.js') }}"></script>
</body>
</html>