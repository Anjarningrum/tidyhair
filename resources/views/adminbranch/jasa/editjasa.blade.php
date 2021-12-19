@extends('adminbranch.app')
@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Edit Jasa</h1>   
      </div>
      <div class="row">
        <div class="col-xs col-md-3">
            <img src="{{ asset('storage/'.$jasa->image) }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
        </div>
        <form method="POST" class="col" action="{{ route('adminbranch.jasa.update',['id' => $jasa->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Nama :') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control py-1 my-2 @error('name') is-invalid @enderror" name="name" value="{{ $jasa->nama }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Harga :') }}</label>

            <div class="col-md-6">
                <input id="harga" type="text" class="form-control py-1 my-2 @error('harga') is-invalid @enderror" name="harga" value="{{ $jasa->harga }}" required autocomplete="harga" autofocus>

                @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="diskon" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Diskon (%) :') }}</label>

            <div class="col-md-6">
                <input id="diskon" type="number" min="0" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="diskon" value="{{ $jasa->diskon }}" required autocomplete="diskon" autofocus>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <input type="hidden" name="branch" value="{{ $branch }}">

        <div class="form-group row mb-2">
            <label for="image" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Gambar :') }}</label>

            <div class="col-md-6">
                <input required type="file" name="image" class="form-control">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
        </div>

        

        <div class="form-group row mb-0">             
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn" style="background-color: #C4C4C4;">
                    {{ __('Simpan') }}
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection