@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Informasi Umum</div>
                    <div class="card-body">
                        <form action="{{ route('kelola-objek-wisata.store') }}" method="POST">
                            @csrf
                            <div class="form-row g-1">
                                <label for="nama">Nama Objek Wisata</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Objek Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" placeholder="Masukkan Lokasi Objek Wisata" required>
                            </div>
                            <div class="row g-1">
                            <label for="lokasi">Titik Kordinat</label>
                                <div class="col">
                                    <input type="text" class="form-control" name="kordinat" placeholder="Longitude">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="kordinat" placeholder="Latitude">
                                </div>
                            </div>
                            <div class="form-row g-1">
                                <label for="jamOp">Jam Operasional</label>
                                <input type="text" class="form-control" name="jamOp" placeholder="Masukkan Jam Operasional Objek Wisata" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Informasi Detail</div>
                    <div class="card-body">
                        <form action="{{ route('kelola-objek-wisata.store') }}" method="POST">
                            @csrf
                            <div class="form-row g-1">
                                <label for="jenis">Jenis Wisata</label>
                                <input type="text" class="form-control" name="jenis" placeholder="Masukkan Jenis Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                <label for="Ntiket">Nama Tiket</label>
                                <input type="text" class="form-control" name="Ntiket" placeholder="Masukkan Nama Tiket Objek Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                <label for="Htiket">Harga Tiket</label>
                                <input type="text" class="form-control" name="Htiket" placeholder="Masukkan Harga Tiket Objek Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                <label for="foto">Foto Objek Wisata</label>
                                <input type="text" class="form-control" name="foto" placeholder="Masukkan URL Foto Objek Wisata" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                </div>
            </div>
        </div>
        
    </div>
@endsection
