<?php 
  
$con=mysqli_connect("localhost","root","","pet_owner") or die(mysqli_error());

if((isset($_POST['submit'])))
{
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);

$sql="INSERT INTO contact_us (name, email) VALUES ('".$Name."','".$Email."')";

if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you for your response. We will contact you soon....";
}

?>


