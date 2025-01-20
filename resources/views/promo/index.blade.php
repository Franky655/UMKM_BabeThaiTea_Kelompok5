@extends('layouts.app')

@section('title', 'Data Promo')

@section('content')
<div class="container">
<a href="{{ route('promo.create') }}" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Foto Promo</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($promo as $promo)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        <img src="{{ asset('image/' . $promo->image) }}" alt="Promo Image" class="img-fluid" width="100">
                        <td>{{ $promo->judul }}</td>
                        <td>{{ $promo->deskripsi }}</td>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('promo.edit', $promo->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" style="display:inline;">
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
