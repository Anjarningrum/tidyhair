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
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Edit Hairstyle</h1>   
      </div>
      <div class="row">
        <div class="col-xs col-md-3">
            <img src="{{ asset('storage/'.$hair->image) }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
        </div>
        <form method="POST" class="col" action="{{ route('adminpusat.hairstyle.update',['id' => $hair->id]) }}">
        @csrf
        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Name :') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control px-0 py-1 my-2 @error('name') is-invalid @enderror" name="name" value="{{ $hair->nama }}" required autocomplete="name" autofocus>

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
                <textarea id="deskripsi" type="text" class="form-control px-0 py-1 my-2 @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $hair->deskripsi }}">
                {{ $hair->deskripsi }}
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
                <input type="radio" name="status" value="active" {{ $hair->status == 'active'? 'checked' : ''}}> Active <br/>
                <input type="radio" name="status" value="inactive" {{ $hair->status == 'inactive'? 'checked' : ''}}> Non-Active <br/>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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