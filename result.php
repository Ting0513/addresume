<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="startadd.css">
<title>履歷清單</title>
<?php
include("mysqlconnect_resume.php");
 

$connection_mysql=mysqli_connect("localhost","root","","addresume");
mysqli_query($connection_mysql,"set character set 'utf8'");
$con=mysqli_select_db($connection_mysql,"addresume");
$sql = "select * from  resumeinfo";
$result = mysqli_query($connection_mysql,$sql);

 
 
echo "<div style='text-align:center'>";
echo "<h1>目前已新增履歷</h1>"."<hr>";

while($row = mysqli_fetch_row($result)){
    if($row[0]!=null){
        echo $row[0]."<br><br>";
    }
}

echo '<a href="show.php">查看履歷</a>'.'&nbsp&nbsp&nbsp' ;
echo '<a href="startadd.php">新增履歷</a><br>' ;
echo "</div>";

?>