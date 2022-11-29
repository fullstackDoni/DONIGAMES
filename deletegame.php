<?php

$redirect = "profile.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

    require_once 'db.php';

    if(isset($_POST['id'])){

        $game = getGames($_POST['id']);

        if($game!=null){

            deleteGames($_POST['id']);

        }


    }

}

header("Location:$redirect");

?>