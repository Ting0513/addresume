<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysqlconnect_resume.php");

$myresume = $_POST['myresume'];
$name = $_POST['myname'];
$id = $_POST['id'];
$telephone = $_POST['telephone'];
$sex = $_POST['sex'];
$date = $_POST['date'];
$edu = $_POST['education'];
$exp = $_POST['exp'];
$mail = $_POST['mail'];
$myinfo = $_POST['myinfo'];
$myinfo = str_replace("\n", "<br />\n", $myinfo);
$file = $_FILES['myfile']["name"];

$connection_mysql=mysqli_connect("localhost","root","","addresume");
mysqli_query($connection_mysql,"SET NAMES 'utf8'");
$con=mysqli_select_db($connection_mysql,"addresume");
 
 
if($myresume!=null && $name!=null && $id!=null && $telephone!=null && $sex!=null 
   && $date!=null && $edu!=null && $exp!=null && $mail!=null && $myinfo!=null && $file!=null)
{
        $sql = "insert into resumeinfo (resume_name, username, id, telephone, sex, date, education, exp, mail, myinfo, img) 
                values ('$myresume', '$name', '$id', '$telephone', '$sex' , '$date' , '$edu' , '$exp' , '$mail' , '$myinfo' , '$file')";
        if(mysqli_query($connection_mysql,$sql))
        {
                echo '<h1>新增成功!</h1>';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=result.php>';
        }
        else
        {
                echo '<h1>新增失敗!</h1>'."<br>";
                echo '<h1>欄位長度有錯誤請檢查!</h1>';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=startadd.php>';
        }
}
else
{
        echo '<h1>有空白未填寫!</h1>';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=startadd.php>';
}

if (isset($_FILES["myfile"])) {
                if ($_FILES["myfile"]["error"] > 0) {
                        echo "頭貼上傳錯誤代碼：" . $_FILES["myfile"]["error"];
                } else {
                        echo "";
                        if (file_exists("upload" . $_FILES["myfile"]["name"])) {
                                echo "<br>檔案已存在，請勿上傳相同檔案！<br><br>";
                        } else {
                                move_uploaded_file($_FILES["myfile"]["tmp_name"],"upload/". $_FILES["myfile"]["name"]);
                                // echo "<br>上傳成功！<br><br>";
                        }
                }
        }
?>