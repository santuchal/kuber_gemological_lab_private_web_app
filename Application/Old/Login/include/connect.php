<?php
session_start();
$server = 'localhost';
$user = 'root';
$pass = '';
$connect = mysql_connect($server,$user,$pass)
or die(mysql_error());

$selectdb = mysql_select_db('kubergem_gem_insert')
or die(mysql_error());

?>