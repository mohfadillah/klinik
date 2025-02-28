@extends('layouts.app')
@section('judulcard', ' Pasien')
@section('content')
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

{{-- <td><span class="badge bg-label-success me-1">Completed</span></td>
<td><span class="badge bg-label-info me-1">Scheduled</span></td>
<td><span class="badge bg-label-warning me-1">Pending</span></td>
<td><span class="badge bg-label-primary me-1">Active</span></td> --}}


{{-- <div class="dropdown">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
        <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
            Edit</a>
        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
            Delete</a>
    </div>
</div> --}}
