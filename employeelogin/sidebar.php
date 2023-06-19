<?php  
session_start();  
if(!isset($_SESSION["usname"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New arena Admin Pannel</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <!-- <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i>Admin User Profile</a> -->
                    <!-- <li><a href="employeusersetting.php"><i class="fa fa-user fa-fw"></i>Employee User Profile</a> -->
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 
                    <!-- <li>
                        <a   href="abidscricket.php"><i class="fa fa-dashboard"></i>Abids Cricket</a>
                    </li>
                    <li>
                        <a   href="abidsvolleyball.php"><i class="fa fa-dashboard"></i>Abids volleyball</a>
                    </li>
                    <li>
                        <a   href="abidsfootball.php"><i class="fa fa-dashboard"></i>Abids football</a>
                    </li>
                    <li> -->
                        <!-- <a   href=" abidsbadminton.php"><i class="fa fa-dashboard"></i>Abids badminton</a> -->
                    <!-- </li> -->
                   
				


                    
                    <!-- <li>
                        <a   href="kachigudacricket.php"><i class="fa fa-dashboard"></i>Kachiguda Cricket</a>
                    </li>
                    <li>
                        <a   href="kachigudavolleyball.php"><i class="fa fa-dashboard"></i>Kachiguda volleyball</a>
                    </li>
                    <li>
                        <a   href="kachigudafootball.php"><i class="fa fa-dashboard"></i>Kachiguda football</a>
                    </li>
                    <li> -->
                        <!-- <a   href="kachigudabadminton.php"><i class="fa fa-dashboard"></i>Kachiguda badminton</a> -->
                    <!-- </li> -->






                          
                    <!-- <li>
                        <a   href="shaikpetcricket.php"><i class="fa fa-dashboard"></i>Shaikpet Cricket</a>
                    </li>
                    <li>
                        <a   href="shaikpetvolleyball.php"><i class="fa fa-dashboard"></i>Shaikpet volleyball</a>
                    </li>
                    <li>
                        <a   href="shaikpetfootball.php"><i class="fa fa-dashboard"></i>Shaikpet football</a>
                    </li>
                    <li> -->
                        <!-- <a   href="shaikpetbadminton.php"><i class="fa fa-dashboard"></i>Shaikpet badminton</a> -->
                    <!-- </li> -->





<!-- 
                    <li>
                        <a   href="nekhnampurbadminton.php"><i class="fa fa-dashboard"></i>NekhnamPur Badminton</a>
                    </li> -->



                  


                    
              





                    <li>
                        <a   href="index2.php"><i class="fa fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a   href="record.php"><i class="fa fa-dashboard"></i>Bill Data</a>
                    </li>
                    <li>
                        <a   href="bookingrecord.php"><i class="fa fa-dashboard"></i>Booking Record</a>
                    </li>
                    <li>
                        <a   href="contact.php"><i class="fa fa-dashboard"></i>Contact</a>
                    </li>
                    <li>
                        <a   href="hallbooking.php"><i class="fa fa-dashboard"></i>Hallbooking </a>
                    </li>

                    <li>
                        <a   href="generatebill.php"><i class="fa fa-dashboard"></i>Generate Bill </a>
                    </li>
          

                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                 
                </ul>

            </div>

        </nav>