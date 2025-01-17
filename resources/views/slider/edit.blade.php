@extends('layouts.app')

@section('title', 'Edit Slider')

@section('content')

<div class="container">
    <a href="{{ route('sliders.index') }}" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="image">Foto Slider</label>
                    <div class="mb-2">
                        <img src="{{ asset('image/' . $slider->image) }}" alt="Slider Image" class="img-fluid" width="150">
                    </div>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
