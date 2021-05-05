<html>

<head>
    <style>
        a:visited {
            padding: 8px;
            margin-bottom: 7px;
            background-color: #5e6061;
            color: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
        
        a {
            text-decoration: none;
        }
        
        body {
            background-image: url(https://img.wallpapersafari.com/desktop/1920/1080/14/1/g7w3HJ.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        
        .menu li {
            padding: 8px;
            margin-bottom: 7px;
            background-color: #5e6061;
            color: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
        .aside {
            background-color: transparent;;
            padding: 50px;
            color: #ffffff;
            text-align: center;
            font-size: 20px;
        }
        .box {
            width: 1000px;
        }
        
        tr:nth-child(even) {
            background: #CCC
        }
        
        tr:nth-child(odd) {
            background-color: #FAFAFA;
        }
        
        table {
            border: 1px solid #666;
            border-collapse: collapse;
        }
        
        td:hover {
            background-color: #f7750a;
        }
    </style>
    <title>查詢結果</title>
</head>

<body>
    <center>
        <br><br><br>
        <h1>烘焙蛋糕店訂購系統</h1>
        <h2>訂單資訊填寫</h2>
        
<?php
 
	header('Content-Type: text/html; charset=utf-8');
	error_reporting(0);
	require("connect.php");
    $store=$_POST['store'];
    $species=$_POST['species'];
    $size=$_POST['size'];
    $price=$_POST['price'];
    $t=$_POST['t'];
    $a=$_POST['a'];
    
	
	$sql_query_login="SELECT * FROM order_c";
    $result1=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");

    $sql_query="INSERT INTO order_c (store, species, size, price, t, a)
    VALUES ('$store', '$species', '$size', '$price', '$t', '$a')";

    $a = $db_link -> query ($sql_query);
    
?>

<form method="POST" action="order_c.php">
<b>
    <div class="aside">

        店家：<input type="text" name="store" /><br><br>
        蛋糕種類：<input type="text" name="species" /><br><br>
        尺寸：<input type="text" name="size" /><br><br>
        價錢：<input type="text" name="price" /><br><br>
        領貨時間：<input type="text" name="t" /><br><br>
        地址：<input type="text" name="a" />

    </div>
</b>
<input type="submit" value="新增訂單" style="width:120px;height:40px;"/>
<p></p>
</form>
                <p></p>
                <form method="POST" action="welcome.php">
                    <input type="submit" value="返回" style="width:120px;height:40px;"/>
                </form>
               
    </center>
    </body>

</html>