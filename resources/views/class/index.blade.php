@extends('layouts.app')

@section('title', 'Profil Kelas')

@section('content')
<div class="p-5 bg-light rounded-3 border">
    <h1 class="display-6 fw-bold">Selamat Datang di Portal Kelas</h1>
    <p class="fs-5 text-muted">Ini adalah website landing page untuk menampilkan profil kelas, daftar anggota kelompok, informasi proyek yang sedang dikerjakan, serta dokumentasinya.</p>
    <a href="{{ route('class.kontak') }}" class="btn btn-primary">Lihat Informasi Proyek</a>
</div>
@endsection