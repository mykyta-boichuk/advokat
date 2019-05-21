<?php
    require_once ("database.php");

    if (isset($_GET['id-advice'] )){

        $viewed = $pdo->query("SELECT `viewed` FROM  `advice` WHERE `id` = '".$_GET['id-advice']."'");
        $result =  $viewed->fetch();
        if($result[0] === '0'){
            $result[0] = 1;
        }
        else{
            $result[0] = 0;
        }
        $pdo->exec("UPDATE `advice` SET `viewed` = '".$result[0]."' WHERE `advice`.`id` = '".$_GET["id-advice"]."';");?>

        <script type="text/javascript">

            window.location="http://advokat-piligrim.com/admin/index.php?table=advice";
        </script>

    <?php }
?>

<table class="zebra" style="table-layout: fixed">
    <tr>
        <th>
            id
        </th>
        <th>
            Имя
        </th>
        <th>
            Телефон
        </th>
        <th>
            Просмотрено
        </th>

    </tr>

    <?php

    foreach ($rows_advice as $key) {?>
        <form name="edit-form" method="post">
            <tr class="row">
                <td>
                    <div class="id column"><?=$key["id"]?></div>
                </td>
                <td>
                    <div class="date column" ><?=$key["name"]?></div>

                </td>
                <td>
                    <div class="title column"><?=$key["phone"]?></div>

                </td>
                <td >
                    <div class="text-news column"><input type="checkbox" class="check-viewed" <?php if($key["viewed"] === '1'){?> checked <?PHP } ?>> </div>

                </td>
            </tr>
        </form>
        <?php

    }
    ?>
</table>
<script>

</script>