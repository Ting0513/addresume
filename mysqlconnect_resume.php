<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
    //PDO資料庫連線
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "addresume";

	try {
		//建立連線
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

		//設定錯誤訊息
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "";

		//設定編碼
		$conn->exec("set names utf8");

		//撰寫SQL指令
		$sql = "select*from resumeinfo";

		//執行SQL指令
		$result = $conn->query($sql);
        $stmt = $result->fetchAll(PDO::FETCH_ASSOC);

		//輸出每一筆資料
		/*foreach ($stmt as $row) {
			echo "ID：" . $row["member_id"] . "，Name：" . $row["member_name"] . "<br>";
        }
        
        //執行SQL指令
        $sth = $conn->prepare($sql);
        $sth->bindParam(":x", $x);
        $sth->bindParam(":y", $y);
        $sth->execute() or exit(var_dump($sth->errorInfo()));*/	
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	//關閉連線
	$conn = null;
 ?>	