<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'demo5';

$conn = mysqli_connect($host,$user,$pass,$db);
if($conn)
{
    echo'success..';
}
?>