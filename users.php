
<?php
include('./auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
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
    width: 80%;
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

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style for static table data */
table tbody tr td {
    font-size: 14px;
}
.head{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.head a{
    border: 2px solid gray;
    padding: 5px 20px;
    border-radius: 10px;
    text-decoration: none;
}
.btn{
    color: #fff;
    border: none;
    padding: 4px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin: 3px;
}
.update{
    background: #007bff;
}
.delete{
    background: rgb(165, 54, 54);
}
.update:hover{
    background-color: #0056b3;
}
.delete:hover{
    background: red;
}
    </style>
</head>
<body>
    <div class="container">
       <div class="head">
       <a href="./register.php">New user</a>
        <h2>User List</h2>
        <a href="./logout.php">Logout</a>
       </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include("./db_connect.php");

            $sql = " SELECT id, username, email FROM users ";

            $results = mysqli_query($conn, $sql);
            if(mysqli_num_rows($results) >0){
                while( $row = mysqli_fetch_assoc($results)){

                    echo"
                    <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>
                     <a href ='update.php?id={$row['id']}' class = 'btn update'>update</a>
                     <a href = 'delete.php?id={$row['id']}' class = 'btn delete' >delete</a>
                     </td>
                </tr>
                    ";
                }
            } else {
                echo "<tr> <td colspan = '3'> 0 reults</td</tr>";
            }

            ?>

                
            </tbody>
        </table>
    </div>
</body>
</html>
