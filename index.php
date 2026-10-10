<?php include "connection.php" 
?>
!<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Pure PHP MYSQL App</title>
</head>
<style>
    button {
        background-color: skyblue;
    }
    h1 {
        text-align: center;        
        text                                                                             
    }
  

    .container {
        margin: 15px;
        border: 1px solid black;
        width: 300px;
    }
</style>
<body>
    <h1> User Management System</h1>
    <div class = "container">
    <h2> Add New User</h2>
    <form action = "" method = "POST">
        <div class = "mb-3">
    
    <Label for = "username"> Full Name</Label><br>
    <Input type = "text" name = "username" placeholder="Enter Full Name"></br>
    <label for = "email"> Email Address</label><br>
    <input type = "text" name = "email" placeholder="Enter Email Address"><br>
    <button name = "Submit">Submit></button>
    </form>
    </div>
    <br>
    <br>
    <thread>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Joined</th>
        <th>Action</th>
    </thread>

    <?php
    if (isset($_POST["fulname"])) {
        fullname($_POST["fullname"]);
        email($_POST["email"]);

    $squery = $conn -> query ("INSERT INTO users (name, email) values ('$fullname', '$email')");
    }
    ?>

    
    </body>
</html>