@extends('layouts.admin')

@section('content')
<span class="title-page">Sub-Modul({{ $subPart->name }})</span>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form action="/admin/sub-part" method="post" class="mb-3 mt-3">
    @csrf
    <input type="hidden" value="{{$subPart->id}}" name="part_id">
    <input type="text" class="search d-inline w-50" placeholder="Tambah Sub-Modul" name="name">
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>

<table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Sub-Modul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($subPart->subPart as $sb)
    <tr>
      <th scope="row">{{ $sb->id }}  </th>
      <td><a href="/admin/item/{{ $sb->id }}">{{ $sb->name }}</a></td>
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