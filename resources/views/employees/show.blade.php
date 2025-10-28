@extends('layouts.master')

@section('title', 'Detail Pegawai')

@section('content')
<h1>Detail Pegawai</h1>
<table class="table table-bordered">
    <tr><th>Nama Lengkap</th><td>{{ $employees->nama_lengkap }}</td></tr>
    <tr><th>Email</th><td>{{ $employees->email }}</td></tr>
    <tr><th>Nomor Telepon</th><td>{{ $employees->nomor_telepon }}</td></tr>
    <tr><th>Tanggal Lahir</th><td>{{ $employees->tanggal_lahir }}</td></tr>
    <tr><th>Alamat</th><td>{{ $employees->alamat }}</td></tr>
    <tr><th>Tanggal Masuk</th><td>{{ $employees->tanggal_masuk }}</td></tr>
    <tr><th>Status</th><td>{{ $employees->status }}</td></tr>
    <tr><th>Departemen</th><td>{{ $employees->department->nama_departemen ?? '-' }}</td></tr>
</table>
<a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
