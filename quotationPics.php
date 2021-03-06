<!DOCTYPE html>
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
			
			<li><a href="index.html" class="smoothScroll">Home</a></li>
		  
		 
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
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class= "form-control" placeholder="Enter student number">
						</div>

						<div class="form-group">
							<input type="password" class= "form-control" placeholder="Enter password">
						</div> 
                        
						<button class="btn btn-primary btn-block">Log In</button>
					</form>
				</div>
               
                <div class= "modal-footer">
					<label><a href="forget.html">Forgot password?</a></label><label><a href="signUp.html" >Sign Up?</a></label>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ==== PORTFOLIO ==== -->
<div id="services" name="portfolio">
  <div class="container">
  <br/><br/>
  
    <div class="row">
		
			<h2 class="centered">Property Quotation</h2>
		
    </div>
	
	<br/><br/>
    <!-- /row -->
    <div class="container">
      <div class="row"> 
        
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/1351857184_95733.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal1" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio01-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
        
        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/downloadd.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal2" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
		
		 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio02-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
		
		
        
        <!-- PORTFOLIO IMAGE 3 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/downloadt.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal3" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
      </div>
      <!-- /row --> 
	  
	   <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio03-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
      
      <!-- PORTFOLIO IMAGE 4 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/download.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal4" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
		
		 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio04-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
        
        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/sandhurst_towers_9160128429317478377.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal5" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
		
		 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio05-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
        
        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/hjk.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal6" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        <!-- /col --> 
      </div>
      <!-- /row --> 
	  
	   <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio06-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
	  
	  
	  
	  
            <!-- PORTFOLIO IMAGE 7 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/hjk.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal7" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
		
		 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio07-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
		
		
		
        
        <!-- PORTFOLIO IMAGE 8 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/folio08.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal8" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
		
		 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio08-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
		
        
        <!-- PORTFOLIO IMAGE 9 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive img-thumbnail" src="assets/img/portfolio/folio09.jpg" alt="">
              <figcaption>
                <h5>ICEP gallery</h5>
                <a data-toggle="modal" href="#myModal9" class="btn btn-default">View</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        <!-- /col --> 
		
		 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ICEP gallery</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio09-preview.jpg" alt=""></p>
                <p>ICEP interns</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
		
      </div>
      <!-- /row --> 
    </div>
    <!-- /row --> 
  </div>
</div>
<!-- /container -->  

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
