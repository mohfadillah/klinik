@extends('layouts.app')
@section('title', 'Change Level')
@section('titlecate', 'Level')
@section('content')
    <form action="{{ route('pegawai.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Change Jabatan</label>
            <input value="{{ $edit->jabatan }}" type="text" class="form-control" name="jabatan">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>
@endsection
