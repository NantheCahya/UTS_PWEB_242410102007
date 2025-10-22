@extends('layouts.app')

@section('title', 'Login')
@section('subtitle', 'Masuk untuk menjelajahi wisata di negerimu')

@section('content')
<form action="{{ route('doLogin') }}" method="POST">
  @csrf
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan username" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required>
  </div>
  <button class="btn-primary" type="submit">Login</button>
</form>
@endsection
