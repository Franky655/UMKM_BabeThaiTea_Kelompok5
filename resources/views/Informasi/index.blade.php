@extends('layouts.app')

@section('title', 'Data Informasi')

@section('content')

<div class="container">
    <a href="{{ route('informasi.create') }}" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($informasi as $informasi)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $informasi->title }}</td>
                    <td>{{ $informasi->description }}</td>
                    <td>
                        <img src="/image/{{ $informasi->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('informasi.edit', $informasi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('informasi.destroy', $informasi->id) }}" method="POST" style="display:inline;">
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
