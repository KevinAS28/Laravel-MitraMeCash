<!DOCTYPE html>
@extends("master")

@section('head')
@include("register_style")
@endsection

@section("body")
    <div id="card">
        <h1 style="margin-left: 40%;">Register</h1>
        <div id="inner-card">
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username"/>
                <br><br>
                <input type="password" name="password" placeholder="Password"/>
                <br><br>
                <input type="password" name="repassword" placeholder="Retype Password"/>
                <br><br>
                <input type="text" name="norekening" placeholder="No Rekening"/>
                <br><br>                      
                <input type="text" name="namarekening" placeholder="Nama Rekening"/>
                <br><br>                          
                <input type="text" name="nohp" placeholder="No HP"/>
                <br><br>                
                <input type="text" name="kodemerchant" placeholder="Kode Merchant"/>
                <br><br>                
                <input type="text" name="namamerchant" placeholder="Nama Merchant"/>
                <br><br>                
                <input type="submit" value="Register"/>
            </form>
        </div>
</div>
@endsection

<?php

?>
