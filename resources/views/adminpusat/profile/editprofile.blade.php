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
        <h1 class="h2 ">Edit Profil</h1>   
      </div>
      <div class="row">
        <div class="col-xs col-md-3">
            <img src="{{ asset('storage/'.$user->photo) }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
        </div>
        <form method="POST" class="col" action="{{ route('adminpusat.profile.update',['id' => $user->id]) }}"  enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Name :') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control px-0 py-1 my-2 @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('E-Mail Address :') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control px-0 py-1 my-2 @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Role :') }}</label>
                <input id="role" type="hidden" name="role" value="{{ $user->getRoleNames()[0] }}">
                <div class="col-md-6">
                    <span class="form-control px-0 py-1 my-2">{{ $user->getRoleNames()[0] }}</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Password :') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control px-0 py-1 my-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Confirm Password :') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control px-0 py-1 my-2" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_telepon" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('No Telepon :') }}</label>

                <div class="col-md-6">
                    <input id="no_telepon" type="no_telepon" class="form-control px-0 py-1 my-2 @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $user->no_telepon }}">

                    @error('no_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Alamat :') }}</label>

                <div class="col-md-6">
                    <input id="alamat" type="alamat" class="form-control px-0 py-1 my-2 @error('alamat') is-invalid @enderror" name="alamat">

                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-2">
                <label for="image" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Photo :') }}</label>

                <div class="col-md-6">
                    <input required type="file" name="image" class="form-control py-1 my-2 @error('photo') is-invalid @enderror">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>

            <div class="form-group row mb-0 mb-4">             
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn" style="background-color: #C4C4C4;">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
</div>
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
    
</div>
@endsection