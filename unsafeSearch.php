<?php require_once 'header.php' ?>


<p>Search Result:<br>
    
    <?php
    
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];

    $checked = false;
    $checked = (isset($_POST['trouble']))?true:false;

    $con = mysqli_connect('127.0.0.1', 'root', '', 'sqli');

    $inter = get_current_user();

    if ( $checked ) {
//        echo 'if';
        $query = sprintf("SELECT * FROM books WHERE user = '%s';", $inter ); 
        
    }
    else{
//        echo 'else<br>';
        $query = sprintf("SELECT * FROM books WHERE title = '%s' AND author = '%s' ;", $book_title, $book_author);
//        $query = sprintf("Select * from users; ");
    
    }
    
    if($query != null){
        $result = mysqli_query($con, $query);
        while (($row = mysqli_fetch_row($result)) != null){
//        printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr><br>", $row[0], $row[1], $row[2]);
         printf("%s&nbsp; &nbsp; %s&nbsp; &nbsp; %s</td></tr><br>", $row[0], $row[1], $row[2]);
        }
    }
     
    
    //' or '1' = '1
    echo 'Current: ' . get_current_user();
    ?>



</p>