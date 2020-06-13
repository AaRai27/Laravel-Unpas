@extends('layout.main')

@section('title', "Daftar Mahasiswa")

@section('container')
<div class="container">
    <h1 class="text-center mt-4 mb-4">Daftar Mahasiswa</h1>

    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $mhs->nama}}</td>
                <td>{{ $mhs->nim}}</td>
                <td>{{ $mhs->email}}</td>
                <td>{{ $mhs->jurusan}}</td>
                <td>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection