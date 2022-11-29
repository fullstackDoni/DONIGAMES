<?php
$redirect = "profile.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['name']) && $_POST['developer_id']){
        require_once 'db.php';
        addGames($_POST['name'],$_POST['developer_id']);
        $redirect = "addgames.php?success";
    }
}
header("Location:$redirect");

?>
