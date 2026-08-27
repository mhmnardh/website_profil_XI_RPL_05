@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
<h3 class="fw-bold mb-4">Daftar Anggota Kelompok</h3>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Muhaimin</h5>
                <p class="card-text text-muted mb-1">Absen: 19</p>
                <span class="badge bg-primary">Project Manager</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Bunga</h5>
                <p class="card-text text-muted mb-1">Absen: 7</p>
                <span class="badge bg-primary">Developer</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Elsa</h5>
                <p class="card-text text-muted mb-1">Absen: 9</p>
                <span class="badge bg-secondary">Developer</span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold">Evan</h5>
                <p class="card-text text-muted mb-1">Absen: 10 </p>
                <span class="badge bg-dark">Developer</span>
            </div>
        </div>
    </div>
</div>
@endsection