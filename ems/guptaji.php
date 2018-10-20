<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
<style>
body
     {
     background-image: url("http://ksmartstatic.sify.com/cmf-1.0.0/appflow/bawarchi.com/Adlet/pk4qbtcgbciej.jpg");
     background-repeat: no-repeat;
	 background-position: right top;
	 }
	 input[type=text], select {
    width: 40%;
    padding: 5px 12px;
    margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]
 {
    width: 20%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover
 {
    background-color: #45a049;
}
</style>
    <!-- Bootstrap Core CSS -->
    <link href="../em1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../em1/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../em2/css/sb-admin-2.css" rel="stylesheet">
    <link href="../em1/morrisjs/morris.css" rel="stylesheet">
    <link href="../em1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<?php
?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/project/ems/guptaji.php"><h1>GUPTA JI BHOJNALAYA</h1></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="http://localhost/project/ems/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            </br></br><div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="http://localhost/project/ems/guptaji.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
						<li>
                            <a href=""><i class="fa fa-edit fa-fw"></i>MENU<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
								    <a href="http://localhost/project/ems/guptabreakfastmenu.php">BREAKFAST</a></li>
									<li>
                                    <a href="http://localhost/project/ems/guptamenu.php">VEG</a></li>
									 <li><a href="http://localhost/project/ems/guptanonvegmenu.php">NON-VEG</a></li>
                        </ul>
						</li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>GUPTA JI SPECIAL<span class="fa arrow"></span></a>
						   <ul class="nav nav-second-level">
						   </li>
						   <li>
									<a href="http://localhost/project/ems/registration.php">ALOO PARATHE</a>
                                
                                    <a href="http://localhost/project/ems/table.php">EGG CURRY</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i>CUSTOMER SERVICE<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
									<a href="http://localhost/project/ems/marriage2.php">MANAGE ORDERS</a></li>
                                <li>
									<a href="http://localhost/project/ems/birthday2.php">LOCATION</a></li>
									<li>
                        </li>
						</ul>
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i>CONTACT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/project/ems/help.php">VISHAL CHOUBEY</a></li>
									 <li><a href="http://localhost/project/ems/help.php">NAVEEN SRIVASTAV</a></li>
                        </ul>
						</li>
                        <li>
                            <a href="http://localhost/project/ems/help.php"><i class="fa fa-wrench fa-fw"></i>HELP</a>
                            
                        </li>
                       
                </div>
            </div>
        </nav>
    <script src="../em1/jquery/jquery.min.js"></script>
    <script src="../em1/bootstrap/js/bootstrap.min.js"></script>
    <script src="../em1/metisMenu/metisMenu.min.js"></script>
    <script src="../em1/raphael/raphael.min.js"></script>
    <script src="../em1/morrisjs/morris.min.js"></script>
    <script src="../em3/morris-data.js"></script>
    <script src="../em2/js/sb-admin-2.js"></script>
	<form action="" method="post">
	<center><h3><label for="area">Location</label><br /></h3>
   <select id="area" name="area">
	<option value="none">Select</option>
      <option value="telco">MP Nagar</option>
      <option value="sakchi">Goutam Nagar</option>
      <option value="bistupur">Rachna Nagar</option>
	  <option value="kadma">Chetak Bridge</option>
	  <option value="govindpur">Bharti Niketan</option>
	  <option value="adityapur">Shanti Niketan</option>
    </select></br>
	<input type="submit" name="submit" value="GO" /></center>
	</body>

</html>
