<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$dbname = 'covid';

//create connection
$db = new PDO("mysql:host=" . $mysql_host . ";port=" . "3306" . ";dbname=" . $dbname, $mysql_user, $mysql_password);

session_start();
