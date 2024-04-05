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
                            <div class="row g-2">
                                <label for="nama">Nama Objek Wisata</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Objek Wisata" required>
                            </div>
                            <div class="row g-2">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan Lokasi Objek Wisata" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Titik Kordinat Depan">
                                </div>
                                <div class="col">
                                <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Titik Kordinat Belakang">
                                </div>
                            </div>
                            <div class="form-row g-1">
                                <label for="jamOp">Jam Operasional</label>
                                <input type="text" class="form-control" name="jamOp" id="jamOp" placeholder="Masukkan Jam Operasional Objek Wisata" required>
                            </div>
                            
                            <div class="form-row g-1">
                                <label for="jenis">Jenis Wisata</label>
                                <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Masukkan Jenis Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                <label for="Ntiket">Nama Tiket</label>
                                <input type="text" class="form-control" name="Ntiket" id="Ntiket" placeholder="Masukkan Nama Tiket Objek Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                <label for="Htiket">Harga Tiket</label>
                                <input type="text" class="form-control" name="Htiket" id="Htiket" placeholder="Masukkan Harga Tiket Objek Wisata" required>
                            </div>
                            <div class="form-row g-1">
                                
                                <label for="foto" class="form-label">Foto Objek Wisata</label>
                                <input class="form-control" type="file" name="foto" id="foto" placeholder="Masukkan URL Foto Objek Wisata" required>
                                
                            </div>
                            <div class="row justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
