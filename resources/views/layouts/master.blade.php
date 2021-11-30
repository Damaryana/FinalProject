<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>

    <!-- Local Css -->
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
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
    <nav class="side-navbar">
        <div class="navbar-button mb-3">
            <button class="navbar-open" data-list="navbar" onclick="expandDiv(this)"><i class="fas fa-stream"></i></button>
        </div>
        <div class="navbar-body" id="navbar">
            <div class="application">{{ $part->name }}</div>
            <ul class="list-items">
                @forelse($part->part as $sb => $p)
                <li>
                    <button class="button-toggle" data-list="item{{$p->id}}" onclick="expandDiv(this)"> 
                        {{ $p->name }}
                    </button>
                    <ul class="child-list-items" id="item{{$p->id}}">
                        @forelse($p->subPart as $s)
                        <li class="open-instruction" data-value="{{ $s->id }}">{{ $s->name }}</li>
                        @empty
                        @endforelse
                    </ul>
                </li>
                @empty
                @endforelse
            </ul> 
        </div>
    </nav>

    <main>

        <div class="navbar-top mb-3">
            <div class="navbar-top-left">
                <form action="">
                    <input type="text" class="w-100" placeholder="Cari Instruksi">
                </form>
            </div>
            <div  class="navbar-top-right">
                <button class="back-button"><a href="/"><i class="fas fa-arrow-left"></i></a></button>
            </div>
        </div>

        <div class="instruction">
            <ul class="list-instruction"></ul>
        </div>

    </main>

    <img src="{{ asset('web-images/buana.png') }}" class="watermark" width="100" height="100" alt="logo-buana" >

{{-- Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{-- Local --}}
<script src="{{ asset('js/master.js') }}"></script>
</body>
</html>