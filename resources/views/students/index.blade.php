@extends('layout.main')

@section('title', "Daftar Mahasiswa")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="text-center mt-4 mb-4">Daftar Mahasiswa</h1>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>
            @foreach ($students as $s)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$s->nama}}
                    <a href="{{url('students/'.$s->id)}}" class="badge badge-primary badge-pill">Detail</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection