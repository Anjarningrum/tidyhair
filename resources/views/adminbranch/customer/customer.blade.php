@extends('adminbranch.app')
@section('content')
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
                    <td><img src="{{ asset('storage/'.$c->photo) }}" width="100" alt="" class="img-fluid img-thumbnail" ></td>
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