<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="Regist_style.css">
    </head>
    <body>   
        <div id="header">
        </div>
        <img src="header.png">
            <div id="main">
                <h1>Daftar Akun </h1>

            <form method="POST" action="{{route("auth.register")}}">
            @csrf
            <input type="text" name="fullname" placeholder ="Nama Lengkap"><br>
            <input type="text" name="nim" placeholder ="NIM"><br>
            <input type="text" name="name" placeholder ="Username"><br>
            <input type="password" name="password" placeholder ="Password" class="form-control"><br>
            <button type="submit" onclick="" class="button">Daftar</button><br>
            <a href="login"><h6 style="font-family:Arial; font-size: 8pt; margin-top: -13px; color:black; font-weight: lighter; ">Sudah punya akun? Login di sini</h6></a>
            </form><br>
        </div>
            <p style="font-family: Arial; font-size: 12; text-align: left">©2021 KRS ONLINE IPB</p>
    </body>
</html>
