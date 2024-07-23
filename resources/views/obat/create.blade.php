@extends('layouts.app')
@section('cardTitle', 'Tambah Obat')
@section('content')
    <form action="{{ route('obat.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name Obat</label>
            <input type="text" class="form-control" name="nama_obat" placeholder="Input Nama Obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Kode Obat</label>
            <input type="text" class="form-control" name="kode_obat" placeholder="Input Kode Obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Harga Obat</label>
            <input type="number" class="form-control" name="harga" placeholder="Input Harga Obat">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
