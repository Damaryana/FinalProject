@extends('layouts.website')

@section('content')
<div class="page-title text-center mb-3">Daftar Buku Manual</div>
<ul>
    @forelse($app as $a)
    <li><a href="/manual/{{ $a->id }}">{{ $a->name }}</a></li>
    @empty
    Data Kosong
    @endforelse
</ul>
@endsection