@extends('layouts.app')

@section('title', 'Edit Menu')

@section('content')
<div class="container">
    <a href="{{ route('menu.index') }}" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama_menu">Nama menu</label>
                    <input type="text" class="form-control" name="nama_menu" value="{{ $menu->nama_menu }}">
                    @error('nama_menu')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga"  value="{{ $menu->harga }}">
                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Foto Menu</label>
                    <img src="/image/{{ $menu->image }}" alt="Menu Image" class="img-fluid mb-2" width="150">
                    <input type="file" class="form-control" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
