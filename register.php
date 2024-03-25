<?php
include('./auth.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] , a{
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    width: 50%;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
#message{
    width: 70%;
    background: green;
    color: #fff;
    font-size: large;
    transition: ease-in-out;
    padding: 5px 20px;
    border-radius: 20px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <?php
        if(isset($_POST['register'])){
            include("./db_connect.php");
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

            if(mysqli_query($conn, $sql)){
                // echo "<p id ='message'> 
                // new record addede succesfully
                // </p>";
                header('location: users.php');
                exit();
            } else {
                echo " ERROR" . $sql . "<br/>" .  mysqli_error($conn) ;
            }
        }
        ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <button type="submit" name="register">Register</button>
                <a href="./users.php" style="background-color: red;">cancel</a>
            </div>
        </form>


    </div>
</body>
</html>
