@extends('layouts.app')
@section('cardTitle', 'Tambah Level')
@section('content')
    <form action="{{ route('level.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name Level</label>
            <input type="text" class="form-control" name="nama_level" placeholder="Input Name Level">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
