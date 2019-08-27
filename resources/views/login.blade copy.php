<!DOCTYPE html>
@extends("master")

@section('head')
@include("login_style")
@endsection

@section("body")

    <div id="card">
        <h1 style="margin-left: 40%;">Login</h1>
        <div id="inner-card">
            
            <form action="" method="POST">
                <input type="text" name="username" />
                <br><br>
                <input type="password" name="password" />
                <br><br>
                <input type="submit" value="Login"/>
            </form>
        </div>
    
</div>
@endsection

<?php




?>
