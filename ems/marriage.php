<DOCTYPE html>
<html>
<style>
body {
	background-image: url("http://coreobjects.co.in/dhruti/wp-content/uploads/2016/03/holding-hands.jpg");
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
<h1><center>MARRIAGE VENUE</center></h1>
<body>
<center><h1>
<?php
if(isset($_POST['submit']))
{
 $mn=$_POST['mname'];
 $cn=$_POST['cntc'];
 echo "THANKU FOR YOUR TRUST  ON US WE WILL CONTACT YOU SOON";
}
?>Your Name<br />
<input type="text" name="mname" placeholder="Your name..." /> <br />
Contact No<br />
<input type="text" name="cntc" placeholder="Your contact no..."/> <br />
Booking date<br />
<input type="text" name="cntc" placeholder="YYYY-MM-DD"/> <br />
<input type="submit" name="submit" value="Register" /></h1>
</center>
</form>
</body>
</html>