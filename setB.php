<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Codeathon</title>
    
  	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900|Open+Sans:400,300,600,700,800|Raleway:400,100,200,300,500,600,700,800,900'>

    <link rel="stylesheet" href="style.css">  
</head>

<body>
	<header class="top">
	    <h4>Gokhale Education Society's</h4>
	    <h2>R. H. Sapat College Of Engineering, Management Studies And Research,</h2>
	    <h4 class="h4">Prin. T.A. Kulkarni Vidyanagar, College Road, Nashik - 5</h4>
	    <h2 class="h2"; style="color: blue;"><marquee>"Value Embedded Quality Technical Education"</marquee></h2>
	</header>
 
	<header class="header">IGNITRA 2K18
		<p>Department of Computer Engineering</p>
	</header>
 
  <div class="container" id="ignitra">

 
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
									<p>	1/25	Which keyword is used to handle the expection?
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio01" data-item="1" name="radio1" value="try" />
									<label for="radio01"><span></span><p>try</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio02" data-item="1" name="radio1" value="throw" />
									<label for="radio02"><span></span><p>throw</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio03" data-item="1" name="radio1" value="catch" />
									<label for="radio03"><span></span><p>catch</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio04" data-item="1" name="radio1" value="none of the mentioned"/>
									<label for="radio04"><span></span><p>none of the mentioned</p></label>
								</div>
							</div>
						</div>


						<div class="quiz-page" data-page="2">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	2/25	Comment on the output of following code:<br>

       								 #include < stdio.h ><br>

       								 main()<br>

       								 {<br>

            							char *p = 0;<br>

            							*p = 'a';<br>

            							printf("value in pointer p is %c\n", *p);<br>

        							 }</p>
									
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio05" data-item="2" name="radio2" value="It will print a" />
									<label for="radio05"><span></span><p>It will print a</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio06" data-item="2" name="radio2" value="It will print 0" />
									<label for="radio06"><span></span><p>It will print 0</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio07" data-item="2" name="radio2" value="Compile time error" />
									<label for="radio07"><span></span><p>Compile time error</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio08" data-item="2" name="radio2" value="Run time error" />
									<label for="radio08"><span></span><p>Run time error</p></label>
								</div>
							</div>
						</div>

						<div class="quiz-page" data-page="3">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	3/25	What is the output of this C code?<br>

        										#include < stdio.h ><br>

        										main()<br>

										        {<br>

										            char *p = "GESCOE Codeathon-Test";<br>

										            p[0] = 'a';<br>

										            p[1] = 'b';<br>

										            printf("%s", p);<br>

										        }
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio09" data-item="3" name="radio3" value="abSCOE Codeathon-Test" />
									<label for="radio09"><span></span><p>abSCOE Codeathon-Test</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio10" data-item="3" name="radio3" value="GESCOE Codeathon-Test" />
									<label for="radio10"><span></span><p>GESCOE Codeathon-Test</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio11" data-item="3" name="radio3" value="Compile time error" />
									<label for="radio11"><span></span><p>Compile time error</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio12" data-item="3" name="radio3" value="Run time error" />
									<label for="radio12"><span></span><p>Run time error</p></label>
								</div>
							</div>
						</div>

						<div class="quiz-page" data-page="4">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	4/25	How many arguments can be passed to main()?
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio13" data-item="4" name="radio4" value="Infinite" />
									<label for="radio13"><span></span><p>Infinite</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio14" data-item="4" name="radio4" value="Only one" />
									<label for="radio14"><span></span><p>Only one</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio15" data-item="4" name="radio4" value="System Depedent" />
									<label for="radio15"><span></span><p>System Dependent</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio16" data-item="4" name="radio4" value="none" />
									<label for="radio16"><span></span><p>none</p></label>
								</div>
							</div>
						</div>

						<div class="quiz-page" data-page="5">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	5/25	When will ‘finally’ keyword be executed?
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio17" data-item="5" name="radio5" value="It will execute at the start of the program" />
									<label for="radio17"><span></span><p>It will execute at the start of the program</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio18" data-item="5" name="radio5" value="It will be executed at the end of the program even if the exception arised" />
									<label for="radio18"><span></span><p>It will be executed at the end of the program even if the exception arised</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio19" data-item="5" name="radio5" value="It will be executed at the starting of the program even if the exception arises" />
									<label for="radio19"><span></span><p>It will be executed at the starting of the program even if the exception arises</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio20" data-item="5" name="radio5" value="none of the mentioned" />
									<label for="radio20"><span></span><p>none of the mentioned</p></label>
								</div>
							</div>
						</div>

						

						<div class="quiz-page" data-page="6">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	6/25	What is the output of this program, Command line execution is done as – “java Output command Line 10 A b 4 N”?<br>

										        class Output <br>

										        {<br>

										            public static void main(String args[]) <br>

										            {<br>

										                System.out.print("(int)args[2] * 2");<br>

										            }<br>

										        }<br>
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio21" data-item="6" name="radio6" value="garbage value" />
									<label for="radio21"><span></span><p>garbage value</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio22" data-item="6" name="radio6" value="10" />
									<label for="radio22"><span></span><p>10</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio23" data-item="6" name="radio6" value="20" />
									<label for="radio23"><span></span><p>20</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio24" data-item="6" name="radio6" value="8" />
									<label for="radio24"><span></span><p>8</p></label>
								</div>
							</div>
						</div>	

						<div class="quiz-page" data-page="7">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	7/25	What is the output of this C code?<br>

										        #include < stdio.h ><br>

										        int main()<br>

										        {<br>

										            float f = 0.1;<br>

										            if (f == 0.1)<br>

										                printf("True");<br>

										            else<br>

										                printf("False");<br>

										        }<br>
									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio25" data-item="7" name="radio7" value="True" />
									<label for="radio25"><span></span><p>True</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio26" data-item="7" name="radio7" value="False" />
									<label for="radio26"><span></span><p>False</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio27" data-item="7" name="radio7" value="" />
									<label for="radio27"><span></span><p></p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio28" data-item="7" name="radio7" value="" />
									<label for="radio28"><span></span><p></p></label>
								</div>
							</div>
						</div>		

						<div class="quiz-page" data-page="8">
							<div class="quiz-content">
								<div class="quiz-question">
									<p>	8/25	The value of j at the end of the execution of the following C program.<br>
												int incr (int i)<br>
												{<br>
												  &nbsp;&nbsp;&nbsp;&nbsp; static int count = 0;<br>
												  &nbsp;&nbsp;&nbsp;&nbsp; count = count + i;<br>
												  &nbsp;&nbsp;&nbsp;&nbsp; return (count);<br>
												}<br>
												main ()<br>
												{<br>
												  &nbsp;&nbsp;&nbsp;&nbsp; int i,j;<br>
												  &nbsp;&nbsp;&nbsp;&nbsp; for (i = 0; i <=4; i++)<br>
												   &nbsp;&nbsp;&nbsp;&nbsp;   j = incr(i);<br>
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
									<p>	10/25	What will be the output?<br>

												void main()<br>
												{<br>
												      &nbsp;&nbsp;&nbsp;&nbsp;static int var = 5;<br>
												      &nbsp;&nbsp;&nbsp;&nbsp;printf("%d ", var--);<br>
												      &nbsp;&nbsp;&nbsp;&nbsp;if(var)<br>
												            &nbsp;&nbsp;&nbsp;&nbsp;main();<br>
												}<br>


									</p>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radi037" data-item="10" name="radio10" value="5 5 5 5 5" />
									<label for="radio37"><span></span><p>5 5 5 5 5 </p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio38" data-item="10" name="radio10" value="5 4 3 2 1" />
									<label for="radio38"><span></span><p>5 4 3 2 1</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio39" data-item="10" name="radio10" value="Infinite Loop" />
									<label for="radio39"><span></span><p>Infinite Loop</p></label>
								</div>
								<div class="quiz-item">
									<input type="radio" id="radio40" data-item="10" name="radio10" value="None of these" />
									<label for="radio40"><span></span><p>None of these</p></label>
								</div>
							</div>
						</div>	

						<div class="quiz-page" data-page="11">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	11/25	If a class contains pure virtual function, then it is termed as____________________ .	
										
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio41" data-item="11" name="radio11" value="Virtual class" />
										<label for="radio41"><span></span><p>Virtual class</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio42" data-item="11" name="radio11" value="Sealed Class" />
										<label for="radio42"><span></span><p>Sealed Class</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio43" data-item="11" name="radio11" value="Pure Local Class" />
										<label for="radio43"><span></span><p>Pure Local Class</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio44" data-item="11" name="radio11" value="Abstract Class" />
										<label for="radio44"><span></span><p>Abstract Class</p></label>
									</div>
								</div>
							</div>

							<div class="quiz-page" data-page="12">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	12/25	What is the size of int variable in Java?
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
										<p>	13/25	When a virtual function is redefined by the derived class, it is called___________.	
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio49" data-item="13" name="radio13" value="Overloading" />
										<label for="radio49"><span></span><p>Overloading</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio50" data-item="13" name="radio13" value="Overriding" />
										<label for="radio50"><span></span><p>Overriding</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio51" data-item="13" name="radio13" value="Rewriting" />
										<label for="radio51"><span></span><p>Rewriting</p></label>
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
										<p>	14/25	The following Syntax is used for?<br>

													class Subclass-name extends Superclass-name<br>
													{<br>
													//methods and fields<br>
													}<br>
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio53" data-item="14" name="radio14" value="Polymorphism" />
										<label for="radio53"><span></span><p>Polymorphism</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio54" data-item="14" name="radio14" value="Inheritance" />
										<label for="radio54"><span></span><p>Inheritance</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio55" data-item="14" name="radio14" value="Interface" />
										<label for="radio55"><span></span><p>Interface</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio56" data-item="14" name="radio14" value="none of the above" />
										<label for="radio56"><span></span><p>none of the above</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="15">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	15/25	A function 'p' that accepts a pointer to a character as argument and returns a pointer to an array of integer can be declared as
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio57" data-item="15" name="radio15" value="int(*p(char *))[]" />
										<label for="radio57"><span></span><p>int(*p(char *))[]</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio58" data-item="15" name="radio15" value="int *p(char *)[]
 " />
										<label for="radio58"><span></span><p>int *p(char *)[]
 </p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio59" data-item="15" name="radio15" value="int (*p) (char *)[]
" />
										<label for="radio59"><span></span><p>int (*p) (char *)[]
</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio60" data-item="15" name="radio15" value="none of these" />
										<label for="radio60"><span></span><p>none of these</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="16">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	16/25	Which stream class is to only write on files ?
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio61" data-item="16" name="radio16" value="fstream" />
										<label for="radio61"><span></span><p>fstream</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio62" data-item="16" name="radio16" value="istream" />
										<label for="radio62"><span></span><p>istream</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio63" data-item="16" name="radio16" value="ostream" />
										<label for="radio63"><span></span><p>ostream</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio64" data-item="16" name="radio16" value="iostream" />
										<label for="64"><span></span><p>iostream</p></label>
									</div>
								</div>
						    </div>


						    <div class="quiz-page" data-page="17">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	17/25	<br>	What does the following segment of code do?<br>
													fprintf(fp, “IGNITRA”);  <br>
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio65" data-item="17" name="radio17" value="It writes “IGNITRA” into the file pointed by fp" />
										<label for="radio65"><span></span><p>It writes “IGNITRA” into the file pointed by fp</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio66" data-item="17" name="radio17" value="It reads “IGNITRA” from the file and prints on display" />
										<label for="radio66"><span></span><p>It reads “IGNITRA” from the file and prints on display</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio67" data-item="17" name="radio17" value="It writes as well as reads “IGNITRA” to and from the file and prints it" />
										<label for="radio67"><span></span><p>It writes as well as reads “IGNITRA” to and from the file and prints it</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio68" data-item="17" name="radio17" value="None of the mentioned" />
										<label for="68"><span></span><p>None of the mentioned</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="18">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	18/25	 Which is/are is the concept of Polymorphism?
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio69" data-item="18" name="radio18" value="(i) Virtual function" />
										<label for="radio69"><span></span><p>Virtual Function</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio70" data-item="18" name="radio18" value="(ii) Function Overloading" />
										<label for="radio70"><span></span><p>Function Overloading</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio71" data-item="18" name="radio18" value="Only (ii)" />
										<label for="radio71"><span></span><p>Only (ii)</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio72" data-item="18" name="radio18" value="Both (i) and (ii)"/>
										<label for="radio72"><span></span><p>Both (i) and (ii)</p></label>
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
										<p>	 Which rule will not affect the friend function?
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio77" data-item="20" name="radio20" value="private and protected members of a class cannot be accessed from outside" />
										<label for="radio77"><span></span><p>private and protected members of a class cannot be accessed from outside</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio78" data-item="20" name="radio20" value="private and protected member can be accessed anywhere" />
										<label for="radio78"><span></span><p>private and protected member can be accessed anywhere</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio79" data-item="20" name="radio20" value="protected member can be accessed anywhere" />
										<label for="radio79"><span></span><p>protected member can be accessed anywhere</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio80" data-item="20" name="radio20" value="none of the mentioned" />
										<label for="radio80"><span></span><p>none of the mentioned</p></label>
									</div>
								</div>
						    </div>

						    <div class="quiz-page" data-page="21">
								<div class="quiz-content">
									<div class="quiz-question">
										<p>	21/25	 If the following structure is written to a file using fwrite(), can fread() read it back successfully? <br>
													 	struct emp
														{
														    char *n;
														    int age;
														};
														struct emp e={"IGNITRA", 15};
														FILE *fp;
														fwrite(&e, sizeof(e), 1, fp);
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio81" data-item="21" name="radio21" value="yes" />
										<label for="radio81"><span></span><p>yes</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio82" data-item="21" name="radio21" value="no" />
										<label for="radio82"><span></span><p>no</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio83" data-item="21" name="radio21" value="" />
										<label for="radio83"><span></span><p></p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio84" data-item="21" name="radio21" value="" />
										<label for="radio84"><span></span><p></p></label>
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
										<p>	23/25	What will be printed?<br>
												   #include < iostream ><br>

											       using namespace std;<br>

											       int main()<br>

											       {<br>

											           int arr[] = {4, 5, 6, 7};<br>

											           int *p = (arr + 1);<br>

											           cout << arr;<br>

											           return 0;<br>

											       }<br>
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio89" data-item="23" name="radio23" value="4" />
										<label for="radio89"><span></span><p>4</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio90" data-item="23" name="radio23" value="address of arr" />
										<label for="radio90"><span></span><p>address of arr</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio91" data-item="23" name="radio23" value="5" />
										<label for="radio91"><span></span><p>5</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio92" data-item="23" name="radio23" value="7" />
										<label for="radio92"><span></span><p>7</p></label>
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
											public void test(int x) 
											{ 
											    int odd = 1; 
											    if(odd) /* Line 4 */
											    {
											        System.out.println("odd"); 
											    } 
											    else 
											    {
											        System.out.println("even"); 
											    } 
											}
										</p>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio97" data-item="25" name="radio25" value="Compilation fails" />
										<label for="radio97"><span></span><p>Compilation fails</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio98" data-item="25" name="radio25" value="odd will always be output" />
										<label for="radio98"><span></span><p>odd will always be output</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio99" data-item="25" name="radio25" value="even will always be output" />
										<label for="radio99"><span></span><p>even will always be output</p></label>
									</div>
									<div class="quiz-item">
										<input type="radio" id="radio100" data-item="25" name="radio25" value="odd will be output for odd values of x, and even for even values" />
										<label for="radio100"><span></span><p>odd will be output for odd values of x, and even for even values</p></label>
									</div>
								</div>
						    </div>
						
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
	<script  src="indexB.js"></script>
	
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
    $("body").on("contextmenu",function(e){
    	alert("Sorry this functionality is disabled!!!")
        return false;
    });
});
</script>

		<footer class="footer">
			Best Of Luck !!!
		</footer>
</body>
</html>
