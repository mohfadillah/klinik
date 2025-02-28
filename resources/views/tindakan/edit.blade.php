@extends('layouts.app')
@section('title', 'Change Obat')
@section('titlecate', 'Tindakan')
@section('content')
    <form action="{{ route('tindakan.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Change Tindakan</label>
            <input value="{{ $edit->nama_tindakan }}" type="text" class="form-control" name="nama_tindakan">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Deskripsi</label>
            <input value="{{ $edit->deskripsi }}" type="text" class="form-control" name="deskripsi">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Instruksi</label>
            <input value="{{ $edit->instruksi }}" type="text" class="form-control" name="instruksi">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Tarif</label>
            <input value="{{ $edit->tarif }}" type="number" class="form-control" name="tarif">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
