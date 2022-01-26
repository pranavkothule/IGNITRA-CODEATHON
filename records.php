<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_scores";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM scores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username " . $row["username"]. " - score: " . $row["score"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>