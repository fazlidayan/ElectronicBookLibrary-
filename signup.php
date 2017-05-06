<?php
include 'DBconnection.php';

$user_name="";
$password="";
$email="";

            $db= new data_connection ();
            
       if(isset($_POST["submit"]))
       {
          
           $user_name     =    $_POST["user_name"];
           $password      =    $_POST["password"];
          $email   =    $_POST["email"];
          
           


     $query = "INSERT INTO logintable(user_name,password,email)
     
           VALUES ('$user_name','$password ','$email')";
           
               $db->insertData($query);


       }

?>




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> EBL Login Form</title>
  
  

  
      <link rel="stylesheet" href="elb.css">

  
</head>
<body>
<h1><center> Create a New ID</h1></center>
<form method="post">
<div class="login-page">
  <div class="form">
    
    <form class="login-form">
      <input type="text" name="user_name"placeholder=" Enter your name" required="user_name" />
      <input type="text" name="email" placeholder="Enter your valid  email" required="Email">
      <input type="password" name="password" placeholder=" Enter your  password" required="password"/>
      <button input type="text" name="submit">Sign UP</button>
      <p class="message">Not registered? <a href="loginebl.php">Enter to login</a></p>
      
    </form>
  </div>
</div>
  
</body>
</html>