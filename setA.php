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

    */
    date_default_timezone_set("Asia/Kolkata");
	$time= date("h:i:sa");
    $sql = "INSERT INTO `round1`(`Srno`,`Firstname`,`Lastname`, `Email`, `Phoneno`) VALUES ('null','".$firstname."','".$lastname."','".$email."','".$mobile."')";

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
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Codeathon</title>
    
  	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    <link rel="stylesheet" href="style.css">  
</head>

<body onkeydown="disableF5()">
	<header class="top">
	    <h4>Gokhale Education Society's</h4>
	    <h2>R. H. Sapat College Of Engineering, Management Studies And Research,</h2>
	    <h4 class="h4">Prin. T.A. Kulkarni Vidyanagar, College Road, Nashik - 5</h4>
	    <h2 class="h2"; style="color: blue;"><marquee>"Value Embedded Quality Technical Education"</marquee></h2>
	</header>
 
	<header class="header">IGNITRA 2K18
		<p>Department of Computer Engineering</p>
	</header>
 <br><br>
  <div class="container" id="ignitra">
<form action="scores" method="post"> </form>
 
		<div class="col-sm-12">
			<div class="quiz">
				<div class="quiz-progress">
					<div class="quiz-progress-bar progress"></div>
				</div>
				<div class="quiz-results">
					<div class="quiz-results-container">
						<h3 class="quiz-results-score"></h3>
						<ul class="quiz-results-list"></ul>
					</div>
				</div>

					<div id="countdown"> </div>
				<div class="quiz-bottom">
					<div class="quiz-container">
						
						<div class="quiz-page active" data-page="1">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	1/25	In a C program snippet, following are valid.<br>
											i) sizeof(int);<br>
											ii) sizeof(int*);<br>
											iii) sizeof(int**);<br>
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio01" data-item="1" name="radio1" value="Only i) would compile successfully and it would return size as 4" />
									<label for="radio01"><span></span><p>Only i) would compile successfully and it would return size as 4</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio02" data-item="1" name="radio1" value="i), ii) and iii) would compile successfully and size of each would be same i.e. 4" />
									<label for="radio02"><span></span><p>i), ii) and iii) would compile successfully and size of each would be same i.e. 4</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio03" data-item="1" name="radio1" value="i), ii) and iii) would compile successfully but the size of each would be different and would be decided at run time" />
									<label for="radio03"><span></span><p>i), ii) and iii) would compile successfully but the size of each would be different and would be decided at run time</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio04" data-item="1" name="radio1" value="ii) and iii) would result in compile error but i) would compile and result in size as 4"/>
									<label for="radio04"><span></span><p>ii) and iii) would result in compile error but i) would compile and result in size as 4</p></label>
								</div>
							</div>
						</div>


						<div class="quiz-page" data-page="2">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	2/25	Assume int is 4 bytes, char is 1 byte and float is 4 bytes. Also, assume that pointer size is 4 bytes (i.e. typical case)<br>
										char *pChar;<br>
										int *pInt;<br>
										float *pFloat;<br>
										 <br>
										sizeof(pChar);<br>
										sizeof(pInt);<br>
										sizeof(pFloat);<br>
										</p>
									
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio05" data-item="2" name="radio2" value="4 4 4" />
									<label for="radio05"><span></span><p>4 4 4</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio06" data-item="2" name="radio2" value="1 4 4" />
									<label for="radio06"><span></span><p>1 4 4</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio07" data-item="2" name="radio2" value="1 4 8" />
									<label for="radio07"><span></span><p>1 4 8</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio08" data-item="2" name="radio2" value="None of the above" />
									<label for="radio08"><span></span><p>None of the above</p></label>
								</div>
							</div>
						</div>

						<div class="quiz-page" data-page="3">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	3/25	Comment on below code.	
											#include "stdlib.h"<br>
											int main()<br>
											{<br>
											 &nbsp;&nbsp;&nbsp;&nbsp;int *pInt;<br>
											 &nbsp;&nbsp;&nbsp;&nbsp;int **ppInt1;<br>
											 &nbsp;&nbsp;&nbsp;&nbsp;int **ppInt2;<br>
											 <br>
											 &nbsp;&nbsp;&nbsp;&nbsp;pInt = (int*)malloc(sizeof(int));<br>
											 &nbsp;&nbsp;&nbsp;&nbsp;ppInt1 = (int**)malloc(10*sizeof(int*));<br>
											 &nbsp;&nbsp;&nbsp;&nbsp;ppInt2 = (int**)malloc(10*sizeof(int*));<br>
											 <br>
											 &nbsp;&nbsp;&nbsp;&nbsp;free(pInt);<br>
											 &nbsp;&nbsp;&nbsp;&nbsp;free(ppInt1);<br>
											&nbsp;&nbsp;&nbsp;&nbsp;free(*ppInt2);<br>
											 return 0;<br>
											}<br>
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio09" data-item="3" name="radio3" value="malloc() for ppInt1 and ppInt2 isn’t correct. It’ll give compile time error" />
									<label for="radio09"><span></span><p>malloc() for ppInt1 and ppInt2 isn’t correct. It’ll give compile time error</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio10" data-item="3" name="radio3" value="free(*ppInt2) is not correct. It’ll give compile time error" />
									<label for="radio10"><span></span><p>free(*ppInt2) is not correct. It’ll give compile time error</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio11" data-item="3" name="radio3" value="free(*ppInt2) is not correct. It’ll give run time error" />
									<label for="radio11"><span></span><p>free(*ppInt2) is not correct. It’ll give run time error</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio12" data-item="3" name="radio3" value="No issue with any of the malloc() and free() i.e. no compile/run time error" />
									<label for="radio12"><span></span><p>No issue with any of the malloc() and free() i.e. no compile/run time error</p></label>
								</div>
							</div>
						</div>

						<div class="quiz-page" data-page="4">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	4/25	With respect to following “for” loops in C, pick the best statement. Assume that there is a prior declaration of 'i' in all cases<br>
											for (i = 0; i < 10 ; i++) // (i)<br>
											for ( ; i < 10 ; i++) // (ii)<br>
											for (i = 0;  ; i++) // (iii)<br>
											for (i = 0; i < 10 ; ) // (iv)<br>
											for ( ; ; ) // (v)<br>
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio13" data-item="4" name="radio4" value="Only (i) and (v) would compile successfully. Also (v) can be used as infinite loop" />
									<label for="radio13"><span></span><p>Only (i) and (v) would compile successfully. Also (v) can be used as infinite loop</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio14" data-item="4" name="radio4" value="Only (i) would compile successfully" />
									<label for="radio14"><span></span><p>Only (i) would compile successfully</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio15" data-item="4" name="radio4" value="All would compile successfully but behavior of (ii), (iii) and (iv) would depend on compiler" />
									<label for="radio15"><span></span><p>All would compile successfully but behavior of (ii), (iii) and (iv) would depend on compiler</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio16" data-item="4" name="radio4" value="All would compile successfully" />
									<label for="radio16"><span></span><p>All would compile successfully</p></label>
								</div>
							</div>
						</div>

						<div class="quiz-page" data-page="5">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	5/25	What’s going to happen when we compile and run the following C program?
											#include "stdio.h"<br>
											 <br>
											int main()<br>
											{<br>
											  &nbsp;&nbsp;&nbsp;&nbsp;int i = 1, j;<br>
											  &nbsp;&nbsp;&nbsp;&nbsp;for ( ; ; )<br>
											  &nbsp;&nbsp;&nbsp;&nbsp;{ <br>
											    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i)<br>
											        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = --i;<br>
											    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (j < 10)<br>
											    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
											       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("IGNITRA");<br>
											       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j++;<br>
											       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
											    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br>
											       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
											  &nbsp;&nbsp;&nbsp;&nbsp;}<br>
											  return 0;<br>
											}<br>
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio17" data-item="5" name="radio5" value="Compile Error" />
									<label for="radio17"><span></span><p>Compile Error</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio18" data-item="5" name="radio5" value="No compile error but it will run into infinite loop printing IGNITRA" />
									<label for="radio18"><span></span><p>No compile error but it will run into infinite loop printing IGNITRA</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio19" data-item="5" name="radio5" value="No compile error and it’ll print IGNITRA 10 times" />
									<label for="radio19"><span></span><p>No compile error and it’ll print IGNITRA 10 times</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio20" data-item="5" name="radio5" value="No compile error but it’ll print IGNITRA 9 times" />
									<label for="radio20"><span></span><p>No compile error but it’ll print IGNITRA 9 times</p></label>
								</div>
							</div>
						</div>

						

						<!--<div class="quiz-page" data-page="6">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	6/25	How many types of inheritance are there in c++?
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio21" data-item="6" name="radio6" value="2" />
									<label for="radio21"><span></span><p>2</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio22" data-item="6" name="radio6" value="3" />
									<label for="radio22"><span></span><p>3</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio23" data-item="6" name="radio6" value="4" />
									<label for="radio23"><span></span><p>4</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio24" data-item="6" name="radio6" value="5" />
									<label for="radio24"><span></span><p>5</p></label>
								</div>
							</div>
						</div>	

						<div class="quiz-page" data-page="7">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	7/25	1. What will be the output of the following C program segment?
											char inchar = 'A';<br>
											switch (inchar)<br>
											{<br>
											case 'A' :
											    printf ("choice A ") ;<br>
											case 'B' :
											    printf ("choice B ") ;<br>
											case 'C' :printf ("choice C ")<br>
											case 'D' :printf ("choice D ")<br>
											case 'E' :printf ("choice E ")<br>
											default:
											    printf ("No Choice") ;<br>
											}
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio25" data-item="7" name="radio7" value="No choice" />
									<label for="radio25"><span></span><p>No choice</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio26" data-item="7" name="radio7" value="Choice A" />
									<label for="radio26"><span></span><p>Choice A</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio27" data-item="7" name="radio7" value="Choice A Choice B No choice" />
									<label for="radio27"><span></span><p>Choice A Choice B No choice</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio28" data-item="7" name="radio7" value="Program gives no output as it is erroneous" />
									<label for="radio28"><span></span><p> Program gives no output as it is erroneous</p></label>
								</div>
							</div>
						</div>		

						<div class="quiz-page" data-page="8">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	8/25	The value of j at the end of the execution of the following C program.<br>
												int incr (int i)<br>
												{<br>
												   &nbsp;&nbsp;&nbsp;&nbsp;static int count = 0;<br>
												   &nbsp;&nbsp;&nbsp;&nbsp;count = count + i;<br>
												   &nbsp;&nbsp;&nbsp;&nbsp;return (count);<br>
												}<br>
												main ()<br>
												{<br>
												   &nbsp;&nbsp;&nbsp;&nbsp;int i,j;<br>
												   &nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i <=4; i++)<br>
												      &nbsp;&nbsp;&nbsp;&nbsp;j = incr(i);<br>
												}
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio29" data-item="8" name="radio8" value="10" />
									<label for="radio29"><span></span><p>10</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio30" data-item="8" name="radio8" value="4" />
									<label for="radio30"><span></span><p>4</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio31" data-item="8" name="radio8" value="6" />
									<label for="radio31"><span></span><p>6</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio32" data-item="8" name="radio8" value="7" />
									<label for="radio32"><span></span><p>7</p></label>
								</div>
							</div>
						</div>		

						<div class="quiz-page" data-page="9">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	9/25	The number of tokens in the following C statement.
											<br>printf("i = %d, &i = %x", i, &i);
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio33" data-item="9" name="radio9" value="3" />
									<label for="radio33"><span></span><p>3</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio34" data-item="9" name="radio9" value="26" />
									<label for="radio34"><span></span><p>26</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio35" data-item="9" name="radio9" value="10" />
									<label for="radio35"><span></span><p>10</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio36" data-item="9" name="radio9" value="21" />
									<label for="radio36"><span></span><p>21</p></label>
								</div>
							</div>
						</div>	

						<div class="quiz-page" data-page="10">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	10/25	In which area of memory, the system stores parameters and local variables whenever a method is invoked? 
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radi037" data-item="10" name="radio10" value="Array" />
									<label for="radio37"><span></span><p>Array</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio38" data-item="10" name="radio10" value="Heap" />
									<label for="radio38"><span></span><p>Heap</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio39" data-item="10" name="radio10" value="Stack" />
									<label for="radio39"><span></span><p>Stack</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio40" data-item="10" name="radio10" value="84" />
									<label for="radio40"><span></span><p>Queue</p></label>
								</div>
							</div>
						</div>	

						<div class="quiz-page" data-page="11">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	11/25<br>	
										main()<br>
										{ <br>
											&nbsp;&nbsp;&nbsp;&nbsp;int i, j, *p; <br>
											&nbsp;&nbsp;&nbsp;&nbsp;i = 25; <br>
											&nbsp;&nbsp;&nbsp;&nbsp;j = 100; <br>
											&nbsp;&nbsp;&nbsp;&nbsp;p = &i; <br>
											&nbsp;&nbsp;&nbsp;&nbsp;printf("%f", i/(*p) ); <br>
										}
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio41" data-item="11" name="radio11" value="Compile error" />
										<label for="radio41"><span></span><p>Compile error</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio42" data-item="11" name="radio11" value="1.00000" />
										<label for="radio42"><span></span><p>1.00000 </p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio43" data-item="11" name="radio11" value="Runtime error" />
										<label for="radio43"><span></span><p>Runtime error</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio44" data-item="11" name="radio11" value="0.00000" />
										<label for="radio44"><span></span><p>0.00000</p></label>
									</div>
								</div>
							</div>

							<div class="quiz-page" data-page="12">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	12/25	What is the size of double variable in bits in C?
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio45" data-item="12" name="radio12" value="8" />
										<label for="radio45"><span></span><p>8</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio46" data-item="12" name="radio12" value="32" />
										<label for="radio46"><span></span><p>32</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio47" data-item="12" name="radio12" value="64" />
										<label for="radio47"><span></span><p>64</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio48" data-item="12" name="radio12" value="16" />
										<label for="radio48"><span></span><p>16</p></label>
									</div>
								</div>
							</div>

							<div class="quiz-page" data-page="13">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	13/25	Between a long pointer and a char pointer , which one consumes more memory? 	
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio49" data-item="13" name="radio13" value="long pointer" />
										<label for="radio49"><span></span><p>long pointer</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio50" data-item="13" name="radio13" value="char pointer" />
										<label for="radio50"><span></span><p>char pointer</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio51" data-item="13" name="radio13" value="Both will occupy same memory" />
										<label for="radio51"><span></span><p>Both will occupy same memory</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio52" data-item="13" name="radio13" value="none of the above" />
										<label for="radio52"><span></span><p>none of above</p></label>
									</div>
								</div>
						    </div>	

						    <div class="quiz-page" data-page="14">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	14/25	Which of these keywords is used to define packages in Java?  	
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio53" data-item="14" name="radio14" value="Pkg" />
										<label for="radio53"><span></span><p>Pkg</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio54" data-item="14" name="radio14" value="Package" />
										<label for="radio54"><span></span><p>Package</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio55" data-item="14" name="radio14" value="pkg" />
										<label for="radio55"><span></span><p>pkg</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio56" data-item="14" name="radio14" value="package" />
										<label for="radio56"><span></span><p>package</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="15">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	15/25	What is the result? <br>

											class Person{<br>
											        &nbsp;&nbsp;&nbsp;&nbsp;public int number;<br>
											}<br>
											public class Test{<br>
											        &nbsp;&nbsp;&nbsp;&nbsp;public void doIt(int i , Person p){<br>
											               &nbsp;&nbsp;&nbsp;&nbsp; i = 5;<br>
											               &nbsp;&nbsp;&nbsp;&nbsp; p.number = 8;<br>
											        }<br>
											        public static void main(String args[]){<br>
											                &nbsp;&nbsp;&nbsp;&nbsp;int x = 0;<br>
											                &nbsp;&nbsp;&nbsp;&nbsp;Person p = new Person();<br>
											               &nbsp;&nbsp;&nbsp;&nbsp; new Test().doIt(x, p);<br>
											               &nbsp;&nbsp;&nbsp;&nbsp; System.out.println(x + " " + p.number);<br>
											        }<br>
											}<br>

											  	
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio57" data-item="15" name="radio15" value="0 8" />
										<label for="radio57"><span></span><p>0 8</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio58" data-item="15" name="radio15" value="5 0" />
										<label for="radio58"><span></span><p>5 0</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio59" data-item="15" name="radio15" value="0 0" />
										<label for="radio59"><span></span><p>0 0</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio60" data-item="15" name="radio15" value="5 8" />
										<label for="radio60"><span></span><p>5 8</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="16">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	16/25	The first and second arguments of fopen are? 
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio61" data-item="16" name="radio16" value="A character string containing the name of the file & the second argument is the mode" />
										<label for="radio61"><span></span><p>A character string containing the name of the file & the second argument is the mode</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio62" data-item="16" name="radio16" value="A character string containing the name of the user & the second argument is the mode" />
										<label for="radio62"><span></span><p>A character string containing the name of the user & the second argument is the mode</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio63" data-item="16" name="radio16" value="A character string containing file poniter & the second argument is the mode" />
										<label for="radio63"><span></span><p>A character string containing file poniter & the second argument is the mode</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio64" data-item="16" name="radio16" value="none of the mentioned" />
										<label for="64"><span></span><p>none of the mentioned</p></label>
									</div>
								</div>
						    </div>


						    <div class="quiz-page" data-page="17">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	17/25	What is the meant by ‘a’ in the following operation?<br>
													fp = fopen(“Random.txt”, “a”); <br>
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio65" data-item="17" name="radio17" value="Attach" />
										<label for="radio65"><span></span><p>Attach</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio66" data-item="17" name="radio17" value="Append" />
										<label for="radio66"><span></span><p>Append</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio67" data-item="17" name="radio17" value="Apprehend" />
										<label for="radio67"><span></span><p>Apprehend</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio68" data-item="17" name="radio17" value="Add" />
										<label for="68"><span></span><p>Add</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="18">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	18/25	 Pick out the correct objects about the instantiation of output stream.
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio69" data-item="18" name="radio18" value="cout" />
										<label for="radio69"><span></span><p>cout</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio70" data-item="18" name="radio18" value="cerr" />
										<label for="radio70"><span></span><p>cerr</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio71" data-item="18" name="radio18" value="clog" />
										<label for="radio71"><span></span><p>clog</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio72" data-item="18" name="radio18" value="all of the above"/>
										<label for="radio72"><span></span><p>all of the above</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="19">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	19/25	 Which of these interface is not a part of Java’s collection framework? 
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio73" data-item="19" name="radio19" value="List" />
										<label for="radio73"><span></span><p>List</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio74" data-item="19" name="radio19" value="Set" />
										<label for="radio74"><span></span><p>Set</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio75" data-item="19" name="radio19" value="SortedMap" />
										<label for="radio75"><span></span><p>SortedMap</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio76" data-item="19" name="radio19" value="SortedList" />
										<label for="radio76"><span></span><p>SortedList</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="20">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	20/25	 
											int main()<br>
											{<br>
											int  const  p = 5;<br>
											cout << ++p;<br>
											return 0;<br>
											}<br>
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio77" data-item="20" name="radio20" value="5" />
										<label for="radio77"><span></span><p>5</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio78" data-item="20" name="radio20" value="6" />
										<label for="radio78"><span></span><p>6</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio79" data-item="20" name="radio20" value="Error" />
										<label for="radio79"><span></span><p>Error</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio80" data-item="20" name="radio20" value="garbage value" />
										<label for="radio80"><span></span><p>garbage value</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="21">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	21/25	 What does derived class does not inherit from the base class?
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio81" data-item="21" name="radio21" value="constructor and destructor" />
										<label for="radio81"><span></span><p>cout</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio82" data-item="21" name="radio21" value="friends" />
										<label for="radio82"><span></span><p>friends</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio83" data-item="21" name="radio21" value="operator = ()members" />
										<label for="radio83"><span></span><p>operator = ()members</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio84" data-item="21" name="radio21" value="all of the above" />
										<label for="radio84"><span></span><p>all of the above</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="22">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	22/25	 Which operator is having the highest precedence?
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio85" data-item="22" name="radio22" value="postfix" />
										<label for="radio85"><span></span><p>postfix</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio86" data-item="22" name="radio22" value="prefix" />
										<label for="radio86"><span></span><p>prefix</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio87" data-item="22" name="radio22" value="unary" />
										<label for="radio87"><span></span><p>unary</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio88" data-item="22" name="radio22" value="equality" />
										<label for="radio88"><span></span><p>equality</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="23">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	23/25	
												try 
												{ 
												    int x = 0; 
												    int y = 5 / x; 
												} 
												catch (Exception e) 
												{
												    System.out.println("Exception"); 
												} 
												catch (ArithmeticException ae) 
												{
												    System.out.println(" Arithmetic Exception"); 
												} 
												System.out.println("finished");
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio89" data-item="23" name="radio23" value="finished" />
										<label for="radio89"><span></span><p>finished</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio90" data-item="23" name="radio23" value="Arithmetic Exception" />
										<label for="radio90"><span></span><p>Arithmetic Exception</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio91" data-item="23" name="radio23" value="Compilation error" />
										<label for="radio91"><span></span><p>Compilation Error</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio92" data-item="23" name="radio23" value="Exception" />
										<label for="radio92"><span></span><p>Exception</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="24">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	24/25	enum types are processed by? 
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio93" data-item="24" name="radio24" value="Compiler" />
										<label for="radio93"><span></span><p>Compiler</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio94" data-item="24" name="radio24" value="Linker" />
										<label for="radio94"><span></span><p>Linker</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio95" data-item="24" name="radio24" value="Preprocessor" />
										<label for="radio95"><span></span><p>Preprocessor</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio96" data-item="24" name="radio24" value="Assembler" />
										<label for="radio96"><span></span><p>Assembler</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="25">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	25/25	What will be the output?
											public class Ignitra<br>
											{ <br>
											    public static void main(String[] args) <br>
											    {<br>
											        String s = "foo"; <br>
											        Object o = (Object)s; <br>
											        if (s.equals(o)) <br>
											        { <br>
											            System.out.print("AAA"); <br>
											        } <br>
											        else <br>
											        {<br>
											            System.out.print("BBB"); <br>
											        } <br>
											        if (o.equals(s)) <br>
											        {<br>
											            System.out.print("CCC"); <br>
											        } <br>
											        else  <br>
											        { <br>
											            System.out.print("DDD");  <br>
											        }  <br>
											    }  <br>
											} <br>
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio97" data-item="25" name="radio25" value="AAACCC" />
										<label for="radio97"><span></span><p>AAACCC</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio98" data-item="25" name="radio25" value="AAADDD" />
										<label for="radio98"><span></span><p>AAADDD</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio99" data-item="25" name="radio25" value="BBBCCC" />
										<label for="radio99"><span></span><p>BBBCCC</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio100" data-item="25" name="radio25" value="BBBDDD" />
										<label for="radio100"><span></span><p>BBBDDD</p></label>
									</div>
								</div>
						    </div> -->


					<div class="quiz-controller">
						<div class="quiz-prev-btn">
							<button>Prev</button>
						</div>
						<div class="quiz-next-btn">
							<button disabled="true">Next</button>
						</div>
						<div class="quiz-finish-btn">
							<button>Submit</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script  src="indexA.js"></script>
	
	<script type="text/javascript">
	      var seconds = 1800;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             jQuery('.quiz-next-btn').hide();
             jQuery('.quiz-finish-btn').show();
             jQuery('.quiz-prev-btn').hide();
             document.container.submitData();


          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);	
</script>

<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
    	alert("Sorry, this functionality is disabled!!")
        e.preventDefault();
    });
   
    //Disable mouse right click
    /*$("body").on("contextmenu",function(e){
    	alert("Sorry this functionality is disabled!!!")
        return false;
    });*/
});
function disableF5(e) { 
	if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); 
};

$(document).ready(function()
{
	$('body').on("keydown", disableF5);
});

/*window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler() {
    switch (event.keyCode) {
        case 116 : // 'F5'
            event.returnValue = false;
            event.keyCode = 0;
            window.status = "We have disabled F5";
            break;
    }
}*/

</script>


		
		<footer class="footer">
			Best Of Luck !!!
		</footer>
		
</body>
</html>
