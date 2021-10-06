<?php

    $con=mysqli_connect('localhost','root','','mukul');
	
	if (isset($_GET['upd'])) {
		$sl = $_GET['upd'];
		
		$show = "SELECT * from information WHERE sl='$sl'";
		$data = mysqli_query($con,$show);
	}
	$row=mysqli_fetch_assoc($data);
?>
<html>
<head>
<title>Update information</title>
</head>

<body>
<a href="information.php"><img src="back.png" height="20px" width="20px"></a> <br><br>
	<div >
		<form name="update" action="update.php?upd=<?php echo $row['sl']; ?>" method="post">
			<input type="hidden" name="sl" value="<?php echo $sl; ?>">
			Student ID : <br>
			<input type="text" name="sid" placeholder="Type your ID" value="<?php echo $row["id"];?>" required> <br> <br>
			Name : <br> 
			<input type="text" name="name" placeholder="Type your name" value="<?php echo $row["name"];?>" required> <br> <br>
			E-mail : <br>
			<input type="text" name="email" placeholder="Type your E-mail" value="<?php echo $row["email"];?>" required> <br> <br>
			Phone-No : <br>
			<input type="text" name="phone" placeholder="Type your Phone-No" value="<?php echo $row["phone"];?>" required> <br> <br>
			City : <br>
			<input type="text" name="city" placeholder="Type your city" value="<?php echo $row["city"];?>" required> <br> <br>
			Vaccination status: 
			<select name="status" required value="<?php echo $row["status"];?>">
			<option selected disabled> Select an option</option>
			<option value="First dose complete"> First dose complete</option>
			<option value="Both dose complete"> Both dose complete</option>
			<option value="Not Vaccinated"> Not Vaccinated</option>
			</select>
			<br> <br>
			<input type="checkbox" name="check" value="accepted" required>
			The provided information is correct. <br><br>
			<input type="submit" name="sub" value="update"> 
		</form>
	</div>
</body>

</html>