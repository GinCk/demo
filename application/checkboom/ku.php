<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpassword = '123456';
$conn = mysqli_connect($dbhost,$dbuser,$dbpassword);
if(! $conn)
{
    die('连接失败' . mysqli_error());
}
echo '连接成功<br/>';
$sql = 'CREATE DATABASE Db1';
$retval = mysqli_query($sql,$conn);
if(! $retval)
{
    die('连接错误:' . mysqli_error());
}
echo "数据库Db1创建成功";
mysqli_close($conn);
?>
