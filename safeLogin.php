<?php require_once 'header.php' ?>

    
<head>
    <link rel="stylesheet" type="text/css" href="w3css.css"></link>
</head>
    <body style="background-color: grey">

         <div class="w3-bar w3-border w3-grey">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Buy</a>
  <!-- <a href="#" class="w3-bar-item w3-button">Link 2</a> -->
  <a href="bad-inj.php" class="w3-bar-item w3-button w3-dark-grey w3-right">Logout</a>
</div> 
 <table class="w3-table-all w3-hoverable" style="margin: 10px"> 
    <?php
    
    $username = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'my_dbname');

    $query = sprintf("SELECT * FROM my_users WHERE user_email = '%s' AND (user_pass = '%s');",
                      mysqli_real_escape_string($con, $username),
                     mysqli_real_escape_string($con, $password));
                //    $username,
              //   $password);
    // $query = "SELECT * FROM my_users WHERE user_email =". $username ."  AND user_pass = ".$password .";;";
    $result = mysqli_query($con, $query);
    echo "<table class='w3-table-all w3-hoverable' style='margin: 10px'>";
    if ($result-> num_rows > 0){
        foreach ($result as $row) {
       echo "<tr><th>Name</th><td>".$row['display_name']."</td></tr>";
       echo "<tr><th>Email</th><td>".$row['user_email']."</td></tr>";
       echo "<tr><th>Books owned</th><td>".$row['num_books']."</td></tr>";
       echo "<tr><th>Contact</th><td>".$row['contact']."</td></tr>";
       echo "<tr><th>Balance($)</th><td>".$row['bank_bal']."</td></tr>";

        }
    echo "</table>";
    }
    
    else{
    echo "Wrong username/password combination.";
    }
    
    ?>
</body>