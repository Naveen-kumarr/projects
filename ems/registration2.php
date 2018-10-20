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
img {
    border-radius: 1px;
}
body
{
background-color:lightgreen;
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
input[type=password], select {
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
    width: 10%;
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
div
{
    border-radius: 20px;
    background-color: white;
    padding: 20px;
	}
</style>
    <!-- Bootstrap Core CSS -->
    <link href="../em1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../em1/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../em2/css/sb-admin-2.css" rel="stylesheet">
    <link href="../em1/morrisjs/morris.css" rel="stylesheet">
    <link href="../em1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
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
                            <a href=""><i class="fa fa-table fa-fw"></i>EVENTS<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
									<a href="http://localhost/project/ems/marriage.php">MARRIAGE</a></li>
                                <li>
									<a href="http://localhost/project/ems/birthday.php">BIRTHDAY PARTY</a></li>
									<li>
									<a href="http://localhost/project/ems/conference.php">CONFERENCES</a></li>
									<li>
									<a href="http://localhost/project/ems/meeting.php">MEETINGS</a></li>
									<li>
									<a href="http://localhost/project/ems/sports.php">SPORTS</a></li>
									<li>
									<a href="http://localhost/project/ems/music.php">MUSIC EVENTS</a></li>
                        </li>
						</ul>
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i>CONTACT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/project/ems/help.php">NANDAN KUMAR BARNWAL</a></li>
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
<?php
include_once('link.php');
//print_r($_POST);exit;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("select * from event where registration_id='$id'");
$query2=mysql_fetch_array($query1);
}
if(isset($_POST['submit1']))
{
	$fi=$_POST['f_name'];
	$mi=$_POST['m_name'];
	$la=$_POST['l_name'];
	$d0b=$_POST['d_o_b'];
	$ge=$_POST['gender_1'];
	$fa=$_POST['f1_name'];
	$mo=$_POST['mm_name'];
	$em=$_POST['e_mail'];
	$pas=$_POST['password'];
	$ph=$_POST['p_no'];
	$p_len=strlen($ph);
	$qu=$_POST['q_1'];
	$cou=$_POST['country'];
	if(empty($fi))
	{
		$msg= "Please enter the first name";
	}
	else if(empty($la))
	{
	$msg= " You should have a last name";
	}
	else if(empty($d0b))
	{
		$msg="Enter D.O.B.";
	}
	else if(empty($ge))
	{
		$msg= "Please select gender";
	}
	else if(empty($fa))
	{
		$msg= "Plese enter your Father's name";
	}
	else if(empty($mo))
	{
		$msg= "Please enter your Mother's name";
	}
	else if(empty($em))
	{
		$msg= "Please enter your email id";
	}
	else if(empty($ph))
	{
		$msg= "Please enter your phone no";
	}
	else if($p_len!=10)
	{
		$msg="Enter valid no.";
	}
	else if(empty($qu))
	{
		$msg= "Please select your qualification";
	}
 else
	{
	mysql_query("insert into event(first_name,middle_name,last_name,dob,gender,father_name,mother_name,email,password,phone_no,qualification,country) VALUES('$fi','$mi','$la','$d0b','$ge','$fa','$mo','$em','$pas','$ph','$qu','$cou')");
	header('location:login.php');
	}
}
if(isset($_POST['submit2']))
{
    $fi=$_POST['f_name'];
	$mi=$_POST['m_name'];
	$la=$_POST['l_name'];
	$d0b=$_POST['d_o_b'];
	$ge=$_POST['gender_1'];
	$fa=$_POST['f1_name'];
	$mo=$_POST['mm_name'];
	$em=$_POST['e_mail'];
	$pas=$_POST['password'];
	$ph=$_POST['p_no'];
	$qu=$_POST['q_1'];
	$cou=$_POST['country'];
$query3=mysql_query("update event set first_name='$fi',middle_name='$mi',last_name='$la',dob='$d0b',gender='$ge',father_name='$fa',mother_name='$mo',email='$em',password='$pas',phone_no='$ph',qualification='$qu',country='$cou' where registration_id='$id'");
if($query3)
{
	header('location:link1.php');
}
}
?>
<DOCTYPE html>
<html>
<body>
<center>
<img src="http://www.kamakazievents.com/blog/wp-content/uploads/2016/10/Event-Management.jpg" alt="em" width="1000" height="120">
</center>
<form action="" method="post">
<style>
div
{
margin-left: 80px;
}
class
{
	margin-left: 90px;
}
c
{
	margin-left:80px;
}
d
{
	margin-left:122px;
}
f
{
	margin-left:76;
}
m
{
	margin-left:70;
}
e
{
	margin-left:118;
}
pa
{
	margin-left:96;
}
ph
{
	margin-left:95;
}
g
{
	margin-left:130px;
}
su
{
	margin-left:165;
}
co
{
	margin-left:110;
}
</style>
<div>First name*
<class>
<input type="text" name="f_name" value="<?php echo @$query2['first_name']; ?>" /></class> <br />
 Middle name
 <c>
<input type="text" name="m_name" value="<?php echo @$query2['middle_name']; ?>"  /></c> <br />
Last name*
<class>
<input type="text" name="l_name" value="<?php echo @$query2['last_name']; ?>"/></class> <br />
DOB*
<d>
<input type="text" name="d_o_b" value="<?php echo @$query2['dob']; ?>" placeholder="Eg-1997-3-29"/></d><br />
Gender*
<g>
<input type="radio" value="Male" name="gender_1" <?php if(@$query2['gender'] == 'Male'){ echo "checked='checked'"; } ?> />Male
<input type="radio" value="Female" name="gender_1" <?php if(@$query2['gender'] == 'Female'){ echo "checked='checked'"; } ?> />Female </g><br />
Father name*
<f>
<input type="text" name="f1_name" value="<?php echo @$query2['father_name']; ?>" /></f> <br />
Mother name*
<m>
<input type="text" name="mm_name" value="<?php echo @$query2['mother_name']; ?>"/></m> <br/>
Email*
<e>
<input type="text" name="e_mail" value="<?php echo @$query2['email']; ?>"/></e> <br />
Password*
<pa>
<input type="password" name="password" value="<?php echo @$query2['password']; ?>"/></pa> <br />
Phone no*
<ph>
<input type="text" name="p_no"value="<?php echo @$query2['phone_no']; ?>" placeholder="SHOULD BE OF 10 DIGIT"/></ph><br />
Qualification*
<class>
<input type="radio" value="B.E" name="q_1"  <?php if(@$query2['qualification'] == 'B.E'){ echo "checked='checked'"; } ?> />BE
<input type="radio" value="B.TECH" name="q_1"  <?php if(@$query2['qualification'] == 'B.TECH'){ echo "checked='checked'"; } ?>/>BTECH </class><br />
<label for="country">Country</label>
<co>
    <select id="country" name="country">
	<option value="none">Select</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select></br>
	</co>
<su>
<input type="submit" name="submit1" value="submit" /> 
<input type="submit" name="submit2" value="update" /></div></su>
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
