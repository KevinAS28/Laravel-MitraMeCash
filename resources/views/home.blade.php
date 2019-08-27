@extends('master_home')

@section("body")

<div id="card">

    <div class="menu" onclick="location.href='info_saldo'">
            <img src="{{URL::asset("image/infosaldo.png")}}" class="menuicon"/><br>
            <h3>Info Saldo</h3>
    </div>

    <div class="menu" onclick="location.href='{{URL::to('daftar_mutasi')}}'">
        <img src="{{URL::asset("image/daftarmutasi.png")}}" class="menuicon"/><br>
        <h3>Daftar Mutasi</h3>
    </div>

    <div class="menu" onclick="location.href=''">
        <img src="{{URL::asset("image/infosaldo.png")}}" class="menuicon"/><br>
        <h3>Transfer</h3>
    </div>

    <div class="menu" onclick="location.href='{{URL::to('release')}}'">
        <img src="{{URL::asset("image/releaselogo.png")}}" class="menuicon"/><br>
        <h3>Release</h3>
    </div>

    <div class="menu" onclick="location.href='{{URL::to('info_prodak')}}'">
        <img src="{{URL::asset("image/infoprodak.png")}}" class="menuicon"/><br>
        <h3>Info Prodak</h3>
    </div>    
</div>
@endsection