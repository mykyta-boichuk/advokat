<?php
session_start();
require_once ("../database.php");
$log=$rowssecurity[0][log];
$passw=$rowsecurity[0][passw];
?>
<html>
<head>
    <link rel="stylesheet" href="admin_security.css">
    <title>Админка</title>
</head>
<body>
<div class="form" style="border-color: burlywood" >
    <form method="post">
        <p>login:</p><br/>
        <input name="log" type="text"><br/>
        <p>password:</p><br/>
        <input name="pass" type="password"><br/>
        <input class="button" type="submit" name="button" style="cursor:pointer">
    </form>
</div>
</body>
</html>
<?php
if ($_POST["button"]){
    if (($log===$_POST["log"]) and ($passw===$_POST["passw"]))
    {
        $_SESSION["auth"]=$log;?>
        <script type="text/javascript">
        window.location="http://advokat-piligrim.com/admin/";
        </script>
<?php
    }
    else{ ?>
<p> Неверно введен пароль </p>
<?php
}}
?>