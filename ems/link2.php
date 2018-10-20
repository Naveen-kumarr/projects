<html>
<body>
<?php
include('link.php');
$query1=mysql_query("select email,password from event");
while($query2=mysql_fetch_array($query1))
{
"<tr><td>".$query2['email']."</td>";
"<tr><td>".$query2['password']."</td>";
}
?>
</body>
</html>