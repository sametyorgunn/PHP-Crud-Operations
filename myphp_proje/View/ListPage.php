<?php
function Listele()
{ global $db;

    if($_SESSION["userBilgi"]="success")
    {
        $users = $db->query("select * from Uye order by id ASC")->fetchAll();
        foreach($users as $user) {
            ?>

            <a href="Update/<?=$user["Id"]?>"><li><?=$user["Username"]?></li></a><br>
            <?php
        }
        ?>



        <?php
    }

}
?>