@extends('adminpusat.app')
@section('content')
<div class="col-md-12 ms-sm-auto col-lg-12">
      <div class="text-center mb-5 mt-2">
        <h1 class="h2 ">Barang</h1>
        
      </div>
</div>
<div class="col-md-12 ms-sm-auto col-lg-12">
<div class="row">
    <div class="col grid-margin">
    <div class="card">
        <div class="card-body">
        <div class="row mb-3">
            <div class="col-10">
            <h4 class="card-title">Data Barang</h4>
            </div>
            <div class="col-2 text-right">
            <a href="{{ route('adminpusat.barang.add') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <div class="row mb-3 table-responsive">
            <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr>
                <th width="5%">Id</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Diskon</th>
                <th>Photo</th>
                <th width="15%">Edit/Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $b)
                <tr>
                    <td align="center">{{ $b->id }}</td>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->harga }}</td>
                    <td>{{ $b->stok }}</td>
                    <td>{{ $b->diskon }}</td>
                    <td><img src="" alt="" class="img-fluid img-thumbnail" ></td>
                    <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('adminpusat.editbarang', ['id'=>$b->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit fa-sm"></i>
                        </a>
                        <a href="{{ route('adminpusat.barang.delete', ['id'=>$b->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
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