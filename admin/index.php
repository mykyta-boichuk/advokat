<?php
session_start();
if ((!$_SESSION["auth"])){?>
    <script type="text/javascript">
        window.location="http://advokat-piligrim.com/admin/admin_security.php";
    </script>

    <?php
}
    require_once ("database.php");
if(isset($_POST["news"])) {

    print_r('very good');
    $pdo->exec("INSERT INTO `news` ( `date`, `title`, `text_news`) VALUES ( '2019-04-13', '".$_POST["title"]."', '".$_POST["news"]."');");?>

    <script type="text/javascript">
        window.location="http://advokat-piligrim.com/admin/index.php";
    </script>

<?php }
if(isset($_POST["edit-title"])) {

    print_r($_POST);
    $pdo->exec("UPDATE `news` SET `date` = '".$_POST["edit-date"]."', `title` = '".$_POST["edit-title"]."', `text_news` = '".$_POST["edit-news"]."' WHERE `news`.`id_news` = '".$_POST["edit-id"]."';");?>

    <script type="text/javascript">
        window.location="http://advokat-piligrim.com/admin/index.php";
    </script>

<?php }
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pdo->exec("DELETE FROM `news` WHERE `news`.`id_news` = '".$id."'");



?>
    <script type="text/javascript">
        window.location="http://advokat-piligrim.com/admin/index.php";
    </script>
<?php }

$sql_viewed = "SELECT `viewed` FROM advice WHERE `advice`.`viewed` = '0'";
$rs_viewed = $pdo->query($sql_viewed);
$rows_viewed = $rs_viewed->fetchAll(PDO::FETCH_ASSOC);

$count_news_advice = count($rows_viewed);



?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>admin</title>
    <link rel="stylesheet" href="admin-style7.css">
</head>
<body>
<header><div class="logo"><img src="../images/logo1.png" width="80px"><h1>Панель администратора</h1></div></header>
<div class="block-left">
    <ul class="admin-menu">
    <li><a class="button order" href="index.php"> НОВОСТИ </a></li>
        <ul>
            <li>
                <a class="button add">ДОБАВИТЬ НОВОСТЬ</a>



                <form method="post"  class="formAdd"  action="index.php">
                    <span>Заголовок</span><input type="text" name="title"  >
                    <span>Текст новости</span><textarea cols="30" rows="30" name="news"   class=""></textarea>
                    <input class="submit-add" type="submit" name="buttonAdd" value="Добавить">
                </form>
            </li>
        </ul>


    <li>
        <a class="button order" href="index.php?table=advice"> ЗАКАЗЫ(<?=$count_news_advice?>) </a>
    </li>

    </ul>
</div>
<div class="block-right">
    <?php if($_GET['table'] === 'advice'){
        include ('advice_table.php');
    } else {?>
    <table class="zebra">
<tr>
    <th>
        id
    </th>
    <th>
        data
    </th>
    <th>
        title
    </th>
    <th>
        text
    </th>
    <th>

    </th>
</tr>

    <?php

    foreach ($rows as $key) {?>
        <form name="edit-form" method="post">
        <tr class="row">
            <td >
                <div class="id column"><?=$key["id_news"]?></div>
                <input class="edit-form row" type="text" name="edit-id" value="<?=$key["id_news"] ?>" readonly>
            </td>
            <td>
                <div class="date column" ><?=$key["date"]?></div>
                <input class="edit-form row" type="date" name="edit-date" value="<?=$key["date"]?>">
            </td>
            <td>
                <div class="title column"><?=$key["title"]?></div>
                <input class="edit-form" type="text" name="edit-title" value="<?=$key["title"]?>">
            </td>
            <td >
                <div class="text-news column"><?=$key["text_news"]?></div>
                <textarea class="edit-form" name="edit-news" cols="60" rows="5" ><?=$key["text_news"]?></textarea>
            </td>
            <td>
                <input class="edit-form" type="submit" value="Редактировать">
                <div >
                    <a class="edit button-table" >
                        <img class="edit" src="../images/edit.png" width="20px">
                    </a>
                    <a class="delete button-table">
                        <img class="delete" src="../images/delete-news.png" width="20px">
                    </a>
                </div>
            </td>

        </tr>
        </form>
        <?php

    }
    ?>
</table>
    <?php }?>
</div>
<script>
    let add = document.querySelector(".add");
    let formAdd = document.querySelector(".formAdd");
    let carentStyle = false;
    add.onclick = function () {
        if (carentStyle === false) {
            formAdd.style.display = "block";
            carentStyle = true;
        }
        else {formAdd.style.display = "none"
            carentStyle = false   };
    }

    const table = document.querySelector("table");



    table.onclick = function (event) {

        if(event.target.className === 'edit'){
            let elem = event.target;

            while (elem.tagName !== 'TR') {
                console.log(elem.parentElement);
                elem = elem.parentElement
            }

            const columns = elem.querySelectorAll(".column");
            const editColumns = elem.querySelectorAll(".edit-form");

            for (let column of columns) {
                column.style.display = "none";
            }
            for (let editColumn of editColumns) {
                editColumn.style.display = "block";
            }

    }
        else if(event.target.className === 'delete'){
            let elem = event.target;
            while (elem.tagName !== 'TR') {
                console.log(elem.parentElement);
                elem = elem.parentElement
            }
            const id = elem.childNodes[1].innerText;
            window.location="http://advokat-piligrim.com/admin/index.php?id="+id;



        }
        else if ((event.target.className === 'check-viewed')){
            let elem = event.target;

            while (elem.tagName !== 'TR') {
                console.log(elem.parentElement);
                elem = elem.parentElement
            }
            const id = elem.childNodes[1].innerText;
            window.location="index.php?table=advice&id-advice="+id;

        }
    }



</script>



</body>
</html>

