<?php
session_start();
 ?>

<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Dashboard</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<p style="color:Blue;background:yellow"><marquee>Please Stay Aware about Current Situvation. Maintain the social distencing. Covid-19 Stay safe stay home. Wear mask and wash your hands regular.</marquee>  </p>
</head>
<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div class="topbar text-center hidden-xs">
       
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dashboard.php"><img src="logo.png" alt="images"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll-nav="0" href="#main-banner" class="active">Home</a></li>
						
						                                              
                    </ul>
					
					
					
                </div>
				<li Style="text-Align:right"><a  href="logout.php">Logout</a></li>
            </div>
			
        </nav>
    </header>

    

    

    <div id="event" data-scroll-index="3" class="section wb" style="background-image: url('dashboard.jpg');">
        <div class="container">
		
            <div class="section-title text-center">
                <h3>Disease</h3>
                
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="participate-wrap">
                        <!--<small>Technology</small>-->
						<figure>
							<img src="uploads/heart.jpg" alt="" class="img-responsive">
							<!--<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>-->
						</figure>
						<div class="event_dit">
							<h4>Heart Disease</h4>
							
							<p>Some Details of Heart Disease </p>
							<a href="heart.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="participate-wrap">
                        <!--<small>Let's Speak with Us</small>-->
						<figure>
							<img src="uploads/head.jpg" alt="" class="img-responsive">
							<!--<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>-->
						</figure>
						<div class="event_dit">
							<h4>Head Disease</h4>
							
							<p>Some Details of Head Disease </p>
							<a href="head.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="participate-wrap">
                        <!--<small>Let's Speak with Us</small>-->
                        <figure>
							<img src="uploads/stomach.jpg" alt="" class="img-responsive">
							<!--<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>-->
						</figure>
                        <div class="event_dit">
							<h4>Stomach Disease</h4>
							
							<p>Some Details of Stomach Disease </p>
							<a href="stomach.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">This website is made by group No 20 of BCA department of I.P college as a Major Project</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/camera.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>