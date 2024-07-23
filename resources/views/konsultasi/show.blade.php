@extends('layouts.app')

@section('cardTitle', 'Data Konsultasi Pasien')

@section('content')
    <div class="container mt-5">
        <h2>Data Konsultasi Pasien</h2>
        <p>Nama: {{ $pasien->nama_pasien }}</p>
        <p>Alamat: {{ $pasien->alamat }}</p>
        <p>No. HP: {{ $pasien->no_hp }}</p>
        <p>Jenis Kelamin: {{ $pasien->gender }}</p>
        <!-- Tambahkan detail konsultasi pasien di sini -->
    </div>
    <div class="container mt-5">
        <h2>Hasil Konsultasi</h2>
        
    </div>
@endsection
