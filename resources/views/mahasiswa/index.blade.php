@extends('layouts.main')

@section ('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> Daftar Mahasiswa</h1>
        <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($mahasiswa as $mhs)
          <tr>
            <th scope="row">{{$mhs -> id}}</th>
            <td>{{$mhs -> Nama}}</td>
            <td>{{$mhs -> Email}}</td>
            <td>{{$mhs -> Jurusan}}</td>
            <td>
              <a href="" class="badge bg-success">Edit</a>
              <a href="" class="badge bg-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
    </div>
  </div>
  @endsection;