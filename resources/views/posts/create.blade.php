@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5>Add Post</h5>
          <hr>
          {{-- method="post" untuk mengirim data --}}
          <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
              <label class="form-label" for="Title">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label class="form-label" for="Image">Image</label>
              <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
              <label class="form-label" for="Content">Content</label>
              <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- <div class="row">
  <div class="col-md-12">
    <div class="card border-0 shadow-sm rounded">
      <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

            <!-- error message untuk title -->
            @error('image')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label class="font-weight-bold">JUDUL</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
              value="{{ old('title') }}" placeholder="Masukkan Judul Post">

            <!-- error message untuk title -->
            @error('title')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label class="font-weight-bold">KONTEN</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
              placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

            <!-- error message untuk content -->
            @error('content')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          <button type="reset" class="btn btn-md btn-warning">RESET</button>

        </form>
      </div>
    </div>
  </div>
</div> --}}
