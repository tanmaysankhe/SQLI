<?php require_once 'header.php' ?>


<p>Search Result:<br>
    
    <?php
    

    $con = mysqli_connect('127.0.0.1', 'root', '', 'sqli');

    $query = sprintf("SELECT * FROM books WHERE user = '%s';", get_current_user());
    $result = mysqli_query($con, $query);

     while (($row = mysqli_fetch_row($result)) != null)
    {
        printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr><br>", $row[0], $row[1], $row[2]);
    }
    
    
    echo 'Current: ' . get_current_user();
    ?>



</p>