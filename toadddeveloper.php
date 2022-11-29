<?php

$redirect = "adddeveloper.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

    require_once 'db.php';

    if(isset($_POST['name']) && isset($_POST['izdatel'])){

        adddeveloper($_POST['name'], $_POST['izdatel']);
        $redirect = "adddeveloper.php?success";
    }

}

header("Location:$redirect");

?>