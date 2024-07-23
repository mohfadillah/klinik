@extends('layouts.app')
@section('title', 'Change Obat')
@section('titlecate', 'Obat')
@section('content')
    <form action="{{ route('obat.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Change Obat</label>
            <input value="{{ $edit->nama_obat }}" type="text" class="form-control" name="nama_obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Kode Obat</label>
            <input value="{{ $edit->kode_obat }}" type="text" class="form-control" name="kode_obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Change Harga Obat</label>
            <input value="{{ $edit->harga }}" type="number" class="form-control" name="harga">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
