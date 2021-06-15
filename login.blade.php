<!DOCTYPE html>
<html>
    <head>
        <title>Login-KRS Online</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="Login_Page.css">
    </head>
    <body>   
        <div id="header">
        </div>
        <img src="header.png">
            <div id="main">
                @if (session("message"))
                <h1>{{session("message")}}</h1>
                @else
                <h1>Login KRS</h1>
                @endif

            <form method="POST" action="{{route("auth.login")}}">
            @csrf
            <input type="text" name="username" placeholder ="Username"><br>
            <input type="password" name="password" placeholder ="Password" class="form-control"><br>
            <button type="submit" onclick="" class="button">Login</button><br>
            </form><br>
        </div>
        <footer>
            <p style="font-family: Arial; font-size: 12; text-align: left; margin-top: 81px">©2021 KRS ONLINE IPB
            </p>
        </footer>
    </body>
</html>
