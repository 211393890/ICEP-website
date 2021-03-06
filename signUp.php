<!DOCTYPE html>

<?php
	session_start();
	
	if(isset($_POST["register"]))
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$studentNumber = $_POST['studentNumber'];
		$securityQsn = $_POST['securityQsn'];
		$securityAns = $_POST['securityAns'];
		
		require_once('dbConnect.php');
		
		$sql = "SELECT * FROM tblmember WHERE name ='$name'";
		
		$check = mysqli_fetch_array(mysqli_query($con,$sql));
		
		if(isset($check))
		{
			$_SESSION["message"]= "User with the same name already exist";
			header("Location:message.php");
		}
		else
		{
			$sql = "INSERT INTO tblmember(name,surname,email,gender,password,password2,studentNumber,securityQsn,securityAns) VALUES('$name','$surname','email','$gender','$password','$password2','$studentNumber','$securityQsn','$securityAns')";
					
			if(mysqli_query($con,$sql))
			{
				$_SESSION["message"]= "User has been registered";
				header("Location:registered.php");
			}
			else
			{
				$_SESSION["message"]= "User not registered";
				header("Location:message.php");
			}
		}
			
		mysqli_close($con);
	}
	if(isset($_POST["login"]))
	{
		$studentNumber = $_POST['studentNumber'];
		$password = $_POST['password'];
		
		require_once('dbConnect.php');
		
		$sql = "SELECT * FROM tblmember WHERE studentNumber = '$studentNumber' AND password = '$password'";
		
		$check = mysqli_fetch_array(mysqli_query($con,$sql));
		
		if(isset($check))
		{
			header("Location:registered.php");
		}
		else
		{
	
			header("Location:invalid.php");
		}
			
		mysqli_close($con);
	}
?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>ICEP</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<script type="type/javascript">
		function val()
		{
			if(frm.password.value != frm.password2.value)
			{
				alert("Password don't match");
				return false;
			}
		}
	</script>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
	  </div>
      <a class="navbar-brand" href="#home">
	  
		<div class = "container">
			<div class = "row">
				<div class = "col-md-2 col-xs-6">
					<img src="assets/img/icep.jpg" class = "img-responsive img-circle">
				</div>
			</div>
		</div>

	  </a>
	  <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
			
			<li><a href="index.php" class="smoothScroll">Home</a></li>
		  
		 
			<li class= "dropdown">
				<a href="#" class="dropdown-toggle" data-toggle ="dropdown" role ="button" aria-expanded ="false" > Career <span class="caret"></span> </a>
					
					<ul class ="dropdown-menu">
						<li><a href ="internship.php">Internships</a></li>
						<li role="separator" class="divider"></li>
						<li><a href ="jobs.php">Jobs</a></li>
					</ul>
				
			</li>
          
		  <li> <a href="services.php" class="smoothScroll"> Services</a></li>
          <li> <a href="projects.php" class="smoothScroll"> Projects</a></li>
		  <li> <a href="gallery.php" class="smoothScroll"> Gallery</a></li>
          <li> <a href="team.php" class="smoothScroll">Our Team</a></li>
		  <li> <a href="aboutUs.php" class="smoothScroll"> About Us</a></li>
          <li> <a href="contact.php" class="smoothScroll"> Contact</a></li>
		  <li> <a href="faq.php" class="smoothScroll"> FAQ</a></li>
		  <li> <a href="#popUpWindow" class="smoothScroll"data-toggle="modal" data-target="#popUpWindow"> Login</a>
		</li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>

<div class="container">
	<div class= "modal fade"  id="popUpWindow">
        <div class= "modal-dialog">
            <div class ="modal-content">
                <!--header -->
                <div class= "modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Log In</h3>
                </div>

                <div class= "modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">
                        <div class="form-group">
                            <input type="text" class= "form-control" placeholder="Enter student number">
						</div>

						<div class="form-group">
							<input type="password" class= "form-control" placeholder="Enter password">
						</div> 
                        
						<button class="btn btn-primary btn-block" type="submit" name="login"  value="Login" >Log In</button>
					</form>
				</div>
               
                <div class= "modal-footer">
					<label><a href="forget.html">Forgot password?</a></label><label><a href="signUp.php" >Sign Up?</a></label>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>

<!-- ==== Sign Up ==== -->

<div id="contact" name="contact">
  <div class="container">
    <div class="row">
      


<div id="contact" name="contact">
  <div class="container">
    <div class="row">
      
	  
	  <h2 class ="centered">Sign Up</h2>
			
			<form  action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST" >
			
				<div class="row">
					<div class="col-xs-6 col-md-3" id>
						<h4>Name</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="name" placeholder="" type="text" required />
					</div>
				</div>
				
				<br/>
						
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Surname</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="surname" placeholder="" type="text" required />
					</div>
				</div>		
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Student number</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="studentNumber" placeholder="" type="text" required />
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>E-mail</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="email" placeholder="" type="text" required />
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Gender</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<select class ="form-control" id ="name" name="gender" type ="text" required >
						    <option></option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
				
				
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Password</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="password" placeholder="" type="password" required />
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Confirm password</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="password2" placeholder="" type="password" required />
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Security question</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<select class ="form-control" id ="name" name="securityQuestion" required >
						    <option></option>
							<option>Who was your Grade 1 teacher?</option>
							<option>What is the name of your first school?</option>
							<option>What was your favourite place to visit as a child?</option>
							<option>In what town or city did your mother and father meet?</option>
					</select>
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<h4>Security answer</h4>
					</div>
					
					<div class="col-xs-6 col-md-6">
						<input class="form-control" id="name" name="securityAnswer" placeholder="" type="text" required />
					</div>
				</div>
				
				<div class="row" >
					<div class="col-xs-12 col-md-12">
						<button class="btn btn btn-lg" type="submit" name="register"  value="Sign Up" onClick = "return val();" >Submit</button>
					</div>
				</div
				
				
			</form>
	  
	  
	  
    </div>
  </div>
</div>








<div class = "container">
	<div class= "row">
		<div class = "col-xs-12">
			
			
	
		</div>
	</div>
</div>


<!-- container --> 

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyright &copy; 2015 ICEP. Design by ICEP developers</span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/retina.js"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
<script type="text/javascript" src="assets/js/jquery-func.js"></script>

</body>
</html>
