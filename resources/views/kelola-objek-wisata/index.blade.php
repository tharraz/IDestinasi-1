@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Objek Wisatamu</h2>
        <h6>Lihat objek wiata yang sudah kamu upload</h6>
        <a href="{{ route('kelola-objek-wisata.create') }}" class="btn btn-success">Daftar Sekarang</a>
        
        <div class="row">
            <div class="col-md-4">
                <img src="/img/Derawan.png" class="img-fluid rounded mb-3" alt="...">
            </div>
            <div class="col-md-4">
                <img src="/img/lombok.png" class="img-fluid rounded mb-3" alt="...">
            </div>
            <div class="col-md-4">
                <img src="/img/ntt.png" class="img-fluid rounded mb-3" alt="...">
            </div>
        </div>
    </div>
@endsection
