<?php

function Login()
{ global $db;
    if($_POST)
    {
        $username = $_POST['Username'];
        $password = $_POST['Password'];


        $sorgu = $db->prepare("select * from Uye where Username = ? and Password = ? LIMIT 1");
        $sorgu->execute([$username, $password]);
        $say = $sorgu->rowCount();

        if($say>0)
        {
            $_SESSION["userBilgi"]="success";
            header("Location: Insert");
        }
    }

    ?>
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
?>
