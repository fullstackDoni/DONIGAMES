<?php
session_start();
$ONLINE =false;
if(isset($_SESSION['NOW_USER'])){
    $ONLINE = true;
}
?>
