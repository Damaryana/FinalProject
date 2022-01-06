@extends('layouts.admin')

@section('content')
<span class="title-page">Modul({{ $part->name }})</span>

<form action="/admin/part" method="post" class="mb-3 mt-3">
    @csrf
    <input type="hidden" value="{{$part->id}}" name="app_id">
    <input type="text" class="search d-inline w-50" placeholder="Tambah Modul" name="name">
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>

<table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Modul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($part->part as $p)
    <tr>
      <th scope="row">{{ $p->id }}  </th>
      <td><a href="/admin/sub-part/{{ $p->id }}">{{ $p->name }}</a></td>
      <td>
        <button class="btn-success btn-sm">
          <i class="fas fa-edit"></i>
        </button>&nbsp

        <button class="btn-danger btn-sm delete-button">
          <i class="fas fa-trash-alt"></i>
        </button>

        <div class="trash">
          <form action="/delete/sub-part/{{ $p->id }}" method="post">
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