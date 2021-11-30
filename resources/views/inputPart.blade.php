@extends('layouts.admin')

@section('content')
<span class="title-page">Modul({{ $part->name }})</span>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

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
          <a href="" class="btn-success btn-sm">
              <i class="fas fa-edit"></i>
          </a>&nbsp
          <a href="" class="btn-danger btn-sm">
            <i class="fas fa-trash-alt"></i>
          </a>
      </td>
    </tr>
    @empty
    <td colspan="3" class="text-center">Data Kosong</td>
    @endforelse
  </tbody>
</table>

@endsection