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
        <h1 class="h2 ">Pembayaran Jasa</h1>   
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Data Pembayaran Jasa</h4>
                </div>
            </div>
            <div class="row mb-3 table-responsive">
                <table class="table table-bordered table-hovered" id="table">
                    <thead>
                    <tr>
                    <th width="5%">Id</th>
                    <th>Customer</th>
                    <th>Branch</th>
                    <th>Barber</th>
                    <th>Invoice</th>
                    <th>Jumlah</th>
                    <th>Metode</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th width="15%">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($p as $p)
                    <tr>
                        <td align="center">{{ $p->id }}</td>
                        <td align="center">{{ $p->customer->name }}</td>
                        <td align="center">{{ $p->user->name }}</td>
                        <td align="center">{{ $p->barber->name }}</td>
                        <td align="center">{{ $p->transaksibarang->invoice }}</td>
                        <td align="center">{{ $p->transaksibarang->total_bayar }}</td>
                        <td align="center">{{ $p->transaksibarang->metode_pembayaran }}</td>
                        <td align="center"></td>
                        <td align="center">{{ $p->status }}</td>
                        <td align="center">
                            <div style="margin-bottom:5px;">
                                <a href="{{ route('adminpusat.editorderbarang', ['id'=>$p->id]) }}" class="customBtnEdit">
                                    Edit
                                </a>
                            </div>
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