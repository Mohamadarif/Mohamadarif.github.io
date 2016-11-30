<?php
class MyDB extends SQLite3
{
function __construct()
{
$this->open('HELPDESK.db');
}
}
$db = new MyDB();
if(!$db){
echo $db->lastErrorMsg();
} else {
//echo "Opened database successfully\n";
}

$ID = $_POST['id'];

$sql =<<<EOF
DELETE from HELPDESK where ID = '$ID';
EOF;
$ret = $db->exec($sql);
if(!$ret){
echo $db->lastErrorMsg();
} else {
echo $db->changes(), " Record deleted successfully\n";
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