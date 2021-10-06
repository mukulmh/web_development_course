<a href="information.php"><img src="back.png" height="20px" width="20px"></a>
<?php
	$con=mysqli_connect('localhost','root','','mukul');
	
	if (isset($_GET['del'])) {
		$sl = $_GET['del'];
		
		$delete = "DELETE FROM information WHERE sl='$sl'";
		$query = mysqli_query($con,$delete);
		if($query){
			echo"<h1>Delete successful!</h1>";
		}
	}
?>