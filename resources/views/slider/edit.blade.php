@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

<div class="container">
<a href="{{ route('slider.index') }}" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                <label for="image">Foto Slider</label>
                <img src="/image/{{ $slider->image }}" alt="slider Image" class="img-fluid mb-2" width="150">
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
