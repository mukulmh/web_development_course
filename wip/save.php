<a href="index.html"><img src="back.png" height="20px" width="20px"></a>
<br> <br>
<b>
Form submittet & stored into DB!
<br> <br>
</b>
View all the responses from <a href="information.php">here</a>.
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

$sql="insert into information(id, name, phone, email, city, status) values('$sid','$name','$phone','$email','$city','$status')";
mysqli_query($con,$sql);
?>