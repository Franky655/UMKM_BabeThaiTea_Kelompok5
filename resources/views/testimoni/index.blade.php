@extends('layouts.app')

@section('title', 'Data Testimoni')

@section('content')

<div class="container">
<<<<<<< HEAD
    <a href="/admin/testimoni/create" class="btn btn-primary mb-1">Tambah Data</a>
=======
>>>>>>> origin/TengkuMR

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
<<<<<<< HEAD
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
=======
                    <th>Nama</th>
                    <th>Deskripsi</th>
>>>>>>> origin/TengkuMR
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($testimoni as $testimoni)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $testimoni->title }}</td>
                    <td>{{ $testimoni->description }}</td>
                    <td>
<<<<<<< HEAD
                        <img src="/image/{{ $testimoni->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
=======
>>>>>>> origin/TengkuMR
                        <div class="btn-group" role="group">
                            <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
