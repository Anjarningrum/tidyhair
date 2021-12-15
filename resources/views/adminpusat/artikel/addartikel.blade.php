@extends('adminpusat.app')
@section('content')
<script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor');
</script>
<style>
    .data{
        font-family:'Roboto Slab';
        font-size: 15px;
        margin: 7px 0px 7px 0px;
        opacity: 0.75;
    }
</style>
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Tambah Artikel</h1>   
      </div>
      <div class="row">
        <form method="POST" class="col" action="{{ route('adminpusat.artikel.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="judul" class="col-md-2 col-form-label text-md-right data py-0 my-2">{{ __('Judul :') }}</label>

            <div class="col-md-10">
                <input id="judul" type="text" class="form-control px-0 py-1 my-2 @error('judul') is-invalid @enderror" name="judul" required autocomplete="judul">

                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="slug" class="col-md-2 col-form-label text-md-right data py-0 my-2">{{ __('Slug :') }}</label>

            <div class="col-md-10">
                <input id="slug" type="text" class="form-control px-0 py-1 my-2 @error('slug') is-invalid @enderror" name="slug" required autocomplete="slug">

                @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="image" class="col-md-2 col-form-label text-md-right data py-0 my-2">{{ __('Gambar :') }}</label>

            <div class="col-md-10">
                <input required type="file" name="image" class="form-control">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <textarea class="ckeditor form-control" name="isi"></textarea>
            </div>                
        </div>

        <div class="form-group row mb-0 mt-5">             
            <div class="col-md-12">
                <button type="submit" class="btn" style="background-color: #C4C4C4;">
                    {{ __('Tambah') }}
                </button>
            </div>
        </div>
        </form>
      </div>
</div>
@endsection