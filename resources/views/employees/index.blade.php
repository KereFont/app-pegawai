@extends('layouts.master')

@section('title', 'Daftar Pegawai')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pegawai</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-success">+ Tambah Employee</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>Tgl Masuk</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->nama_lengkap }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->nomor_telepon }}</td>
            <td>{{ $employee->tanggal_lahir }}</td>
            <td>{{ $employee->alamat }}</td>
            <td>{{ $employee->tanggal_masuk }}</td>
            <td>{{ $employee->status }}</td>
            <td>
                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $employees->links() }}
@endsection
