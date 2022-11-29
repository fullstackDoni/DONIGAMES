<?php
$redirect = "index.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['full_name'])){
            $redirect = "register.php?usererror";
            require_once 'db.php';
            $user = getUser($_POST['email']);
            if($user == null);
                $redirect = "register.php?passworderror";
                if($_POST['password'] === $_POST['re_password']){
                    addUser(htmlspecialchars($_POST['email']),sha1($_POST['password']),htmlspecialchars($_POST['full_name']));
                    $redirect = "register.php?success";
                }
    }

}
header("Location:$redirect");
?>