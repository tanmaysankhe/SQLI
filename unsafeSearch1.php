<?php require_once 'header.php' ?>

<p>Search Result:<br>
    
    <?php
    
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'sqli');

    $query = sprintf("SELECT * FROM books WHERE title = '%s' AND author = '%s' ;", $book_title, $book_author);

    if ($query != null){
    $result = mysqli_query($con, $query);

        while (($row = mysqli_fetch_row($result)) != null){
            printf("%s&nbsp; &nbsp;%s&nbsp; &nbsp;%s <br>", $row[0], $row[1], $row[2]);
        }
    }
    ?>
</p>