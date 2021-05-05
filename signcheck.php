<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它

    $link = mysqli_connect("127.0.0.1","root","","bakery","3307");
    include("connect.php");
$ac_c = $_POST['ac_c'];
$pw_c = $_POST['pw_c'];

//搜尋資料庫資料
$sql = "SELECT * FROM signup where ac_c = '$ac_c'";
if($result = mysqli_query($link,$sql)){
    $row_result=mysqli_num_rows($result);
    mysqli_free_result($result);
}
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($ac_c != null && $pw_c != null && $ac_c == $ac_c && $pw_c == $pw_c)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['ac_c'] = $ac_c;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=welcome.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}

mysqli_close($link); 
?>