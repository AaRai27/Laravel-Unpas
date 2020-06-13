@extends('layout.main')

@section('title', "Detail Mahasiswa")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-center mt-4 mb-4">Detail Mahasiswa</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <P href="#" class="card-link">{{$student->email}}</P>

                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection