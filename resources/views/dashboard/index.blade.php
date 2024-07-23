@extends('layouts.app')
@section('content')
<h1 align="center">WELCOME TO KlINIK</h1>
<div class="table-responsive text-nowrap">
        <div align="right" class="mb-3">
            <a href="{{url('periksa-pasien')}}" type="button" target="_blank" class="btn btn-primary">Registrasi Pasien</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>No. Hp</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPasien as $key => $dp )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$dp->nama_pasien}}</td>
                    <td>{{$dp->alamat}}</td>
                    <td>{{$dp->no_hp}}</td>
                    <td>{{$dp->gender}}</td>
                    <td>
                        <a href="{{url('konsultasi')}}" target="_blank">Data Konsultasi Pasien</a>
                        
                    </td>
                </tr>
                @endforeach
                <!-- You can add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
