<?php
session_start();
$server = '103.8.124.9';
$user = 'kubergem_santu';
$pass = 'Santu86@';
$connect = mysql_connect($server,$user,$pass)
or die(mysql_error());

$selectdb = mysql_select_db('kubergem_gem_insert')
or die(mysql_error());

?>