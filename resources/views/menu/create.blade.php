@extends('layouts.app')

@section('title', 'Tambah Menu')

@section('content')
<div class="container">
    <a href="{{ route('menu.index') }}" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_menu">Nama Menu</label>
                    <input type="text" class="form-control" name="nama_menu" >
                    @error('nama_menu')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" >
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dekripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" >
                        @error('deskripsi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="image">Foto Menu</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
