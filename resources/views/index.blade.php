<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Airline</title>
        <meta name="description" content="">
<!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <style>
            input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color:blue;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 /* width: 100%;*/
}

button:hover {
  opacity: 0.5;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
a{
  text-decoration:none;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
            </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="travel html5 template" title="travel html5 template">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="search">Search</a></li>
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="user_reg">Register</a></li>
                                    
                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="search">Search</a></li>
                                <li><a href="login">Login</a></li>
                                <li><a href="user_reg">Register</a></li>
                               
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
        

        <div class="flexslider">
            <ul class="slides">
                <li>
                
                    <div class="overlay"></div>
                   <img src="{{asset('img/templatemo_slide_1.jpg')}}" alt="Special 1">
                   
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">Airline</span>
                                    <h3 class="title">Your journey</h3>
                                    <p>Travel is a responsive Bootstrap layout from 
                                    <span class="blue">template</span><span class="green">mo</span> website.
										All images used in this template are from 
                            			<a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a>.</p>
                                    <a href="#" class="slider-btn">Search</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="{{asset('/img/templatemo_slide_2.jpg')}}" alt="Special 2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">Airline</span>
                                    <h3 class="title">Bercelona, Spain</h3>
                                    <p>You may visit <a href="http://tourkrub.co" target="_parent">Tour Krub</a> for Thai Tour Packages. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href="#" class="slider-btn">Happy Passenger</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay"></div>
                    <img src="{{asset('img/templatemo_slide_3.jpg')}}" alt="Special 3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <span class="price">AIRLINE</span>
                                    <h3 class="title">Basel, Switzerland</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas.</p>
                                    <a href="#" class="slider-btn">Book Now</a>--->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> <!-- /.flexslider -->

        
        
        <div class="container">
            <div class="row">
                <div class="our-listing owl-carousel">
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>vISTARA</h4>
                            </div>
                            <img src="{{asset('img/destination_1.jpg')}}" alt="destination 1">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>AIRLINE</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas</span>
                            <a href="#" class="price-btn">Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>INDIGO</h4>
                            </div>
                            <img src="{{asset('img/destination_2.jpg')}}" alt="destination 2">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>AIRLINE</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas</span>
                            <a href="#" class="price-btn">$2,200 Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>GO AIR</h4>
                            </div>
                            <img src="{{asset('img/destination_3.jpg')}}" alt="destination 3">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>Berlin, Hamburg, Munich</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas</span>
                            <a href="#" class="price-btn"> Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>SPICEJET</h4>
                            </div>
                            <img src="{{asset('img/destination_4.jpg')}}" alt="destination 4">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>AIRLINE</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum nibh sit amet felis mattis, eu convallis risus egestas</span>
                            <a href="#" class="price-btn"> Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Netherlands</h4>
                            </div>
                            <img src="{{asset('img/destination_5.jpg')}}" alt="destination 5">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>Amsterdam, Delft, The Hague</h5>
                            <span>BEST HOTEL, 6 NIGHTS, 7 STARS</span>
                            <a href="#" class="price-btn">$5,500 Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>Switzerland</h4>
                            </div>
                            <img src="{{asset('img/destination_6.jpg')}}" alt="destination 6">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <h5>Zürich, Geneva, Basel</h5>
                            <span>NEW HOTEL, 7 NIGHTS, 7 STARS</span>
                            <a href="#" class="price-btn">$6,600 Book Now</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

		<div class="middle-content"></div>

        <div class="partner-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="{{asset('img/partners/partner1.png')}}" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="{{asset('img/partners/partner2.png')}}" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="{{asset('img/partners/partner3.png')}}" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="{{asset('img/partners/partner1.png')}}" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="{{asset('img/partners/partner2.png')}}" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item last">
                            <img src="{{asset('img/partners/partner3.png')}}" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->

		

        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>
                            	
                                Copyright &copy; 2021 <a href="#">Airlines</a>
                            
                            
                            <!--
                            | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a>
                            -->
                            
                            </span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- templatemo 409 travel -->  
        
    </body>
</html>