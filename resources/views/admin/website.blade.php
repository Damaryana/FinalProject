@extends('layouts.admin')

@section('content')
<form action="/upload-logo" method="post" class="mb-3 mt-3" enctype="multipart/form-data">
    @csrf
    <label for="logo">Logo</label>
    <input type="file" name="logo" id="logo">
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>

<form action="/upload-about" method="post" class="mb-3 mt-3" enctype="multipart/form-data">
    @csrf
    <textarea name="about" cols="100" rows="10">Tentang Buku Manual</textarea>
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>
@endsection