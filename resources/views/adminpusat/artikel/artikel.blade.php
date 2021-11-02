@extends('adminpusat.app')
@section('content')
<div class="col-md-12 ms-sm-auto col-lg-12">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Artikel</h1>
        
      </div>
</div>
<div class="col-md-12 ms-sm-auto col-lg-12">
<div class="row">
    <div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
        <div class="row mb-3">
            <div class="col-10">
            <h4 class="card-title">Data Artikel</h4>
            </div>
            <div class="col-2 text-right">
            <a href="{{ route('adminpusat.artikel.add') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <div class="row mb-3 table-responsive">
            <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr>
                <th width="5%">Id</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Isi</th>
                <th>Image</th>
                <th width="15%">Edit/Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikel as $a)
                <tr>
                    <td align="center">{{ $a->id }}</td>
                    <td>{{ $a->judul }}</td>
                    <td>{{ $a->slug }}</td>
                    <td>{{ $a->isi }}</td>
                    <td><img src="" alt="" class="img-fluid img-thumbnail" ></td>
                    <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('adminpusat.editartikel', ['id'=>$a->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit fa-sm"></i>
                        </a>
                        <a href="{{ route('adminpusat.artikel.delete', ['id'=>$a->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
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