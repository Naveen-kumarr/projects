<DOCTYPE html>
<html>
<style>
body {
    background-color:lightgreen;
}
input[type=text], select {
    width: 50%;
    padding: 60px 12px;
    margin:8px 0px;
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
<h1><center><font color="white">HELP DESK</center></h1>
<h2><font color="white">About us</h2>
<h3><font color="white">We organise the application of project management to the creation and development of large scale events such as conferences, ceremonies, formal parties, concerts, or conventions. It involves studying the brand, identifying the target audience, devising the event concept, and coordinating the technical aspects before actually launching the event.

The process of planning and coordinating the event is usually referred to as event planning and which can include budgeting, scheduling, site selection, acquiring necessary permits, coordinating transportation and parking, arranging for speakers or entertainers, arranging decor, event security, catering, coordinating with third party vendors, and emergency plans.

The events industry now includes events of all sizes from the Olympics down to business breakfast meetings. Many industries, charitable organizations, and interest groups hold events in order to market themselves, build business relationships, raise money, or celebrate achievement.</h3>
<h2><font color="white">Event Managers</h2>
<h3><font color="white">NANDAN KUMAR BARNWAL <br />NAVEEN SRIVASTAV</h3>
<h2><font color="white">For More Details Contact :-</h2>
<h3><font color="white">menandan1995@gmail.com(NANDAN)<br />naveen29395@gmail.com(NAVEEN)</h3>
<body>
<?php
if(isset($_POST['submit']))
{
 $fe=$_POST['feedb'];
 echo "THANKU FOR YOUR FEEDBACK";
}
?>
<form action="" method="post">
<h1>
<font color="white">
<font color="white">Feedback<br />
<input type="text" name="feedb" placeholder="Your text here..."/> <br />
<input type="submit" name="submit" value="Submit" />
</h1>
</form>
</body>
</html>