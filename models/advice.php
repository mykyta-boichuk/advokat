<?php
require_once ("../admin/database.php");

    if (isset($_POST['name'])){
            $pdo->exec("INSERT INTO `advice` (`name`, `phone`) VALUES ('".$_POST["name"]."', '".$_POST["phone"]."');");?>

            <script type="text/javascript">
                window.location="http://advokat/";
            </script>

        <?php }

