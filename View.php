<body>
<p align="center"><a href="Home.html">HOME</a></p>

</body>
 

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


$sql =<<<EOF
SELECT * from helpdesk;
EOF;


//if($ret->$num_rows > 0)

//$k = ($i=0;$i<row;i++);
//$No= ($i+1);
$ret = $db->query($sql);
{
	echo "<table><tr><th>ID</th><th>Name</th><th>IC</th><th>Department</th><th>Problem</th></tr>";
while($row = $ret->fetchArray(SQLITE3_ASSOC) )
	//$i = 0;
//$No= ($i+1);


{
echo "<tr><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['IC']."</td><td>".$row['DEPARTMENT']."</td><td>".$row['PROBLEM']."</td></tr>";

}

}
echo "</table>";



//echo "Operation done successfully\n";
$db->close();

?>

<html>
<style>


body {
    background-color: #566573;
}


table {
	color:white;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 2px solid grey;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #5DADE2;
}



</style>
</html>
