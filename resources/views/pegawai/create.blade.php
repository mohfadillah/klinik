@extends('layouts.app')
@section('cardTitle', 'Tambah Pegawai')
@section('content')
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" placeholder="Input Name Pegawai">
        </div>
        <div class="form-group mb-3">
            <label for="">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" placeholder="Input Jabatan">
        </div>
        <div class="form-group mb-3">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir">
        </div>
        <div class="form-group mb-3">
            <label for="">No. HP</label>
            <input type="number" class="form-control" name="no_hp" placeholder="Input No. HP">
        </div>
        <div class="form-group mb-3">
            <label for="">Jenis Kelamin</label> <br>
            <input name="gender" type="radio" value="Laki-laki"> Laki-laki <br>
            <input name="gender" type="radio" value="Perempuan"> Perempuan
        </div>
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Input Email">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
