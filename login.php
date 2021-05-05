<html>

<head>
    <title>登入</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        body {
            background-image: url(https://img.wallpapersafari.com/desktop/1920/1080/14/1/g7w3HJ.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body>
    <center>
    <form method="POST" action="signcheck.php">
        <br><br><br><br>
        <h3>
        請輸入帳號：<input type="text" name="ac_c" /><br> 請輸入密碼：<input type="Password" name="pw_c" /><br>
        </h3>
        <input type="submit" value="登入" style="width:120px;height:40px;"/>
    </form>

    <form method="POST" action="storesign.php">
        <input type="submit" value="管理員登入" style="width:120px;height:40px;"/>
    </form>

    <form method="POST" action="signup.html">
        <input type="submit" value="註冊" style="width:120px;height:40px;"/>
    </form>
    
    </center>
</body>

</html>