<?php

$servername = 'localhost';
$uname = 'root';
$pass = '';
$db = 'gymnsb';

$con = mysqli_connect($servername, $uname, $pass, $db);

if (!$con) {
    exit('Connection Failed');
}

$sql = 'SELECT * FROM members';
$query = $con->query($sql);

echo "$query->num_rows";
?><!-- Visit codeastro.com for more projects -->