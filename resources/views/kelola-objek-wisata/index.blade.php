@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Aktivitas Mingguan</h2>
        <a href="{{ route('aktifitasmingguan.create') }}" class="btn btn-success">Tambah Kegiatan</a>
        
        
    </div>
@endsection