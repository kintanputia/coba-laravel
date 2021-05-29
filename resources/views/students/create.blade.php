@extends('layouts.main')

@section ('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
    <div class="col-5">
    <h1 class="mt-3"> Form Tambah Data Mahasiswa</h1>
    <form method="POST" action="/students">
    @csrf
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama mahasiswa" name="nama">
        @error('nama')
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        {{$message}}
        </div>
        @enderror
        </div>
        <div class="mb-3">
        <label for="nim" class="form-label">YUhuuu</label>
        <input type="text" class="form-control @error ('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM mahasiswa" name="nim">
        @error('nim')
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        {{$message}}
        </div>
        @enderror
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Masukkan email mahasiswa" name="email">
        </div>
        <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan mahasiswa" name="jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
  @endsection;