<?php 

$res=$_GET['res'];

echo "$res";


$con=mysqli_connect('localhost','root','');

if ($con) {
	mysqli_select_db($con,'codeathon');


}

else {
	
echo "sorry try again";

	}







 ?>