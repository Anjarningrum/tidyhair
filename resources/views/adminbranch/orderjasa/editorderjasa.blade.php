@extends('adminbranch.app')
@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Edit Pesanan Jasa</h1>   
      </div>
      <div class="row">
        <form method="POST" class="col" action="{{ route('adminbranch.orderjasa.update',['id' => $oj->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Nama Pelanggan :') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control py-1 my-2 @error('name') is-invalid @enderror" name="nampelanggan" value="{{ $oj->customer[0]->name }}" required autofocus readonly>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Nama Barang :') }}</label>

            <div class="col-md-6">
                <input id="harga" type="text" class="form-control py-1 my-2 @error('harga') is-invalid @enderror" name="namabarang" value="{{ $oj->jasa->nama }}" autofocus readonly>

                @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Harga :') }}</label>

            <div class="col-md-6">
                <input id="harga" type="number" min="0" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="hargabarang" value="{{ $oj->jasa->harga }}" autofocus readonly>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
               
        <div class="form-group row">
            <label for="qty" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Qty :') }}</label>

            <div class="col-md-6">
                <input id="qty" type="number" min="0" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="qty" value="{{ $oj->qty }}" required autofocus readonly>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
               
        <div class="form-group row">
            <label for="total" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Total :') }}</label>

            <div class="col-md-6">
                <input id="total" type="number" min="0" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="total" value="{{ $oj->total_harga }}" required autofocus readonly>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
               
        <div class="form-group row">
            <label for="alamat" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Alamat Pengiriman:') }}</label>

            <div class="col-md-6">
                <input id="alamat" type="text" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="alamat" value="{{ $oj->alamat }}" required autofocus readonly>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
               
        <div class="form-group row">
            <label for="ongkir" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Ongkir :') }}</label>

            <div class="col-md-6">
                <input id="ongkir" type="text" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="alamat" value="{{ $oj->ongkir }}" required autofocus readonly>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
               
        <div class="form-group row">
            <label for="metodepembayaran" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Metode Pembayaran :') }}</label>

            <div class="col-md-6">
                <input id="metodepembayaran" type="text" class="form-control py-1 my-2 @error('diskon') is-invalid @enderror" name="alamat" value="{{ $oj->metode_pembayaran }}" required autofocus readonly>

                @error('diskon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
               
        <div class="form-group row">
            <label for="status" class="col-md-4 col-form-label text-md-right data py-0 my-2">{{ __('Status :') }}</label>

            <div class="col-md-6">
                <select name="status" id="status" class="form-control py-1 my-2">
                    <option value="actice">active</option>
                    <option value="finished">finished</option>
                    <option value="canceled">canceled</option>
                </select>
                @error('diskon')
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