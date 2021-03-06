<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chagalog: Chabacano - Tagalog Online Translator">
    <meta name="author" content="Joy Fermin">

    <title>Chagalog: Chabacano - Tagalog Online Translator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/sb-admin.css" rel="stylesheet">    
    <link href="css/global.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/global.css" rel="stylesheet">
    
    <!-- Data Table -->        
        <script src="js/jquery.js"></script>  
        
        <!-- UI -->
        <link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
        
        <!-- Data Table -->     
        <link href="css/jquery.dataTables.css" rel="stylesheet">
        <script src="js/jquery.dataTables.js"></script>
        
        <!-- Custom jQuery UI  -->
        <script>
            
            $(function(){                 
               $(document).ready(function() {
                    $('#untransSentDataTable').dataTable({
                        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
                    });
                });

            });
        </script>
        

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="AUS.php">Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Sheila</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Regine</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>April</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Joy Fermin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="AUS.php"><i class="fa fa-fw fa-dashboard"></i> Untranslated Sentences</a>
                    </li>
                    <li>
                        <a href="ALM.php"><i class="fa fa-fw fa-table"></i> Logs Management</a>
                    </li>
                    <li>
                        <a href="ADBM.php"><i class="fa fa-fw fa-edit"></i> Database Management</a>
                    </li>
   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                       
                        <div id="tabs">
                        <ul>
                        <li><a href="#tabs-1"> Unstranslated Sentences</a></li>                     
                        </ul>
                        
                         <div id="tabs-1">
                                <?php  

                                $con = mysqli_connect("localhost", "root", "", "sys_database");
                                  if (mysqli_connect_errno()) {
                                       echo "error" . mysqli_connect_error();
                                  }

                               $result = mysqli_query($con,"SELECT * FROM tbluntranslated");

                               echo " <div id = 'DTuntransSent'>                        
                                        <table id='untransSentDataTable' class='display'>
                                            <thead>
                                                <tr>
                                                <th> Sentence ID</th> 
                                                <th> Source Text</th> 
                                                <th> No. of Occurence</th> 
                                                </tr>
                                            </thead>

                                       ";

                                echo "<tbody>    

                                        ";  


                                    while($row = mysqli_fetch_array($result))
                                      {

                                      echo "<tr>";
                                      echo "<td>" . $row['sentenceID'] . "</td>";
                                      echo "<td>" . $row['sourceText'] . "</td>";
                                      echo "<td>" . $row['noOfOccurence'] . "</td>";
                                      echo "</tr>";
                                      }

                                echo " </tbody>
                                       </table>
                                       </div>";

                                mysqli_close($con);
                                ?>                   

                            </div>  <!-- tabs-1 -->
  

                    </div> <!-- tabs -->
        
    </div> <!-- container -->
   </div> <!-- page-wrapper-->
    
 

     <!--Bootstrap Core JavaScript--> 
    <script src="js/bootstrap.min.js"></script> 

</body>

</html>
