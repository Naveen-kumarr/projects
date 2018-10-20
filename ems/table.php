<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EVENT MANAGEMENT</title>

    <!-- Bootstrap Core CSS -->
    <link href="../em1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../em1/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../em1/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../em1/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../em2/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../em1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<style>
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
<?php
if(isset($_POST['submit']))
{
	header('location:registration.php');
}
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
		<body style="width:1600px">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">EVENT MANAGEMENT</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                    
                                   
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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
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
                                               <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>USERS<class="fa-angle-down"></span></a>
						   <ul class="nav nav-second-level">
						   </li>
						   <li>
									
                                
                                    <a href="http://localhost/project/ems/table.php">USER'S LIST</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i>EVENTS<span class="fa arrow"></span></a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-20">
				<form action="" method="post">
                    <h1 class="page-header">LIST OF USERS
					
	<input type="submit" name="submit" value="ADD USER" /></h1>
</form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-20">
                    <div class="panel panel-default">
                        </div>
                        <!-- /.panel-heading -->
							<?php
include('link.php');
$query1=mysql_query("select registration_id, first_name, middle_name,last_name,dob,gender,father_name,mother_name,email,phone_no,qualification,country from event");
?>                       
					   <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>FIRST NAME</th>
                                        <th>MIDDLE NAME</th>
                                        <th>LAST NAME</th>
                                        <th>DOB</th>
                                        <th>GENDER</th>
										<th>FATHER NAME</th>
										<th>MOTHER NAME</th>
										<th>EMAIL</th>
										<th>PHONE NO.</th>
										<th>QUALIFICATION</th>
										<th>COUNTRY</th>
										<th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
 <?php                                       
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['first_name']."</td>";
echo "<td>".$query2['middle_name']."</td>";
echo "<td>".$query2['last_name']."</td>";
echo "<td>".$query2['dob']."</td>";
echo "<td>".$query2['gender']."</td>";
echo "<td>".$query2['father_name']."</td>";
echo "<td>".$query2['mother_name']."</td>";
echo "<td>".$query2['email']."</td>";
echo "<td>".$query2['phone_no']."</td>";
echo "<td>".$query2['qualification']."</td>";
echo "<td>".$query2['country']."</td>";
echo "<td><a href='registration.php?id=".$query2['registration_id']."'>EDIT</a>";
}

?>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->


    <!-- jQuery -->
    <script src="../em1/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../em1/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../em1/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../em1/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../em1/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../em1/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../em2/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	
</body>

</html>
