<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它

    $link = mysqli_connect("127.0.0.1","root","","bakery","3307");

$ac_s = $_POST['ac_s'];
$pw_s = $_POST['pw_s'];

//搜尋資料庫資料
$sql = "SELECT * FROM ac_s where ac_s = '$ac_s'";
$result = mysqli_query($link,$sql);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($ac_s != null && $pw_s != null )
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['ac_s'] = $ac_s;
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
