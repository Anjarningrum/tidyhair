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
        <h1 class="h2 ">Barber</h1>   
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Data Barber</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ route('adminpusat.barber.add') }}" class="customBtn ms-5">Add</a>
                </div>
            </div>
            <div class="row mb-3 table-responsive">
                <table class="table table-bordered table-hovered" id="table">
                <thead>
                    <tr>
                    <th width="5%">Id</th>
                    <th>Nama Barber</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Branch</th>
                    <th>Photo</th>
                    <th width="15%">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barber as $b)
                    <tr>
                        <td align="center">{{ $b->id }}</td>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->email }}</td>
                        <td>{{ $b->alamat }}</td>
                        <td>{{ $b->no_telepon }}</td>
                        <td>{{ $b->user->name }}</td>
                        <td><img src="{{ asset('storage/'.$b->photo) }}" alt="" class="img-fluid img-thumbnail" ></td>
                        <td align="center">
                            <div style="margin-bottom:5px;">
                                <a href="{{ route('adminpusat.editbarber', ['id'=>$b->id]) }}" class="customBtnEdit">
                                    Edit
                                </a>
                            </div>
                            <a href="{{ route('adminpusat.barber.delete', ['id'=>$b->id]) }}" onclick="return confirm('Yakin Hapus data')" class="customBtnDelete">
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