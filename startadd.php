<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>新增履歷</title>
</head>

<link rel="stylesheet" type="text/css" href="startadd.css">

<body style="text-align:center">

<div id="title">
	<h1><p>履歷中心</p></h1>
</div>
<hr>

<div id=info>
	<a style="color:red">（所有欄位不可空白,若無填無）</a>
	<form name="form" method="post" action="add_finish.php" enctype="multipart/form-data">
		<p title="履歷名稱"><input type="text" name="myresume"></p>
		<p title="姓名"><input type="text" name="myname"></p>
		<p title="身分證字號"><input type="text" name="id"></p>
		<p title="連絡電話"><input type="text" name="telephone"></p>
		<p title="性別"><input type="radio" name="sex" value="boy">男性
						<input type="radio" name="sex" value="girl">女性
						<input type="radio" name="sex" value="notfond">不清楚</p>
		<p title="生日"><input type="date" name="date"></p>
		<p title="教育程度"><input type="text" name="education"></p>
		<p title="上一份工作經歷(若無請填無)"><input type="text" name="exp" style="width:150px"></p>
		<p title="信箱"><input type="text" name="mail"></p>
		<p title="自傳簡介"><textarea cols="50" rows="5" name="myinfo"></textarea></p>
		<p title="上傳頭貼"><input type="file" name="myfile"></p>
		<input type="submit" value="確認新增" style="background-color:#1E90FF">
		<input type="reset" value="清除重填" style="background-color:#1E90FF">
	</form>
</div>
 
<!-- <div id="footer">
	<p>履歷中心</p>
</div> -->
<a href="result.php">查看已新增履歷</a>
 
</body>
