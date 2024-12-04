@extends('layouts.app')

@section('title', 'Data Menu')

@section('content')
<div class="container">
<a href="{{ route('menu.create') }}" class="btn btn-primary mb-1">Tambah Data</a>

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
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Foto Menu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($menu as $menu)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>Rp {{ number_format($menu->harga, 3) }}</td>

                    <td>
           
                    <img src="{{ asset('image/' . $menu->image) }}" alt="Menu Image" class="img-fluid" width="100">
                </td>
                    </td>
                    <td>
                        <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                            @csrf
                        @method('DELETE')
                         <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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