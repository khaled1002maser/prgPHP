<?php
$host='localhost';
$username='root';
$password='';

$db='aqsa';
//connect to db
$con=new mysqli($host,$username,$password,$db);
if($con->connect_error)
echo 'error';
