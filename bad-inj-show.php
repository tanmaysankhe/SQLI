<?php require_once 'header.php' ?>

<p>This is Unsafe Bank and you just logged in:<br>
<?php
    
    $email = $_POST['email'];
    $pas = $_POST['password'];
    
    $dsn = 'mysql:dbname=hello;host=127.0.0.1';
    $user = 'root';
    $password = '';
    try {
        $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

$con = mysqli_connect('127.0.0.1', 'root', '', 'hello');
//$sql = "SELECT * FROM my_users where user_email='".$email."'" ;

//1' OR '1'='1

//--------------------IMP--------------------------------
$email =  mysqli_real_escape_string($con, $_POST['email']);
$pas =  mysqli_real_escape_string($con, $_POST['password']);


$sql = sprintf("SELECT * FROM my_users WHERE user_email = '%s' AND user_pass = '%s';" , $email,$pas);

//$sql = "select * from my_users where user_email = ? and user_pass = ? ";

//$sql=mysqli_prepare($conn, "select * from my_users where user_email = ? and user_pass = ? ");   
//$sql->bind_Param("ss", $email, $pas);

    $stmt = $conn->prepare($sql);
//    $stmt->bind_Param("ss", $email, $pas);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($result as $row) {
//        echo $row['user_email'] . ": " . $row['display_name'] . " <br>";
        echo "<p>Welcome " .$row['display_name'] . "<br> Your Account Balance is: " . $row['user_balance'] . "<br>" ;
    }
?>
</p>