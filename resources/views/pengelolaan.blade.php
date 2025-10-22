@extends('layouts.app')


@section('title','Pengelolaan')
@section('subtitle','Daftar wisata')


@section('content')
<div class="card">
<h3 style="margin-top:0">Daftar Wisata</h3>
<p style="color:var(--muted)"></p>


<table style="margin-top:14px">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Lokasi</th>
<th>Gambar</th>
<th>Harga</th>
</tr>
</thead>
<tbody>
@foreach($data as $item)
<tr>
<td>{{ $item['id'] }}</td>
<td>{{ $item['name'] }}</td>
<td>{{ $item['location'] }}</td>
<td><img src="/images/{{ $item['image'] }}" alt="{{ $item['name'] }}" style="width:120px;height:70px;object-fit:cover;border-radius:6px"></td>
<td>{{ $item['price'] }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection