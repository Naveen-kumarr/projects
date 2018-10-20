<html>
<title>updation</title>
<style>

table
 {
    border-collapse: collapse;
 }

table, td, th {
border: 1px solid black;
}
</style>
<body>
<?php
include('link.php');
$query1=mysql_query("select serial_no, comment,name from users");
echo "<table>
		<tr>
			<td>Comment</td>
			<td>Name</td>
			
		</tr>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['comment']."</td>";
echo "<td>".$query2['name']."</td>";

echo "<td><a href='indexedit.php?id=".$query2['serial_no']."'>EDIT</a><pre></pre>";

}
?>
</table>
</body>
</html>