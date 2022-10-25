<?php

function Insert()
{global $db;
    if($_SESSION["userBilgi"]=="success")
    {

    if($_POST)
    {
        $user = $_POST["Username"];
        $pass = $_POST["Password"];

        $result = $db->exec("
        INSERT INTO Uye SET
        Username = '$user',
        Password = '$pass'
       
    ");
    }

?>
         <h1>insert</h1>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="Username" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php
    }
    else
    {
        header("Location: Login");
    }
}
?>
