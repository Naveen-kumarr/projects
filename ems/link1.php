<html>
<style>
body
{
background-color:lightgreen;
}
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
$query1=mysql_query("select registration_id, first_name, middle_name,last_name,dob,gender,father_name,mother_name,email,phone_no,qualification,country from event");
echo "<table>
		<tr>
			<td>FIRST NAME</td>
			<td>MIDDLE NAME</td>
			<td>LAST NAME</td>
			<td>DOB</td>
			<td>GENDER</td>
			<td>FATHER NAME</td>
			<td>MOTHER NAME</td>
			<td>EMAIL</td>
			<td>PHONE NO.</td>
			<td>QUALIFICATION</td>
			<td>COUNTRY</td>
			<td>ACTION</td>
		</tr>";
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
echo "<td><a href='registration.php?id=".$query2['registration_id']."'>EDIT</a><pre></pre>";
echo "<a href='delete.php?id=".$query2['registration_id']."'>DELETE</a>";
}
?>
</table>
</body>
</html>