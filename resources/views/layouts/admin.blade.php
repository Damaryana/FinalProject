<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Local Css -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
<button class="navbar-open" data-list="side-navbar" onclick="expandDiv(this)"><i class="fas fa-stream"></i></button>
<div id="side-navbar">
    <div class="items-navbar">
        <button class="button-navbar"><a href="/admin">Aplikasi</a></button>
        <button class="button-navbar"><a href="">Administrator</a></button>
        <button class="button-navbar"><a href="">Keluar</a></button>
    </div>
</div>

<div class="main">
    @yield('content')
</div>

<img src="{{ asset('web-images/buana.png') }}" class="watermark" width="100" height="100" alt="logo-buana" >



{{-- Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- Local --}}
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>