<!DOCTYPE html>
<html lang="en">
 
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Census </title>
    <link rel="icon" href="CSS/image/llmjpn8a0pgu8szjmnyi.png" type= "image/gif/png">
   
</head>
  <body>
  <center><h1> Do! Which you want !!</h1> </center>
</br>

<?php 
    include_once('connection.php'); 
?>

            <center>
                <button class="btn btn-warning"> <a href="fatch_a.php">User Personal Information</a></button>
                <button class="btn btn-warning"> <a href="fatch_b.php"> User Address Information</a></button>
                <button class="btn btn-warning"> <a href="fatch_c.php">User Houshold</a></button>
                <button class="btn btn-warning"> <a href="fatch_d.php">User Feedback</a></button>
                <button class="btn btn-warning"> <a href="search.php">Search</a></button>
                <button class="btn btn-warning"> <a href="admin_logout.php">Logout</a></button>
            </center>


</body> 
</html>