<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
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
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background: #2bcc60;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
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
 					</ul>
 				</div>
 			</div>
 		</nav>

          <!-- Page title -->

 		        <div class="page-title top-content">
 		            <div class="page-title-text wow fadeInUp">
 		            	<div class="page-title-bottom-link">
							 <form action="upload.php" method="POST" enctype="multipart/form-data">

							      		<br><br><div class="upload-btn-wrapper">
									    <button class="btn">Upload a file</button>
									    <input type="file" name="myfile" /><br><br>
									    <input type="submit" name="submit" class="btn"></form>
										</div>
    						  </form>
 		            	</div>
 		            </div>
         </div>





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