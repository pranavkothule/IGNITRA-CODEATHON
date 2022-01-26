<?php
session_start();
/*echo 'Hi ' . $_SESSION['email'];
*/
 if (isset($_POST['submit_answer'])) 
{
		require 'connection.php';
		/*$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "quiz_scores";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
		*/
		/*$username= $_POST["username"];

		$mobile = $_POST["mobile"];
		*/
		/*$email = $_POST["email"];

		*/
		$answer1= $_POST['One'];
		$answer2= $_POST['Two'];
		$answer3= $_POST['Three'];
		$answer4= $_POST['Four'];
		$answer5= $_POST['Five'];
		$answer6= $_POST['Six'];
		$answer7= $_POST['Seven'];
		$answer8= $_POST['Eight'];
		$answer9= $_POST['Nine'];
		$answer10= $_POST['Ten'];
		$answer11= $_POST['Eleven'];
		$answer12= $_POST['Twelve'];
		$answer13= $_POST['Therteen'];
		$answer14= $_POST['Fourteen'];
		$answer15= $_POST['Fifhteen'];
		$answer16= $_POST['Sixteen'];
		$answer17= $_POST['Seventeen'];
		$answer18= $_POST['Eightteen'];
		$answer19= $_POST['Nineteen'];
		$answer20= $_POST['Twenty'];
		$answer21= $_POST['TwentyOne'];
		$answer22= $_POST['TwentyTwo'];
		$answer23= $_POST['TwentyThree'];
		$answer24= $_POST['TwentyFour'];
		$answer25= $_POST['TwentyFive'];
		$answer26= $_POST['TwentySix'];
		$answer27= $_POST['TwentySeven'];
		$answer28= $_POST['TwentyEight'];
		$answer29= $_POST['TwentyNine'];
		$answer30= $_POST['Thirty'];
		$score = 0;

		/*session_start();
		*/
		if ($answer1 == "A"){$score++;}
		if ($answer2 == "C"){$score++;}
		if ($answer3 == "C"){$score++;}
		if ($answer4 == "B"){$score++;}
		if ($answer5 == "B"){$score++;}
		if ($answer6 == "A"){$score++;}
		if ($answer7 == "B"){$score++;}
		if ($answer8 == "B"){$score++;}
		if ($answer9 == "C"){$score++;}
		if ($answer10 == "B"){$score++;}
		if ($answer11== "B"){$score++;}
		if ($answer12== "B"){$score++;}
		if ($answer13 == "B"){$score++;}
		if ($answer14 == "C"){$score++;}
		if ($answer15 == "A"){$score++;}
		if ($answer16 == "B"){$score++;}
		if ($answer17 == "C"){$score++;}
		if ($answer18 == "A"){$score++;}
		if ($answer19== "B"){$score++;}
		if ($answer20== "A"){$score++;}
		if ($answer21=="C"){$score++;}
		if ($answer22=="A"){$score++;}
		if ($answer23=="B"){$score++;}
		if ($answer24=="C"){$score++;}
		if ($answer25=="B"){$score++;}
		if ($answer26=="C"){$score++;}
		if ($answer27=="B"){$score++;}
		if ($answer28=="A"){$score++;}
		if ($answer29=="C"){$score++;}
		if ($answer30=="A"){$score++;}

		/*INSERT INTO `scores`(`username`, `email`, `mobile`, `score`) VALUES ([value-1],[value-2],[value-3],[value-4])
		*/
		/*$sql = "INSERT INTO `scores`(`username`, `email`, `mobile`, `score`) VALUES ('".$username."','".$email."','".$mobile."','".$score."'".")";
		*/
		date_default_timezone_set("Asia/Kolkata");
$time= date("h:i:sa");
			$sql = "UPDATE scores SET score='".$score."',submit_time='".$time."' WHERE email='".$_SESSION['email']."'";
		if ($conn->query($sql) === TRUE)
		{
			/*
		    echo "<br/>Thank you! Ja Ghari!";*/
		    header('Location: thankyou.html');
		} 
		else 
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$conn->close();
	/*echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";*/
 }
 else
 {
 	require 'connection.php';

		/*$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "quiz_scores";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
		*/
		/*$username= $_POST["username"];

		$mobile = $_POST["mobile"];
		*/
		/*$email = $_POST["email"];

		*/
		$answer1= $_POST['One'];
		$answer2= $_POST['Two'];
		$answer3= $_POST['Three'];
		$answer4= $_POST['Four'];
		$answer5= $_POST['Five'];
		$answer6= $_POST['Six'];
		$answer7= $_POST['Seven'];
		$answer8= $_POST['Eight'];
		$answer9= $_POST['Nine'];
		$answer10= $_POST['Ten'];
		$answer11= $_POST['Eleven'];
		$answer12= $_POST['Twelve'];
		$answer13= $_POST['Therteen'];
		$answer14= $_POST['Fourteen'];
		$answer15= $_POST['Fifhteen'];
		$answer16= $_POST['Sixteen'];
		$answer17= $_POST['Seventeen'];
		$answer18= $_POST['Eightteen'];
		$answer19= $_POST['Nineteen'];
		$answer20= $_POST['Twenty'];
		$answer21= $_POST['TwentyOne'];
		$answer22= $_POST['TwentyTwo'];
		$answer23= $_POST['TwentyThree'];
		$answer24= $_POST['TwentyFour'];
		$answer25= $_POST['TwentyFive'];
		$answer26= $_POST['TwentySix'];
		$answer27= $_POST['TwentySeven'];
		$answer28= $_POST['TwentyEight'];
		$answer29= $_POST['TwentyNine'];
		$answer30= $_POST['Thirty'];
				$score = 0;
		
		
			if ($answer1 == "A")
			{
					$score++;
			}
		 
		if ($answer2 == "C")
				{
					$score++;
				} 
		 
		if ($answer3 == "C")
				{
					$score++;
				}
		if ($answer4 == "B")
		  {
			$score++;
		  }	
	    if ($answer5 == "B"){$score++;}
		if ($answer6 == "A"){$score++;}
		if ($answer7 == "B"){$score++;}
		if ($answer8 == "B"){$score++;}
		if ($answer9 == "C"){$score++;}
		if ($answer10 == "B"){$score++;}
		if ($answer11== "B"){$score++;}
		if ($answer12== "B"){$score++;}
		if ($answer13 == "B"){$score++;}
		if ($answer14 == "C"){$score++;}
		if ($answer15 == "A"){$score++;}
		if ($answer16 == "B"){$score++;}
		if ($answer17 == "C"){$score++;}
		if ($answer18 == "A"){$score++;}
		if ($answer19== "B"){$score++;}
		if ($answer20== "A"){$score++;}
		if ($answer21=="C"){$score++;}
		if ($answer22=="A"){$score++;}
		if ($answer23=="B"){$score++;}
		if ($answer24=="C"){$score++;}
		if ($answer25=="B"){$score++;}
		if ($answer26=="C"){$score++;}
		if ($answer27=="B"){$score++;}
		if ($answer28=="A"){$score++;}
		if ($answer29=="C"){$score++;}
		if ($answer30=="A"){$score++;}	

/*				echo '$score';
*/		/*session_start();
		*/
/*		if ($answer2 == "B"){$score++;}
		if ($answer3 == "C"){$score++;}
*/
		/*INSERT INTO `scores`(`username`, `email`, `mobile`, `score`) VALUES ([value-1],[value-2],[value-3],[value-4])
		*/
		/*$sql = "INSERT INTO `scores`(`username`, `email`, `mobile`, `score`) VALUES ('".$username."','".$email."','".$mobile."','".$score."'".")";
		*/
		date_default_timezone_set("Asia/Kolkata");
$time= date("h:i:sa");
			$sql = "UPDATE scores SET score='".$score."',submit_time='".$time."' WHERE email='".$_SESSION['email']."'";
		if ($conn->query($sql) === TRUE)
		{
			/*
		    echo "<br/>Thank you! Ja Ghari!";*/
		    header('Location: thankyou.html');
		} 
		else 
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$conn->close();
	/*echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";*/	
 }
 
?>
