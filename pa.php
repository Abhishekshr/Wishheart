<?php
$c=@$_POST[uname];
$d=@$_POST[psw];
mysql_connect("localhost","root");
mysql_select_db("wishheart");
$res=mysql_query("select * from data where username='$c' and password='$d'");
$cnt=mysql_num_rows($res);

if($cnt==0)
{
echo"not welcome";
}
else
{
?>

 <!DOCTYPE html>
 <html lang="en">

     <head>

         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>MyWisheart:WishWithUs</title><link rel="shortcut icon" href="logo2.png">

         <!-- CSS -->
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
         <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
         <link rel="stylesheet" href="assets/elegant-font/code/style.css">
         <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="assets/css/magnific-popup.css">
 		<link rel="stylesheet" href="assets/css/form-elements.css">
         <link rel="stylesheet" href="assets/css/style.css">
         <link rel="stylesheet" href="assets/css/media-queries.css">

         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->

         <!-- Favicon and touch icons -->

         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
         <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 <style>

 input[type=textarea], input[type=password] ,input[type=email],input[type=date]{
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     box-sizing: border-box;
 }


 button {
     display: inline-block;
 		margin: 0 5px;
 		padding: 15px 20px;
 		background: #2bcc60;
 		border: 0;
 		font-size: 22px;
 	    font-weight: 300;
 	    line-height: 22px;
 	    color: #fff;
     -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px;
 }

 button:hover {
     outline: 0; opacity: 0.6; color: #fff;

 }


 .cancelbtn {
     width: auto;
     padding: 10px 18px;
     background-color: #f44336;
 }


 .imgcontainer {
     textarea-align: center;
     margin: 24px 0 12px 0;
     position: relative;
 }

 img.avatar {
     width: 40%;
     border-radius: 50%;
 }

 .container1 {
     padding: 16px;
 }

 span.psw {
     float: right;
     padding-top: 16px;
 }


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


 .modal-content {
     background-color: #fefefe;
     margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
     border: 1px solid #888;
     width: 100%; /* Could be more or less, depending on screen size */
 }


 .close {
     position: absolute;

     right: 45px;
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
 .close1 {
     position: absolute;
     right:20px;
     top: 85px;
     color: #000;
     font-size: 40px;
     font-weight: bold;
 }

 .close1:hover,
 .close1:focus {
     color: red;
     cursor: pointer;
 }


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


 @media screen and (max-width: 300px) {
     span.psw {
        display: block;
        float: none;
     }
     .cancelbtn {
        width: 100%;
     }
 }

 * {box-sizing:border-box}
 .mySlides {display:none}

 /* Slideshow container */
 .slideshow-container {
   max-width: 1000px;
   position: relative;
   margin: auto;
 }
 /* Next & previous buttons */
 .prev, .next {
   cursor: pointer;
   position: absolute;
   top: 50%;
   width: auto;
   padding: 16px;
   margin-top: -22px;
   color: white;
   font-weight: bold;
   font-size: 18px;
   transition: 0.6s ease;
   border-radius: 0 3px 3px 0;
 }

 /* Position the "next button" to the right */
 .next {
   right: 0;
   border-radius: 3px 0 0 3px;
 }

 /* On hover, add a black background color with a little bit see-through */
 .prev:hover, .next:hover {
   background-color: rgba(0,0,0,0.8);
 }

 /* Caption textarea */
 .textarea {
   color: #0000ff;
   font-size: 15px;
   padding: 8px 12px;
   position: absolute;
   bottom: 8px;
   width: 100%;
   textarea-align: center;
 }


 /* Number textarea (1/4 etc) */
 .numbertextarea {
   color: #f2f2f2;
   font-size: 12px;
   padding: 8px 12px;
   position: absolute;
   top: 0;
 }
 /* The dots/bullets/indicators */
 .dot {
   height: 13px;
   width: 13px;
   margin: 0 2px;
   background-color: #bbb;
   border-radius: 50%;
   display: inline-block;
   transition: background-color 0.6s ease;
 }

 .passive, .dot:hover {
   background-color: #717171;
 }

 /* Fading animation */
 .fade {
   -webkit-animation-name: fade;
   -webkit-animation-duration:6s;
   animation-name: fade;
   animation-duration: 6s;
 }


 @-webkit-keyframes fade {
   from {opacity: .4}
   to {opacity: 1}
 }

 @keyframes fade {
   from {opacity: .4}
   to {opacity: 1}
 }
 /* On smaller screens, decrease textarea size */
 @media only screen and (max-width: 300px) {
   .prev, .next,.textarea {font-size: 11px}
 }

 </style>
     </head>

     <body>
         <!-- Loader -->
     	<div class="loader">
     		<div class="loader-img"></div>
     	</div>

 		<!-- Top menu -->
 		<nav class="navbar navbar-fixed-top" role="navigation">

 			<div class="container">
 				<div class="navbar-header">

 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
 						<span class="sr-only">Toggle navigation</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 					</button>

           <div class='logo'>
           <div class='name'></div></div>
 				</div>
 				<!-- Collect the nav links, forms, and other content for toggling -->
 				<div class="collapse navbar-collapse" id="top-navbar-1">
 					<ul class="nav navbar-nav navbar-right">

 						<li><a class="scroll-link" href="#about">About</a></li>
 						<li><a class="scroll-link" href="#contact">Contact</a></li>
 					</ul>
 				</div>
 			</div>
 		</nav>

          <!-- Page title -->

 		        <div class="page-title top-content">
 		            <div class="page-title-text wow fadeInUp">

 		            	<h1>
 		            	<?php
 		            	echo"welcome $c"
 		            	?>
 		            	</h1>

 		            	<div class="page-title-bottom-link">
 		            		<a class="big-link-1 btn scroll-link" href="#portfolio">Start wishing</a>
 		            	</div>
 		            </div>
         </div>


         <!-- Portfolio -->
         <div class="portfolio-container section-container">
 	        <div class="container">
 	            <div class="row">
 	                <div class="col-sm-12 portfolio section-description wow fadeIn">
 	                	<h2>Start Wishing</h2>
 	                    <div class="divider-1 wow fadeInUp"><span></span></div>
 	                    <p>
 	                    	Please select from the following services
 	                    </p>
 	                </div>
 	            </div>
 	            <div class="row">
 	            	<div class="col-sm-12 portfolio-masonry">
 		                <div class="portfolio-box development">
 		                	<a href="newyear.php"><img src="assets/img/portfolio/n1.jpg" alt="" data-at2x="assets/img/portfolio/n1.jpg"></a>
                             <h3>NEW YEAR</h3>
 		                </div>
 		                <div class="portfolio-box design">
 		                	<a href="#"><img src="assets/img/portfolio/2.jpg" alt="" data-at2x="assets/img/portfolio/2.jpg"></a>
 							<h3>CHRISTMAS</h3>
 		                </div>
 		                <div class="portfolio-box design">
 		                	<a href="#"><img src="assets/img/portfolio/3.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg"></a>
 		                <h3>HOLI</h3>
 		                </div>
 		                <div class="portfolio-box design">
 		                	<a href="#"><img src="assets/img/portfolio/4.jpg" alt="" data-at2x="assets/img/portfolio/4.jpg"></a>
 		                <h3>DIWALI</h3>
 		                </div>
 		                <div class="portfolio-box branding">
 		                	<a href="#"><img src="assets/img/portfolio/5.jpg" alt="" data-at2x="assets/img/portfolio/5.jpg"></a>
 		                <h3>ANNVERSARY</h3>
 		                </div>
 		                <div class="portfolio-box branding">
 		                	<a href="#"><img src="assets/img/portfolio/6.jpg" alt="" data-at2x="assets/img/portfolio/6.jpg"></a>
 		                	<h3>BIRTHDAY</h3>
 		                </div>

 	                </div>
 	            </div>
 	        </div>
         </div>


         <!-- About us -->
         <div class="about-container section-container">
 	        <div class="container">
 	            <div class="row">
 	                <div class="col-sm-12 about section-description wow fadeIn">
 	                    <h2>About us</h2>
 	                    <div class="divider-1 wow fadeInUp"><span></span></div>
 	                    <p>
 	                    	These are our following services of which we provide to wish anyone with us.
 	                    </p><br><br>
 	                    <div class="slideshow-container">

 						<div class="mySlides fade">
 						  <div class="numbertextarea">1 / 5</div>
 						  <img src="2.jpg" width='80%' height:'50%'>

 						</div>

 						<div class="mySlides fade">
 						  <div class="numbertextarea">2 / 5</div>
 						  <img src="3.jpg" width='80%' height='50%'>

 						</div>

 						<div class="mySlides fade">
 						  <div class="numbertextarea">3 / 5</div>
 						  <img src="4.jpg" width='80%' height:'50%'>

 						</div>
 						<div class="mySlides fade">
 						<div class="numbertextarea">4 / 5</div>
 						<img src="6.jpg" width='80%' height:'50%'>

 						</div>

 						<a class="prev" onclick="plusSlides(-1)"></a>
 						<a class="next" onclick="plusSlides(1)"></a>

 						</div>
 						<br>

 						<div style="textarea-align:center">
 						  <span class="dot" onclick="currentSlide(1)"></span>
 						  <span class="dot" onclick="currentSlide(2)"></span>
 						  <span class="dot" onclick="currentSlide(3)"></span>
 						  <span class="dot" onclick="currentSlide(4)"></span>

 </div>
 </div>
 	                </div>
 	            </div>
 	        </div>
         </div>
 <script>
 var slideIndex = 0;
 showSlides();

 function showSlides() {
     var i;
     var slides = document.getElementsByClassName("mySlides");
     var dots = document.getElementsByClassName("dot");
     for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
     }
     slideIndex++;
     if (slideIndex> slides.length) {slideIndex = 1}
     for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" passive", "");
     }
     slides[slideIndex-1].style.display = "block";
     dots[slideIndex-1].className += " passive";
     setTimeout(showSlides, 1500);
 }
 var modal = document.getElementById('id02');


 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }

 </script>

 <br>
 <br>
 <br>

 		<!-- Contact us (block 2) -->
         <div class="block-2-container section-container contact-container">
 	        <div class="container">
 	            <div class="row">
 	                <div class="col-sm-12 block-2 section-description wow fadeIn">
 	                	<h2>Contact us</h2>
 	                	<div class="divider-1 wow fadeInUp"><span></span></div>
 	                    <p>
 	                    	For every question, information or feedback, here is how you can get in touch with us. Send us an email or contact us!
 	                    </p>
 	                </div>
 	            </div>
 	            <div class="row">

 	            	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
 	            		<h3>Visit us</h3>
 	                    <p><span aria-hidden="true" class="icon_pin"></span>Meerut</p>
 <p><span aria-hidden="true" class="icon_phone"></span>Phone:+91-XXXXXXXX</p>
 	                    <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">MyWishheart@gmail.com</a></p>
 	            	</div>
 	            </div>
 	            <div class="contact-icon-container">
             		<span aria-hidden="true" class="icon_mail"></span>
             	</div>
 	        </div>
         </div>

         <!-- Footer -->
         <footer>
 	        <div class="container">
 	        	<div class="row">
 		        	<div class="col-sm-12">
 		        		<div class="scroll-to-top">
 		        			<a href="#"><i class="fa fa-chevron-up"></i></a>
 		        		</div>
 		        	</div>
 		        </div>
 	            <div class="row">
                     <div class="col-sm-7 footer-copyright">
                     	&copy; MyWishheart:WishWithUs
                     </div>

 	            </div>
 	        </div>
         </footer>


         <!-- Javascript -->
         <script src="assets/js/jquery-1.11.1.min.js"></script>
         <script src="assets/bootstrap/js/bootstrap.min.js"></script>
         <script src="assets/js/jquery.backstretch.min.js"></script>
         <script src="assets/js/wow.min.js"></script>
         <script src="assets/js/retina-1.1.0.min.js"></script>
         <script src="assets/js/jquery.magnific-popup.min.js"></script>
         <script src="assets/js/waypoints.min.js"></script>
         <script src="assets/js/jquery.countTo.js"></script>
         <script src="assets/js/masonry.pkgd.min.js"></script>
         <script src="assets/js/scripts.js"></script>

         <!--[if lt IE 10]>
             <script src="assets/js/placeholder.js"></script>
         <![endif]-->

     </body>

</html>
<?php
}
 ?>