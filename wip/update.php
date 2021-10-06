<a href="information.php"><img src="back.png" height="20px" width="20px"></a>
<br> <br>

<?php
$con=mysqli_connect('localhost','root','','mukul');

$name=$_POST['name'];
$sid=$_POST['sid'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$status=$_POST['status'];

echo "Name: $name";
echo "<br>";
echo "ID: $sid";
echo "<br>";
echo "E-mail: $email";
echo "<br>";
echo "Phone No: $phone";
echo "<br>";
echo "Vaccination status: $status";
echo "<br>";

$sl = $_GET['upd'];

$update = "UPDATE information SET id = '$sid', name = '$name', email = '$email', phone = '$phone', city = '$city', status = '$status' WHERE sl='$sl'";
$query = mysqli_query($con,$update);
if($query){
	echo"<h1>Update successful!</h1>";
}
?>



