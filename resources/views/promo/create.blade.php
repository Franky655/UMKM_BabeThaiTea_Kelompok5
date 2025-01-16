@extends('layouts.app')

@section('title', 'Tambah Promo')

@section('content')
<div class="container">
    <a href="{{ route('promo.index') }}" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf  
                <div class="form-group">
                    <label for="image">Foto Promo</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>    
                    <input type="text" class="form-control" name="deskripsi" >
                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
