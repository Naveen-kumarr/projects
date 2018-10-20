<!DOCTYPE html>
<html>
<title>Signup</title>
<head>
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
<?php
include_once('link.php');
//print_r($_POST);exit;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("select * from users where serial_no='$id'");
$query2=mysql_fetch_array($query1);
}

if(isset($_POST['submit2']))
{
    $fi=$_POST['f_name'];
	$mi=$_POST['m_name'];
	
$query3=mysql_query("update users set comment='$fi',name='$mi' where serial_no='$id'");
if($query3)
{
	header('location:indexshow.php');
}
}
?>
<DOCTYPE html>
<html>
<body>

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
	margin-left:115px;
}

su
{
	margin-left:210px;

</style>
<div>
Comment
<class>
<input type="text" name="f_name" value="<?php echo @$query2['comment']; ?>" /></class> <br />
Name
 <c>
<input type="text" name="m_name" value="<?php echo @$query2['name']; ?>"  /></c> <br />

<su>

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