@extends('adminpusat.app')
@section('content')
<style>
    .customBtn{
        text-decoration: none;
        background: #0B3F68;
        padding: 3px 18px 3px 18px;
        border-radius: 10px;
        color: white;
        font-size: 15px;
    }
    .customBtnEdit{
        text-decoration: none;
        background: #0B3F68;
        padding: 3px 23px 3px 23px;
        border-radius: 10px;
        color: white;
        margin-top: 11px;
        font-size: 15px;
    }
    .customBtnDelete{
        text-decoration: none;
        background: white;
        padding: 2px 14px 2px 14px;
        border-radius: 10px;
        border: 1px solid red;
        color: red;
        font-size: 15px;
    }
</style>

<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Order Jasa</h1>   
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Data Order Jasa</h4>
                </div>
            </div>
            <div class="row mb-3 table-responsive">
                <table class="table table-bordered table-hovered" id="table">
                    <thead>
                    <tr>
                    <th width="5%">Id</th>
                    <th>Pelanggan</th>
                    <th>Branch</th>
                    <th>Barber</th>
                    <th>Jasa</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Alamat Pengiriman</th>
                    <th>Ongkir</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                    <th width="15%">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($oj as $o)
                    <tr>
                        <td align="center">{{ $o->id }}</td>
                        <td align="center">{{ $o->customer[0]->name }}</td>
                        <td align="center">{{ $o->user->name }}</td>
                        <td align="center">{{ $o->barber->name }}</td>
                        <td align="center">{{ $o->jasa->nama }}</td>
                        <td align="center">{{ $o->jasa->harga }}</td>
                        <td align="center">{{ $o->qty }}</td>
                        <td align="center">{{ $o->total_harga }}</td>
                        <td align="center">{{ $o->alamat }}</td>
                        <td align="center">{{ $o->ongkir }}</td>
                        <td align="center">{{ $o->metode_pembayaran }}</td>
                        <td align="center">{{ $o->status }}</td>
                        <td align="center">
                            <div style="margin-bottom:5px;">
                                <a href="{{ route('adminpusat.editorderjasa', ['id'=>$o->id]) }}" class="customBtnEdit">
                                    Edit
                                </a>
                            </div>
                                <a href="{{ route('adminpusat.orderjasa.delete', ['id'=>$o->id]) }}" onclick="return confirm('Yakin Hapus data')" class="customBtnDelete">
                                    Delete
                                </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection