<?php

$db_username = 'telquesttest';
$db_password = 'admin1234';
$db_name = 'telquesttest';
$db_host = 'mysql.officesuiteforrent.com';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
$result = $mysqli->query("SELECT * from links");


    $obj = $result->fetch_object();
            echo "$obj->url";
?> 