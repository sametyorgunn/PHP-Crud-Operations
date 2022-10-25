<?php
function Update()
{global $db,$menu;

    if($_SESSION["userBilgi"]=="success")
    {
        $Id=$menu[3];
        if($_POST)
        {
        $user = $_POST["Username"];
        $pass = $_POST["Password"];

        $result = $db->exec("
        UPDATE Uye SET
        Username = '$user',
        Password = '$pass'
        WHERE id = $Id
    
    
        
    ");

        }
        $users = $db->query("select * from Uye where Id=$Id")->fetch();
    ?>
        <h1>Update</h1>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" value="<?=$users["Username"]?>" name="Username" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="Password" class="form-control" value="<?=$users["Password"]?>" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php }else
    {
        header("Location: Login");
    }
}?>