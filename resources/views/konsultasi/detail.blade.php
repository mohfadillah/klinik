@extends('layouts.app')

@section('cardTitle', 'Detail Konsultasi Pasien')

@section('content')
    <div class="container mt-5">
        <h2>Detail Konsultasi Pasien</h2>
        <p>Nama: {{ $pasien->nama_pasien }}</p>
        <p>Alamat: {{ $pasien->alamat }}</p>
        <p>No. HP: {{ $pasien->no_hp }}</p>
        <p>Jenis Kelamin: {{ $pasien->gender }}</p>
        
    </div>
@endsection
