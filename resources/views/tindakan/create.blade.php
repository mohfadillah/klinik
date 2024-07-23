@extends('layouts.app')
@section('cardTitle', 'Tambah Obat')
@section('content')
    <form action="{{ route('tindakan.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name Tindakan</label>
            <input type="text" class="form-control" name="nama_tindakan" placeholder="Input Tindakan">
        </div>
        <div class="form-group mb-3">
            <label for="">Deskripsi</label>
            <textarea type="text" class="form-control" name="deskripsi" placeholder="Input Deskripsi "></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="">Instruksi</label>
            <textarea type="text" class="form-control" name="instruksi" placeholder="Input Instruksi "></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="">Tarif </label>
            <input type="number" class="form-control" name="tarif" placeholder="Input Tarif">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
