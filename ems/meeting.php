<DOCTYPE html>
<html>
<style>
body {
	background-color:lightblue;
    background-image: url("http://easyconferences.eu/wp-content/uploads/2014/06/conference_1.jpg");
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
<h1><center>MEETING VENUE</center></h1>
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
<font color="white">Your Name<br />
<input type="text" name="myname" placeholder="Your name..." /> <br />
Company name<br />
<input type="text" name="cname" placeholder="Comapany name..." /> <br />
Email<br />
<input type="text" name="email" placeholder="Email id..."/> <br />
<label for="area">Select venue</label><br />
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