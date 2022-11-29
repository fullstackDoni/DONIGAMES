<?php

$redirect = "profile.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

    require_once 'db.php';

    if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['developer_name']) && isset($_POST['izdatel'])){

        $game = updategames($_POST['id']);

        if($game!=null){

            updategames($_POST['id'], $_POST['name'], $_POST['developer_name'],$_POST['izdatel']);

            $redirect = "details.php?id=".$_POST['id']."&success";

        }


    }

}

header("Location:$redirect");

?>