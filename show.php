<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="startadd2.css">
<title>目前新增履歷</title>
<body style="text-align:center">
<?php
include("mysqlconnect_resume.php");
// echo '<a href="logout.php">登出</a>  <br><br>';


// echo '<a href="register.php">新增</a>    ';
// echo '<a href="update.php">修改</a>    ';
// echo '<a href="delete.php">刪除</a>  <br><br>';

$connection_mysql=mysqli_connect("localhost","root","","addresume");
mysqli_query($connection_mysql,"set character set 'utf8'");
$con=mysqli_select_db($connection_mysql,"addresume");
$sql = "select * from  resumeinfo";
$result = mysqli_query($connection_mysql,$sql);

while($row = mysqli_fetch_row($result))
{
    if($row[0]!=null){
    	$destination="upload/".$row[10];
    	echo "<div style='text-align:center'>";

    	echo "<b><font size=6>$row[0]</font></b>". "<br><br>";
    	echo "<img src=".$destination.">" . "<br><br>";
    	echo "<b><font size=5>$row[1]</font></b>". "<br><br>";
        echo '<b>身分證字號:</b>'."<hr style='width:150px'>". $row[2]. "<br><br>";
        echo '<b>電話:</b>'. "<hr style='width:150px'>". $row[3]. "<br><br>";
        echo '<b>性別:</b>'. "<hr style='width:150px'>". $row[4]. "<br><br>";
        echo '<b>生日:</b>'. "<hr style='width:150px'>". $row[5]. "<br><br>";
        echo '<b>教育程度:</b>'. "<hr style='width:150px'>". $row[6]. "<br><br>";
        echo '<b>上一份工作經歷:</b>'. "<hr style='width:150px'>". $row[7]. "<br><br>";
        echo '<b>信箱:</b>'. "<hr style='width:150px'>". $row[8]. "<br><br>";
        echo '<b>自傳簡介:</b>'. "<hr style='width:150px'>". $row[9]. "<hr><br>";
    
        echo "</div>";
    }
}

echo '<a href="show.php">查看已新增履歷清單</a>'.'&nbsp&nbsp&nbsp' ;

?>
</body>