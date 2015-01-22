 
<!--
Copyright (C) Rein Sano Systems, Inc - All Rights Reserved
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential
Written by Regine Bautista <regineramirezbautista@gmail.com>, November 2014

-->
  <?php
        
        session_start(); 
        $_SESSION[username]= $_POST['username'];
        $_SESSION[password] =  $_POST['password'];
            
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "sys_database");
        if (mysqli_connect_errno()) {
            echo "error" . mysqli_connect_error();
        }
        
          

        if (isset($_POST['login'])) 
        {   
            $sqlStmt ="SELECT * FROM tblusers WHERE username = '$username' AND password = '$password'";
            
            $result = mysqli_query($con, $sqlStmt);
                        $count = mysqli_num_rows($result);
                        if($count==1)
                        {
                             header('Location: adminPanel.html'); 
                             exit();
                        }
                        else {
                                         
                            $notif = "WRONG LOG IN INFORMATION. PLEASE TRY AGAIN";
                         
                              header('Location: admin.php'); 
                              exit(); 

                        }

                        
              }              
         mysqli_close($con);         
         
        
             
        ?> 









 