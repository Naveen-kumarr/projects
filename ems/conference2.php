<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event management</title>
<style>
body
     {
     background-image: url("http://lablogbeaute.co.uk/wp-content/uploads/2016/12/biz-event.jpg");
     background-repeat: no-repeat;
	 background-position: right top;
	 }
	 input[type=text], select {
    width: 20%;
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
                <a class="navbar-brand" href="index.php">EVENT MANAGEMENT</a>
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

            <div class="navbar-default sidebar" role="navigation">
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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>USERS<span class="fa arrow"></span></a>
						   <ul class="nav nav-second-level">
						   </li>
						   <li>
									<a href="http://localhost/project/ems/registration.php">ADD USER</a>
                                
                                    <a href="http://localhost/project/ems/table.php">USER'S LIST</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i>EVENTS<span class=""></span></a>
							<ul class="nav nav-second-level">
                                <li>
									<a href="http://localhost/project/ems/marriage2.php">MARRIAGE</a></li>
                                <li>
									<a href="http://localhost/project/ems/birthday2.php">BIRTHDAY PARTY</a></li>
									<li>
									<a href="http://localhost/project/ems/conference2.php">CONFERENCES</a></li>
									<li>
									<a href="http://localhost/project/ems/meeting2.php">MEETINGS</a></li>
									<li>
									<a href="http://localhost/project/ems/sports2.php">SPORTS</a></li>
									<li>
									<a href="http://localhost/project/ems/music2.php">MUSIC EVENTS</a></li>
                        </li>
						</ul>
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i>CONTACT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/project/ems/help2.php">NANDAN KUMAR BARNWAL</a></li>
									 <li><a href="http://localhost/project/ems/help2.php">NAVEEN SRIVASTAV</a></li>
                        </ul>
						</li>
                        <li>
                            <a href="http://localhost/project/ems/help2.php"><i class="fa fa-wrench fa-fw"></i>HELP</a>
                            
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
	<h1><center>CONFERENCE VENUE</center></h1>
	<center><h4>
<?php
include_once('link.php');
if(isset($_POST['submit']))
{
 $cnn=$_POST['cname'];
 $cn=$_POST['cntc'];
 $ecn=$_POST['email_con'];
 $ar=$_POST['area'];
  $bkd=$_POST['booking_d'];
  if(empty($cnn))
	{
		$msg="Please Enter Your Name";
	}
	else if(empty($cn))
	{
		$msg="Please Enter Your Contact No.";
	}	
	else if(empty($ecn))
	{
		$msg="Please enter an Email Id";
	}
else if(empty($ar))
	{
		$msg="Please Select the Venue";
	}	
	else if(empty($bkd))
	{
		$msg="Please Give a Venue date";
	}	
	else
	{
	mysql_query("insert into events(event_type,your_name,contact_no,email_id,address,booking_date) VALUES('3','$cnn','$cn','$ecn','$ar','$bkd')");
 echo "THANKU FOR YOUR TRUST  ON US WE WILL CONTACT YOU SOON";
}
}
?>
</center></h4>
<form action="" method="post">
<center><h4>
<font color="white">Your Name<br />
<font color="black"><input type="text" name="cname" placeholder="Your name..." /> <br />
<font color="white">Contact No<br />
<font color="black"><input type="text" name="cntc" placeholder="Contact No..." /> <br />
<font color="white">Email<br />
<font color="black"><input type="text" name="email_con" placeholder="Email id..."/> <br />
<font color="white"><label for="area">Select Conference Venue</label><br />
    <font color="black"><select id="area" name="area">
	<option value="none">Select</option>
      <option value="telco">Telco</option>
      <option value="sakchi">Sakchi</option>
      <option value="bistupur">Bistupur</option>
	  <option value="kadma">Kadma</option>
	  <option value="govindpur">Govindpur</option>
	  <option value="adityapur">Adityapur</option>
    </select></br>
	<font color="white">Booking date<br />
<font color="black"><input type="text" name="booking_d" placeholder="YYYY-MM-DD"/> <br />
	<input type="submit" name="submit" value="Register" />
</h4>
</center>
</form>
<h2><center>
<p style="color:red;"><?php
if(isset($msg))
{
	echo $msg;
}
?></p></center></h2>
	</body>

</html>
