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
<div class="row my-3 px-4">
    <h2>Profile</h2>
</div>
<div class="row my-3 mx-2 px-4">
    <div class="col-xs-12 col-md-3">
        <img src="{{ asset('storage/'.$user->photo) }}" style="vertical-align: middle;width: 100px;height: auto;border-radius: 50%;">
    </div>
    <div class="col col-md-9">
        <div class="row">
            <span class="data"> Name : {{ $user->name }}</span>
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
@endsection