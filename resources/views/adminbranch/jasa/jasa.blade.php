@extends('adminbranch.app')
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
        <h1 class="h2 ">Jasa</h1>   
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Data Jasa</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ route('adminbranch.jasa.add') }}" class="customBtn ms-5">Tambah</a>
                </div>
            </div>
            <div class="row mb-3 table-responsive">
                <table class="table table-bordered table-hovered" id="table">
                    <thead>
                    <tr>
                    <th width="5%">Id</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Branch</th>
                    <th>Photo</th>
                    <th width="15%">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jasa as $j)
                    <tr>
                        <td align="center">{{ $j->id }}</td>
                        <td>{{ $j->nama }}</td>
                        <td>{{ $j->harga }}</td>
                        <td>{{ $j->diskon }} %</td>
                        <td>
                                @foreach($j->users as $u)
                                {{ $u->name }} <br>
                                @endforeach
                        </td>
                        <td><img src="{{ asset('storage/'.$j->image) }}" alt="" class="img-fluid img-thumbnail" width="150" ></td>
                        <td align="center">
                            <div style="margin-bottom:5px;">
                                <a href="{{ route('adminbranch.editjasa', ['id'=>$j->id]) }}" class="customBtnEdit">
                                    Edit
                                </a>
                            </div>
                                <a href="{{ route('adminbranch.jasa.delete', ['id'=>$j->id]) }}" onclick="return confirm('Yakin Hapus data')" class="customBtnDelete">
                                    Hapus
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