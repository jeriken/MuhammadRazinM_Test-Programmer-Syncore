@extends('master')

@section('konten')
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Selamat Datang</h5>
    <p class="card-text">Email: {{ Auth::user()->email }}</p>
    <p class="card-text">Nama: {{ Auth::user()->name }}</p>
    <p class="card-text">Tanggal Lahir: {{ Auth::user()->tanggal_lahir }}</p>
    <p class="card-text">Deskripsi: {{ Auth::user()->deskripsi }}</p>
    @if(Auth::user()->biodata != null)
    <p class="card-text">Pendidikan: {{ Auth::user()->biodata->pendidikan }}</p>
    <p class="card-text">Pelatihan: {{ Auth::user()->biodata->pelatihan }}</p>
    <p class="card-text">Pengalaman: {{ Auth::user()->biodata->pengalaman }}</p>
    @endif
    <a href="edit" class="btn btn-primary">Edit</a>
  </div>
</div>
@endsection