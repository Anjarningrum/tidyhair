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
<div class="col-md-12 ms-sm-auto col-lg-12">
      <div class="text-center mb-5 mt-2">
        <h1 class="h2 ">Customer</h1>
        
      </div>
</div>
<div class="col-md-12 ms-sm-auto col-lg-12">
<div class="row">
    <div class="col grid-margin">
    <div class="card">
        <div class="card-body">
        <div class="row mb-3">
            <div class="col-10">
            <h4 class="card-title">Data Customer</h4>
            </div>
            <div class="col-2 text-right">
            <a href="{{ route('adminpusat.customer.add') }}" class="customBtn ms-5">Add</a>
            </div>
        </div>
        <div class="row mb-3 table-responsive">
            <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr>
                <th width="5%">Id</th>
                <th>Nama Customer</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Photo</th>
                <th width="15%">Edit/Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cus as $c)
                <tr>
                    <td align="center">{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->alamat }}</td>
                    <td>{{ $c->no_telepon }}</td>
                    <td><img src="{{ asset('storage/'.$c->photo) }}" width="150" alt="" class="img-fluid img-thumbnail" ></td>
                    <td align="center">
                        <div style="margin-bottom:5px;">
                        <a href="{{ route('adminpusat.editcustomer', ['id'=>$c->id]) }}" class="customBtnEdit">
                            Edit
                        </a>
                        </div>
                        <a href="{{ route('adminpusat.customer.delete', ['id'=>$c->id]) }}" onclick="return confirm('Yakin Hapus data')"  class="customBtnDelete">
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