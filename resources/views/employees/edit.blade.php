@extends('layouts.master')

@section('title', 'Edit Pegawai')

@section('content')
<h1>Edit Pegawai</h1>
<form action="{{ route('employees.update', $employees->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $employees->nama_lengkap) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $employees->email) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control" value="{{ old('nomor_telepon', $employees->nomor_telepon) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $employees->tanggal_lahir) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $employees->alamat) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" class="form-control" value="{{ old('tanggal_masuk', $employees->tanggal_masuk) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="aktif" {{ old('status', $employees->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $employees->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
