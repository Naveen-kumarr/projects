<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Veg menu</title>

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
    padding: 4px 20px;
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
include_once('guptalink.php');
if(isset($_POST['submit1']))
{
	mysql_query("insert into item(items) VALUES('FRIED RICE')");
		header('location:http://localhost/project/ems/guptaquantity.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit2']))
{
	mysql_query("insert into item(items) VALUES('FRIED RICE')");
		header('location:http://localhost/project/ems/guptaquantity300.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit3']))
{
	mysql_query("insert into item(items) VALUES('DOSA')");
		header('location:http://localhost/project/ems/guptaquantity.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit4']))
{
	mysql_query("insert into item(items) VALUES('DOSA')");
		header('location:http://localhost/project/ems/guptaquantity300.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit5']))
{
	mysql_query("insert into item(items) VALUES('NORMAL THALI')");
		header('location:http://localhost/project/ems/guptaquantity.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit6']))
{
	mysql_query("insert into item(items) VALUES('NORMAL THALI')");
		header('location:http://localhost/project/ems/guptaquantity300.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit7']))
{
	mysql_query("insert into item(items) VALUES('SPECIAL THALI')");
		header('location:http://localhost/project/ems/guptaquantity.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit8']))
{
	mysql_query("insert into item(items) VALUES('SPECIAL THALI')");
		header('location:http://localhost/project/ems/guptaquantity300.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit9']))
{
	mysql_query("insert into item(items) VALUES('SEV TAMATAR')");
		header('location:http://localhost/project/ems/guptaquantity.php');

}
?>
<?php
include_once('guptalink.php');
if(isset($_POST['submit10']))
{
	mysql_query("insert into item(items) VALUES('SEV TAMATAR')");
		header('location:http://localhost/project/ems/guptaquantity300.php');

}
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
			<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					</li>
            <!-- /.navbar-header -->

           
                
                    
                                   
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
                                               <li>
                            <a href="http://localhost/project/ems/guptaji.php"><i class="fa fa-dashboard fa-fw"></i>HOME</a>
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
									
                                
                                    <a href="http://localhost/project/ems/table.php">ALOO PARATHE</a>
									</li>
									<li>
									<a href="http://localhost/project/ems/table.php">EGG CURRY</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i>CONTACT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/project/ems/help2.php">VISHAL CHOUBEY</a></li>
									 <li><a href="http://localhost/project/ems/help2.php">NAVEEN SRIVASTAV</a></li>
                        </ul>
						</li>
						                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i>INFORMATION<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							 <li>
                                    <a href="http://localhost/project/ems/help2.php">TAKEWAY HOURS</a></li>
									 <li><a href="http://localhost/project/ems/help2.php">DELIVERY FEES</a></li>
									 <li><a href="http://localhost/project/ems/help2.php">DELIVERY TIME</a></li>
									 <li><a href="http://localhost/project/ems/help2.php">ADDRESS</a></li>
									 <li><a href="http://localhost/project/ems/help2.php">PAYMENT TYPES</a></li>
                        
                                
                        </li>
						</ul>
                        <li>
                            <a href="http://localhost/project/ems/help2.php"><i class="fa fa-wrench fa-fw"></i>HELP & FEEDBACK</a>
                            
                        </li>
                       
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-20">
				<form action="" method="post">
                    <h1 class="page-header">VEG MENU	
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
						
					   <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ITEMS</th>
                                        <th>HALF PLATE</th>
                                        <th>FULL PLATE</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
 
<?php
echo "<tr><td>FRIED RICE</td>";?>
<form action="" method="post">
<td><input type="submit" name="submit1" value="₹150" /></td>
<td><input type="submit" name="submit2" value="₹300" /></td>
</form>
<?php
echo "<tr><td>DOSA</td>";?>
<form action="" method="post">
<td><input type="submit" name="submit3" value="₹150" /></td>
<td><input type="submit" name="submit4" value="₹300" /></td>
</form>
<?php
echo "<tr><td>NORMAL THALI</td>";?>
<form action="" method="post">
<td><input type="submit" name="submit5" value="₹150" /></td>
<td><input type="submit" name="submit6" value="₹300" /></td>
</form>
<?php
echo "<tr><td>SPECIAL THALI</td>";?>
<form action="" method="post">
<td><input type="submit" name="submit7" value="₹150" /></td>
<td><input type="submit" name="submit8" value="₹300" /></td>
</form>
<?php
echo "<tr><td>SEV TAMATAR</td>";?>
<form action="" method="post">
<td><input type="submit" name="submit9" value="₹150" /></td>
<td><input type="submit" name="submit10" value="₹300" /></td>
</form>                               
                                     <tr/>
                                </tbody>
                            </table>
							<form action="" method="post">
							<input type="submit" name="submit" value="CHECKOUT" /></h1>
							</form>
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
