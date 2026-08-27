@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<h3 class="fw-bold mb-4">Daftar Anggota Kelompok</h3>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Ahmad Rizky</h5>
                <p class="card-text text-muted mb-1">NIM: 220101001</p>
                <span class="badge bg-primary">Project Manager</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Siti Aminah</h5>
                <p class="card-text text-muted mb-1">NIM: 220101002</p>
                <span class="badge bg-secondary">Frontend Developer</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Budi Santoso</h5>
                <p class="card-text text-muted mb-1">NIM: 220101003</p>
                <span class="badge bg-dark">Backend Developer</span>
            </div>
        </div>
    </div>
</div>
@endsection