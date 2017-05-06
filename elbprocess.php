<?php

include 'DBconnection.php';

$user_name="";
$password="";


            $db= new data_connection();
            
       if(isset($_POST["loginbtn"]))
       {
          
           $user_name    =    $_POST["user_name"];
           $password     =    $_POST["password"];
           
         $query = "SELECT * from logintable 
                      Where user_name='$user_name' 
                      and password='$password' ";

           // include 'db_connect.php';

           
            $result = $db->getData($query);

            if( mysqli_num_rows($result) > 0 )
            {
              $row = mysqli_fetch_assoc($result);

              $_SESSION['user_id'] = $row['id'];


              // goto next page
              // redirect to other page
              header("Location: Ebl_main.php");
                 echo ' <script> alert("User name and Password is correct");  </script> ';
                
              
            }
            else
            {
                 echo ' <script> alert("user name and password not exsits.");  </script> ';   
              
            }
       }
        else
        {
            echo "login ";
        }

?>