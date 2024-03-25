<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: login.php?error_message ='please login first'");
    exit();
}
?>