<DOCTYPE html>
<html>
<style>
body {
    background-image: url("https://livingsacrifice.files.wordpress.com/2016/11/football-stadium-desktop-background.jpg");
    background-repeat: no-repeat;
	 background-position: center top;
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
<h1><center><font color="white">SPORTS VENUE</center></h1>
<body>
<?php
if(isset($_POST['submit']))
{
 $u=$_POST['mname'];
 $p=$_POST['cntc'];
 echo "THANKU FOR YOUR TRUST  ON US WE WILL CONTACT YOU SOON";
}
?>
<form action="" method="post">
<center><h1>
<font color="white">Captain's Name<br />
<input type="text" name="sname" placeholder="Captain name..." /> <br />
Club name<br />
<input type="text" name="sname" placeholder="Club name..." /> <br />
Contact No<br />
<input type="text" name="email" placeholder="Contact no..."/> <br />
<label for="area">Select Game</label><br />
    <select id="area" name="area">
	<option value="none">Select</option>
      <option value="cricket">Cricket</option>
      <option value="hockey">Hockey</option>
      <option value="football">Football</option>
	  <option value="batminton">Batminton</option>
	  <option value="tennis">Tennis</option>
	  <option value="basketball">Basketball</option>
    </select></br>
<label for="area">Select venue stadium</label><br />
    <select id="area" name="area">
	<option value="none">Select</option>
      <option value="telco">Telco</option>
      <option value="sakchi">Sakchi</option>
      <option value="bistupur">Bistupur</option>
	  <option value="kadma">Kadma</option>
	  <option value="govindpur">Govindpur</option>
	  <option value="adityapur">Adityapur</option>
    </select></br>
	Booking date<br />
<input type="text" name="cntc" placeholder="YYYY-MM-DD"/> <br />
	<input type="submit" name="submit" value="Register" />
</h1>
</center>
</form>
</body>
</html>