@extends('dashboard.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit Post</h3>
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <input type="text" class="form-control" name="id" required value="{{ old('id', $post->id) }}" readonly> 
            </div>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" required value="{{ old('judul', $post->judul) }}"> 

                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category_id" required>
                        @foreach($categories as $category)
                            @if(old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select> 
            </div>
            <div class="row mb-3">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" style="font-size: 12px;" required value="{{ old('lokasi', $post->lokasi) }}"> 
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                @error('deksripsi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <input id="deskripsi" type="hidden" name="deskripsi" required value="{{ old('deskripsi', $post->deskripsi) }}">
                    <trix-editor input="deskripsi" style="font-size: 14px; color: #aaa"></trix-editor>
            </div>
            <div class="row mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="preview(event)">
                <div class="d-flex justify-content-start mt-5 mb-5">
                    @if($post->image)
                        <img src="{{ asset('storage/'. $post->image) }}" id="imgPreview" width="333">
                    @else
                        <img id="imgPreview" width="333">
                    @endif
                </div>
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/dashboard/posts" class="btn btn-warning">Back To Posts</a>
            <button type="submit" name="submit" class="btn btn-primary">Edit Posts</button>
    </form>
</div>

@endsection