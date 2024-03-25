<?php
require('./auth.php');

include('./db_connect.php');
$id = $_REQUEST['id'];
$sql = " DELETE  FROM users WHERE id = '$id'";
if(mysqli_query($conn, $sql)){
    header('location: ./users.php');
    exit();
    mysqli_close($conn);
} else{
    echo'error in  deleting user ' ;
}
?>