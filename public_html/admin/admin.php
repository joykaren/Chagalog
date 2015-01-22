 
<!--
Copyright (C) Rein Sano Systems, Inc - All Rights Reserved
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential
Written by Regine Bautista <regineramirezbautista@gmail.com>, November 2014

-->


<?php 
session_start();
if(empty($_SESSION['username'])) {
 echo 'incorrect username/ password please try again.' ;
}
?> 