<?php

include"class.Connect.php";

echo("***");

$table='REPORTS';

$con->query("CREATE TABLE IF NOT EXISTS $table(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id))");
$con->query("ALTER TABLE $table ADD NAME TEXT NOT NULL");
$con->query("ALTER TABLE $table ADD TITLE TEXT NOT NULL");
$con->query("ALTER TABLE $table ADD CONTENT TEXT NOT NULL");
$con->query("ALTER TABLE $table ADD DATE DATETIME NOT NULL");
$con->query("ALTER TABLE $table ADD COMNUM INTEGER NOT NULL");
$con->query("ALTER TABLE $table ADD LAST_COMMENT_DATE DATETIME NOT NULL");

echo ("Table REPORTS has been created.");

$table2='COMMENTS';

$con->query("CREATE TABLE IF NOT EXISTS $table2(ID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id))");
$con->query("ALTER TABLE $table2 ADD REPORT_ID varchar(50) NOT NULL");
$con->query("ALTER TABLE $table2 ADD NAME varchar(50) NOT NULL");
$con->query("ALTER TABLE $table2 ADD CONTENT text NOT NULL");
$con->query("ALTER TABLE $table2 ADD DATE DATETIME NOT NULL");


echo ("Table COMMENTS has been created.");

$con->close();

?>
