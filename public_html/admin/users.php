<!DOCTYPE html>
<!--
Copyright (C) Rein Sano Systems, Inc - All Rights Reserved
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential
Written by Regine Bautista <regineramirezbautista@gmail.com>, November 2014
-->

<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Chabacano to Tagalog Online Translator">
        <meta name="author" content="Regine Bautista">
        <title>Chagalog: Chabacano - Tagalog Online Translator</title>
        
        <!-- Bootstrap -->
        <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../css/styles.css" rel="stylesheet" media="screen"> 
        
        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Regine Bautista <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tools <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        
                                                <a href="#">Reports</a>
                                             
                                                <a href="#">Logs</a>
                                             
                                                <a href="#">Errors</a>
                                            
                                         
                                    </li>
                               
                                </ul>
                            </li>
                           
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="users.php">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="users.php">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="users.php">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="database.html"><i class="icon-chevron-right"></i> Databases </a>
                        </li>
                     
            
                        
                    </ul>
                </div>
                
                 <div class="span9" id="content">
                 <div class="row-fluid">

                 <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"> Users List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
				 
                                   <?php  
                   
                                       $con = mysqli_connect("localhost", "root", "", "sys_database");
                                        if (mysqli_connect_errno()) {
                                            echo "error" . mysqli_connect_error();
                                        }

                                   $result = mysqli_query($con,"SELECT * FROM tblusers");

                                   echo " <div id = 'usersDT'>                        
                                            <table id='userstbl' class='display'>
                                                <thead>
                                                    <tr>
                                                    <th> User ID</th> 
                                                    <th> User Type</th> 
                                                    <th> First Name</th>
                                                    <th> Last Name</th>
                                                    <th> Username </th>
                                                  
                                                    </tr>
                                                </thead>

                                           ";

                                    echo "<tbody>    

                                            ";  


                                        while($row = mysqli_fetch_array($result))
                                          {

                                          echo "<tr>";
                                          echo "<td>" . $row['userID'] . "</td>";
                                          echo "<td>" . $row['userType'] . "</td>";
                                          echo "<td>" . $row['firstName'] . "</td>";
                                          echo "<td>" . $row['lastName'] . "</td>";
                                          echo "<td>" . $row['email'] . "</td>"; 
                                          echo "<td>" . $row['username'] . "</td>"; 
                                         
                                          echo "</tr>";
                                          }

                                    echo " </tbody>
                                           </table>
                                           </div>";

                                    mysqli_close($con);
                                    ?>                   
                		

				</div>
                            </div>
                        </div>
                        <!-- /block -->
                 </div>
                </div>
        
            </div>
            
        </div>
       
     
        <script src="../js/jquery/jquery-1.9.1.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script> 
        <script src="../js/vendor/scripts.js"></script>
        
    </body>

</html>