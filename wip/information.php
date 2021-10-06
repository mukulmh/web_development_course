<?php
	$con=mysqli_connect('localhost','root','','mukul');
	$sql = "select * from information";
	$data = mysqli_query($con,$sql);
?>
<a href="index.html"><img src="back.png" height="20px" width="20px"></a> <br><br>
<table border="1">

<th>ID</th>
<th>Name</th>
<th>E-mail</th>
<th>Phone-No</th>
<th>City</th>
<th>Vaccination Status</th>
<th colspan="2">Action</th>

<?php
	while($row=mysqli_fetch_assoc($data))
	{
?>
	<tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["phone"];?></td>
		<td><?php echo $row["city"];?></td>
		<td><?php echo $row["status"];?></td>
		<td bgcolor="green"><a href="updateview.php?upd=<?php echo $row['sl']; ?>"><img src="edit.png" height="20px" width="20px"></a></td>
		<td bgcolor="red"><a href="delete.php?del=<?php echo $row['sl']; ?>"><img src="delete.png" height="20px" width="20px"></a></td>
	</tr>
<?php
	}
?>

</table>