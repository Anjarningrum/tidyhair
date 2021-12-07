@extends('adminpusat.app')
@section('content')
<div class="col-md-12 ms-sm-auto col-lg-12">
      <div class="text-center mb-5 mt-2">
        <h1 class="h2 ">Barber</h1>
        
      </div>
</div>
<div class="col-md-12 ms-sm-auto col-lg-12">
<div class="row">
    <div class="col grid-margin">
    <div class="card">
        <div class="card-body">
        <div class="row mb-3">
            <div class="col-10">
            <h4 class="card-title">Data Barber</h4>
            </div>
            <div class="col-2 text-right">
            <a href="{{ route('adminpusat.barber.add') }}" class="btn btn-primary">Tambah</a>
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
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('adminpusat.editbarber', ['id'=>$b->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit fa-sm"></i>
                        </a>
                        <a href="{{ route('adminpusat.barber.delete', ['id'=>$b->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o fa-sm"></i>
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