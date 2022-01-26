<?php
if (isset($_POST['start_quiz']))
{   
    require 'connection.php';
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz_scores";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    *//*echo "Connected successfully";
    */
    $firstname = $_POST["form-first-name"];
    $lastname = $_POST["form-last-name"];
    $email = $_POST["form-email"];
    $mobile = $_POST["form-mobileno"];
    session_start();
    $_SESSION['email'] = $email;
    /*
    $answer1= $_POST['answerOne'];
    $answer2= $_POST['answerTwo'];
    $answer3= $_POST['answerThree'];
    $score = 0;
    if ($answer1 == "A"){$score++;}
    if ($answer2 == "B"){$score++;}
    if ($answer3 == "C"){$score++;}
    */
    /*INSERT INTO `scores`(`username`, `email`, `mobile`, `score`) VALUES ([value-1],[value-2],[value-3],[value-4])
    */
    /*$sql = "INSERT INTO `scores`(`username`, `email`, `mobile`, `score`) VALUES ('".$username."','".$email."','".$mobile."','".$score."'".")";
    */$sql = "INSERT INTO `Round1`(`Srno`,`Firstname`,`Lastname`, `Email`, `Phoneno`) VALUES ('null','".$firstname."','".$lastname."','".$email."','".$mobile."')";

    if ($conn->query($sql) === TRUE) 
    {
        $message = "You have been successfully registered.";
            echo "<script type='text/javascript'>alert('$message');</script>";
    /*    echo "<br/>Thank you! Ja Ghari!";
    */} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    #echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";
}
?>