

<?php
include('./auth.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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

button[type="submit"], a {
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

    </style>
</head>
<body>
    <div class="container">
        <h2>Update User</h2>
        <?php
        include('./db_connect.php');
        $id = $_REQUEST['id'];

        $sql = "SELECT username, password, email FROM users WHERE id = $id ";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0){
           $row = mysqli_fetch_assoc($query);
           $username =$row['username'];
           $email = $row['email'];
           $password = $row['password'];
         echo "
        
        <form acttion= 'update_process.php' method='post'>
            <input type='hidden' name='id' value='{$id}'> 
            <div class='form-group'>
                <label for='username'>Username:</label>
                <input type='text' id='username' name='username' value={$username} required>
            </div>
            <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' id='email' name='email' value={$email}> 
            </div>
            <div class='form-group'>
                <label for='password'>password:</label>
                <input type='text' id='email' name='password' value={$password}> 
            </div>
            <div class='form-group'>
                <button type='submit'>Update</button>
                <a href='./users.php' style='background-color: red;'>cancel</a>
            </div>
        </form>
        ";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $sql = "UPDATE users SET username = '$username', password = '$password', email = '$email' WHERE id =$id ";
            if(mysqli_query($conn,$sql)){
                // echo "<script>alert('user updated sucessfully!')</script>";  
                header('location: users.php');
                exit();

            }
            else {
                echo "update failled " ;
            }
                }

        } else{
            echo "no user found";
        }
        ?>
    </div>
</body>
</html>

