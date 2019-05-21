<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$pdo = new PDO("mysql:dbname=u534506938_db;host=localhost;charset=utf8","u534506938_user","Persik309");
$sql = "SELECT * FROM news";
$rs = $pdo->query($sql);

$rows = $rs->fetchAll(PDO::FETCH_ASSOC);
$sqlsecurity = "SELECT * FROM admin_security";
$rssecurity = $pdo->query($sqlsecurity);
$rowssecurity = $rssecurity->fetchAll(PDO::FETCH_ASSOC);
?>
</html>
