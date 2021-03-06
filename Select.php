<?php
class MyDB extends SQLite3
{
function __construct()
{
$ this->open('test.db');
}
}
$ db = new MyDB();
if(!$ db){
echo $ db->lastErrorMsg();
} else {
echo "Opened database successfully\n";
}
$ sql =<<<EOF
SELECT rowid,* from HEPLDESK;
EOF;
$ ret = $ db->query($ sql);
while($ row = $ ret->fetchArray(SQLITE3_ASSOC) ){
echo "ID = ". $ row['rowid'] . "\n";
echo "NAME = ". $ row['NAME'] ."\n";
echo "ADDRESS = ". $ row['DEPARTMENT'] ."\n";
echo "SALARY = ".$ row['PROBLEM'] ."\n\n";
}
echo "Operation done successfully\n";
$ db->close();
?>