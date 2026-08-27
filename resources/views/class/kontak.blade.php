@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<h3 class="fw-bold mb-4">Hubungi Kami</h3>

<div class="row">
    <div class="col-md-6">
        <div class="card p-3 border shadow-sm">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="nama@email.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea class="form-control" rows="3" placeholder="Tuliskan pesan"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Kirim Pesan</button>
        </div>
    </div>
</div>
@endsection