@extends('layouts.app')

@section('cardTitle', 'Data Konsultasi Pasien')

@section('content')
    <div class="container mt-5">
        <h2>Data Konsultasi Pasien</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPasien as $key => $dp )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dp->nama_pasien }}</td>
                    <td>{{ $dp->alamat }}</td>
                    <td>{{ $dp->no_hp }}</td>
                    <td>{{ $dp->gender }}</td>
                    <td>
                        <a href="{{ route('konsultasi.show', $dp->id) }}" target="_blank">Data Konsultasi Pasien</a> ||
                        <a href="{{ route('konsultasi.detail', $dp->id) }}">Detail Konsultasi</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mt-5">
        <h2>Data Konsultasi</h2>
        <form action="" method="post">
            @csrf
        <div class="form-group mb-3">
            <label for="">Tindakan</label>
            <select id="" class="form-control" name="nama_tindakan">
            <option value="">Pilih Tindakan</option>
            @foreach ($tindakan as $tindakans)
                <option value="{{ $tindakans->id }}">{{ $tindakans->nama_tindakan }}</option>
            @endforeach
        </select>
        </div>
        </form>
    </div>
@endsection
<!--  -->
