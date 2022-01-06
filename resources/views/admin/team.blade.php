@extends('layouts.admin')

@section('content')
<span class="title-page">Team</span>

<form action="/team" method="post" class="mb-3 mt-3" enctype="multipart/form-data">
    @csrf
    <input type="text" class="search mb-3" placeholder="Nama" name="name">
    <input type="text" class="search mb-3" placeholder="Nim" name="nim">
    <input type="text" class="search mb-3" placeholder="Peran" name="role">
    <input type="file" name="image">
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>

<table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Role</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($team as $t)
    <tr>
      <th scope="row">{{ $t->name }}</th>
      <td>{{ $t->nim }}</td>
      <td>{{ $t->role }}</td>
      <td> <img src="{{ asset('team-image/'.$t->image) }}" width="100" height="100"></td>
      <td>

          <button class="btn-success btn-sm edit-button">
            <i class="fas fa-edit"></i>
          </button>&nbsp

          <button class="btn-danger btn-sm delete-button">
            <i class="fas fa-trash-alt"></i>
          </button>

            <div class="edit">
                <form action="/team/update/{{ $t->id }}" method="post" class="mb-3 mt-3" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="search mb-3" value="{{$t->name}}" name="name">
                    <input type="text" class="search mb-3" value="{{$t->nim}}" name="nim">
                    <input type="text" class="search mb-3" value="{{$t->role}}" name="role">
                    <label for="imgTeam">Kosongi gambar jika tidak ada perubahan</label>
                    <input type="file" name="image" id="imgTeam">
                    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
                    <button type="button" class="btn-sm btn-primary cancel">Batal</button>
                </form>
            </div>

          <div class="trash">
            <form action="/team/delete/{{ $t->id }}" method="post">
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
    <td colspan="4" class="text-center">Data Kosong</td>
    @endforelse
  </tbody>
</table>

@endsection