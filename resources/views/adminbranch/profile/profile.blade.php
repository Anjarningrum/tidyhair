@extends('adminbranch.app')
@section('content')
<style>
    .data{
        font-family:'Roboto Slab';
        font-size: 18px;
        margin: 7px 0px 7px 0px;
        opacity: 0.75;
    }
</style>

<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Profil Admin</h1>   
    </div>
    <div class="col-xs col-md p-2 ps-5 mt-4">
        <img src="{{ asset('images/adminpusat/adminAvatar.png') }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
    </div>
    <div class="col col-md-9 p-2 ps-5">
        <div class="row">
            <span class="data"> Nama : {{ $user->name }}</span>
        </div>
        <div class="row">
            <span class="data"> Email : {{ $user->email }}</span>
        </div>
        <div class="row">
            <span class="data"> Role : {{ $user->getRoleNames()[0] }}</span>
        </div>
        <div class="row">
            <span class="data"> Alamat : {{ $user->alamat }}</span>
        </div>
        <div class="row">
            <span class="data"> No Telepon : {{ $user->no_telepon }}</span>
        </div>
        <div class="row my-4">
            <div class="col-9"></div>
            <div class="col-3">
                <a href="{{ route('adminbranch.profile.edit') }}" class="btn" style="background-color: #C4C4C4;">Edit</a>
            </div>   
        </div>
    </div>
</div>

<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
    
</div>

@endsection