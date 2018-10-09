<?php require_once 'header.php' ?>

<p>This is Unsafe Bank 2 and you just logged in:<br>
    
    <?php
    
    $username = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'hello');

//    $query = sprintf("SELECT * FROM my_users WHERE user_email = '%s' AND user_pass = '%s';", $username, $password);
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
<p align="center">Search your book here</p>
<form action="unsafeSearch.php" method="post">
<p align="center">
Book Title: <input type="text" name="book_title" size="40">  
</p>

<p align="center">
Book Author:      <input type="text" name="book_author" size="40">  
<br> 
<label for="public0"><input type="radio" name="trouble" id="public0" value="radio1" /> All1</label>    
    
<br>    
<input align="center" type="submit" value="Search">
    
</p>

<?php
    echo 'Current: ' . get_current_user();
?>
    
</form>
<!--

<form action="unsafeAll.php" method="post">
    <input align="center" type="submit" value="All">
</form>
-->
