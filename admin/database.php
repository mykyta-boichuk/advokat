<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$pdo = new PDO("mysql:dbname=u534506938_db;host=localhost;charset=utf8","u534506938_user","Persik309");
$sgl = "SELECT * FROM news";
$rs = $pdo->query($sgl);
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);

$sql_advice = "SELECT * FROM advice";
$rs_advice = $pdo->query($sql_advice);
$rows_advice = $rs_advice->fetchAll(PDO::FETCH_ASSOC);

?>
</html>
