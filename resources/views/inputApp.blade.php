@extends('layouts.admin')

@section('content')
<span class="title-page">Aplikasi</span>

<form action="/admin" method="post" class="mb-3 mt-3">
    @csrf
    <input type="text" class="search d-inline w-50" placeholder="Tambah Aplikasi" name="name">
    <input type="text" class="search w-25" placeholder="versi" name="version">
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>

<form action="" class="mb-3 mt-3">
    <input type="text" class="search w-75" placeholder="Cari">
    <button type="submit" class="add-button"><i class="fas fa-search"></i></button>
</form>

<table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Aplikasi</th>
      <th scope="col">Versi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($app as $a)
    <tr>
      <th scope="row">{{ $a->id }}</th>
      <td><a href="/admin/part/{{ $a->id }}">{{ $a->name }}</a></td>
      <td>{{ $a->version }}</td>
      <td>

          <button class="btn-success btn-sm">
            <i class="fas fa-edit"></i>
          </button>&nbsp

          <button class="btn-danger btn-sm delete-button">
            <i class="fas fa-trash-alt"></i>
          </button>

          <div class="trash">
            <form action="/delete/app/{{ $a->id }}" method="post">
              @method('delete')
              @csrf
              <label for="">Apakah anda yakin akan menghapus ini?</label>
              <button type="submit" class="btn-sm btn-danger">Hapus</button>
              <button type="button" class="btn-sm btn-primary cancel">Batal</button>
            </form>
          </div>

      </td>
    </tr>
    @empty
    <td colspan="3" class="text-center">Data Kosong</td>
    @endforelse
  </tbody>
</table>

@endsection