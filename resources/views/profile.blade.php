@extends('layouts.app')


@section('title','Profile')
@section('subtitle','Informasi pengguna')


@section('content')
<div class="card" style="display:flex;gap:20px;align-items:center">
<div style="width:120px;height:120px;border-radius:12px;background:linear-gradient(180deg,var(--primary),var(--primary-600));display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:24px">{{ strtoupper(substr($username ?? 'Tamu',0,1)) }}</div>
<div>
<h3 style="margin:0">{{ $username ?? 'Tamu' }}</h3>
<p style="color:var(--muted)">Logout jika ingin merubah profil.</p>
</div>
</div>
@endsection