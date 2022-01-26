<?php 
require 'connection.php';
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_scores";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/
$sql = "SELECT * FROM round1";
$result = $conn->query($sql);
$scores = $_COOKIE["score"];
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
     {
        echo "username: " . $row["username"]. " - score : " . $row["scores"] . "\ttime : " . $row["submit_time"].  "<br>";
    }
} else 
{
    echo "0 score";
}
$conn->close();
?>