@extends('adminpusat.app')
@section('content')
<div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Tambah Barang</h1>
        
      </div>
</div>
<div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
<form method="POST" action="{{ route('adminpusat.barang.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Nama :') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control px-0 py-1 my-2 @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

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
                <input id="harga" type="text" class="form-control px-0 py-1 my-2 @error('harga') is-invalid @enderror" name="harga" required autocomplete="harga" autofocus>

                @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="stok" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Stok :') }}</label>

            <div class="col-md-6">
                <input id="stok" type="number" min="1" class="form-control px-0 py-1 my-2 @error('stok') is-invalid @enderror" name="stok" required autocomplete="stok" autofocus>

                @error('stok')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="diskon" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Diskon (%) :') }}</label>

            <div class="col-md-6">
                <input id="diskon" type="number" min="0" class="form-control px-0 py-1 my-2 @error('diskon') is-invalid @enderror" name="diskon" required autocomplete="diskon" autofocus>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="branch" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Branch :') }}</label>

            <div class="col-md-6">
                @foreach ($branch as $b)
                <input type="checkbox" name="branch[]" value="{{ $b->id }}"> {{ $b->name }} <br/>
                @endforeach
                
                @error('branch')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

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
                    {{ __('Add') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection