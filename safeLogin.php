<?php require_once 'header.php' ?>

<p>This is Unsafe Bank 2 and you just logged in:<br>
    
    <?php
    
    $username = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'hello');

    $query = sprintf("SELECT * FROM my_users WHERE user_email = '%s' AND user_pass = '%s';",
                     mysqli_real_escape_string($con, $username),
                     mysqli_real_escape_string($con, $password));
//    $query = sprintf("SELECT * FROM my_users");
    $result = mysqli_query($con, $query);

    if ($result->num_rows > 0){
    echo "Authenticated as " . $username;
    }
    else{
    echo "Wrong username/password combination.";
    }
    
    ?>
    
</p>    