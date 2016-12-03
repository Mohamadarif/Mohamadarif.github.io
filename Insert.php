<?php

class MyDB extends SQLite3
{
	function _construct()
	{
		$this->open('HELPDESK.db');
	}
}


$db = new MyDB('HELPDESK.db'); 
if(!$db){
	echo $db->lastErrorMsg(Error);
}else{
	//echo "Opened database successfully\n";
} 


$name = $_POST['Name'];
$ic = $_POST['IC'];
$department = $_POST['Department'];
$problem = $_POST['Problem'];

$sql1 =<<<EOF

	CREATE TABLE HELPDESK(
   ID INTEGER PRIMARY KEY AUTOINCREMENT  ,
   NAME           TEXT      NOT NULL,
   IC           INT       NOT NULL,
   DEPARTMENT        CHAR(50),
   PROBLEM         CHAR(50)
);
EOF;

	$ret = $db->exec($sql1);
	if($ret)
	{
		//echo "Table created successfully\n";
		echo $db->lastErrorMsg();
	}else
	{
		//echo " Table created successfully\n";
	}


$sql =<<<EOF

	INSERT  INTO HELPDESK (NAME,IC,DEPARTMENT,PROBLEM)
	VALUES('$name','$ic','$department','$problem');
EOF;

	$ret = $db->exec($sql);
	if(!$ret)
	{
		echo $db->lastErrorMsg();
	}else{
		echo " Records created successfully\n";
}
	$db->close();


?>
<html>
<style type="text/css">
body {
	background-color: #566573;
}
</style>
<body>
<p><a href="Home.html">HOME</a></p>
</body>
</html>