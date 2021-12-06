@extends('adminpusat.app')
@section('content')
<div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Tambah Hair Style</h1>
        
      </div>
</div>
<div class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
<form method="POST" action="{{ route('adminpusat.hairstyle.save') }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
        <div class="form-group row mb-2">
            <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Name :') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control px-0 py-1 my-2 @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="deskripsi" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Deskripsi :') }}</label>

            <div class="col-md-6">
                <textarea id="deskripsi" type="text" class="form-control px-0 py-1 my-2 @error('deskripsi') is-invalid @enderror" name="deskripsi">
                </textarea>
                @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="status" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Status :') }}</label>

            <div class="col-md-6">
                <input type="radio" name="status" value="active"> Active <br/>
                <input type="radio" name="status" value="inactive"> Non-Active <br/>
                @error('status')
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

        <div class="form-group row  mb-2">             
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn" style="background-color: #C4C4C4;">
                    {{ __('Add') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection