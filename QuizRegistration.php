<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz Portal</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/StyleQuiz.css">
    <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="bg-body reg-bg" style="height:800px;">

        <div class="inner-bg" style="padding-top:80px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text">
                        <h1 class="text-center"><strong>Codeathon</strong></h1>
                        <h1 class="text-center"><strong>Quiz</strong> Registration</h1>
                        <div class="description"> 
                    </div>                        
                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Register now</h3>
                            <p>Fill in the form below to get instant access:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="setA.php" method="POST" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">First name</label>
                                <input id="form-first-name" type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name">Last name</label>
                                <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="Email" name="form-email" placeholder="Email..." required class="form-email form-control" id="form-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-mobileno">Mobile Number</label>
                                <input type="text" name="form-mobileno" placeholder="Mobile Number..." required class="form-mobileno form-control" id="form-mobileno">
                            </div>
                            <!-- <a href="setA.html"> -->
                            <button type="submit" class="btn" name="start_quiz">Start Quiz</button><!--</a>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bg">
    <div class="w-copyright text-center"><p>&copy;Ignitra_Codeathon 2017-18. All rights reserved<p></div>
</div>
</body>
</html>
