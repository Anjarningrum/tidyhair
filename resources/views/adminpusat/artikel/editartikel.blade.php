@extends('adminpusat.app')
@section('content')
<style>
    .data{
        font-family:'Roboto Slab';
        font-size: 15px;
        margin: 7px 0px 7px 0px;
        opacity: 0.75;
    }
</style>
<div class="row my-3 px-4">
    <h2>Edit Artikel</h2>
</div>
<div class="row my-3 mx-2 px-4">
    <div class="col-3">
        <img src="{{ asset('images/adminpusat/adminAvatar.png') }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
    </div>
    <div class="col-9">

    <form method="POST" action="{{ route('adminpusat.artikel.update',['id' => $artikel->id]) }}">
        @csrf
        <div class="form-group row">
            <label for="judul" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Judul :') }}</label>

            <div class="col-md-6">
                <input id="judul" type="text" class="form-control px-0 py-1 my-2 @error('judul') is-invalid @enderror" name="judul" value="{{ $artikel->judul }}" required autocomplete="judul">

                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="slug" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Slug :') }}</label>

            <div class="col-md-6">
                <input id="slug" type="text" class="form-control px-0 py-1 my-2 @error('slug') is-invalid @enderror" name="slug" value="{{ $artikel->slug }}" required autocomplete="slug">

                @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="isi" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Isi :') }}</label>
            <div class="col-md-6">
                <input id="isi" type="text" class="form-control px-0 py-1 my-2 @error('isi') is-invalid @enderror" name="isi" value="{{ $artikel->isi }}" required autocomplete="isi">
            </div>
        </div>

        <div class="form-group row mb-0">             
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn" style="background-color: #C4C4C4;">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection