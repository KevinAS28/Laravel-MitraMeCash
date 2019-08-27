<!DOCTYPE html>
<html>
    <head>
        @yield("head")
        @include("master_home_style")
    </head>
    <body>
        <div id="header" >
            <div id="left_header">
                <img id="gmbr0" width="70px" src="{{URL::asset('image/user.png')}}"/>
                <h2 id="username" style="padding-top: 20px;"> {{$username}}</h2>
            </div>     
            <div id="right_header" style="float:right; margin-top:-100px;margin-right: 10px;">
            <a href="{{URL::to('/logout')}}"><h4 id="logout" style="padding-top: 20px;"> Logout</h4></a>
            </div>
        </div>
        <div id="body" style="margin-top: 100px;">
        @yield("body")
        </div>
    </body>
</html>