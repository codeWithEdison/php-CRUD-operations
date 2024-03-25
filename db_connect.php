
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myshop";


// crete connection variable using mysqli_connect procedule

$conn = mysqli_connect($servername, $username, $password, $dbname);
// crete connection variable using mysqli_connect object oriented

// $connect =  new mysqli($servername, $username, $password, $dbname);

//check connection status in mysqli_connect procedure
if(!$conn){
    die("connection failled" .mysqli_connect_error());
    exit();
}
// if($connect -> connect_error){
//     die("connection failled" .$connect -> connect_error);
// }
// echo "connection successfully";  

?>

