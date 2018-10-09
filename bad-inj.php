<?php require_once 'header.php' ?>


<head>
	<link rel="stylesheet" type="text/css" href="w3css.css"></link>
</head>
	<body style="background-image: url('backg.jpg'); height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
	<p align="center" style="font-size: 70px; color: white;">Welcome To The Book Bank</p>
<div class=" w3-container w3-center" style="margin-left: 30%" >
 <div class="w3-card-4 w3-white" style="width: 50%">
  <img src="banner-books.png" alt="Norway" style="width: 100%">
  <!-- <div class="w3-container w3-center"> -->
    <div class="w3-card w3-white">
		<form action="safeLogin.php" method="post">
		<p align="center">
		<input class="w3-button w3-white w3-border w3-border-red w3-round-large" type="text" name="email" size="40" placeholder="Email">  
		</p>

		<p align="center">
		<input class="w3-button w3-white w3-border w3-border-red w3-round-large" type="text" name="password" size="40" placeholder="password">  
		
		<br><br> 
		<input class="w3-button w3-white w3-border w3-border-blue w3-round-large" align="center" type="submit" value="Submit">
		</p>
		<br>
	</form>
</div>
  <!-- </div> -->
</div> 
</div>



</body>