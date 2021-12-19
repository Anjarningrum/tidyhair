@extends('adminbranch.app')
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
        <h1 class="h2 ">Profil Customer</h1>   
      </div>
      <div class="row">
        <div class="col-xs col-md-3">
            <img src="{{ asset('storage/'.$cus->photo) }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
        </div>
        <div class="col">
        
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Name :') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control py-1 my-2 @error('name') is-invalid @enderror" name="name" value="{{ $cus->name }}" required autocomplete="name" readonly>

            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('E-Mail Address :') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control py-1 my-2 @error('email') is-invalid @enderror" name="email" value="{{ $cus->email }}" required autocomplete="email" readonly>

            </div>
        </div>

        <div class="form-group row">
            <label for="no_telepon" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('No Telepon :') }}</label>

            <div class="col-md-6">
                <input id="no_telepon" type="no_telepon" class="form-control py-1 my-2 @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $cus->no_telepon }}" readonly>

            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Alamat :') }}</label>

            <div class="col-md-6">
                <input id="alamat" type="alamat" class="form-control py-1 my-2 @error('alamat') is-invalid @enderror" name="alamat" value="{{ $cus->alamat }}" readonly>

        </div>

        </div>
      </div>
</div>
@endsection