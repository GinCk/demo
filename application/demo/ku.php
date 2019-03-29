<html>
<head>
    <meta charset="utf-8">
    <title>创建myqal数据库</title>
</head>
<body>
<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpassword = '123456';
$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
if(! $conn)
{
    die('连接失败' . mysql_error());
}
echo '连接成功<br/>';
$sql = 'CREATE DATABASE Db1';
$retval = mysql_query($sql,$conn);
if(! $retval)
{
    die('连接错误:' . mysql_error());
}
echo "数据库Db1创建成功";
mysql_close($conn);
?>
</body>
</html>