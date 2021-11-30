@extends('layouts.admin')

@section('content')
<span class="title-page">Item({{ $item->name }})</span>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form action="/admin/item" method="post" class="mb-3 mt-3">
    @csrf
    <input type="hidden" value="{{$item->id}}" name="sub_part_id">
    <div class="input-textarea w-75">
        Jika ingin membuat sebuah "Teks Prosedur", awali dengan simbol <i>petik tiga</i>(<strong>'''</strong>) 
        dan akhiri dengan <i>petik tiga</i>(<strong>'''</strong>). Untuk setiap langkahnya akhiri dengan tanda <i>petik koma</i>(<strong>;</strong>) 
        <textarea name="section" class="text-area w-100" rows="10"></textarea>
    </div>
    <button type="submit" class="add-button d-inline"><i class="fas fa-plus"></i></button>
</form>

<table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Item</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($item->item as $i)
    <tr>
      <th scope="row">{{ $i->id }}  </th>
      <td>{{ substr($i->section, 0, 5) }}</td>
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