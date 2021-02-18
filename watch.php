<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/da962b0159.js" crossorigin="anonymous"></script>

		<!--Slick Carousel-->
		<link rel="stylesheet" href="owl.carousel.min.css">
		<link rel="stylesheet" href="owl.theme.default.min.css">
		<link rel = "shortcut icon" type = "image/png" href = "Images/Logo/RTW_favicon.png">
		<title>#RealTalkWindsor</title>
		<style>
			body{ 
				background: black !important; 
				font-family: 'Barlow', sans-serif;
			}
			
/*--------------------------------------This CSS is for the top social media icons and Subscribe button ----------------------------------*/
			
			#top-icon{
				color: white !important;
				margin: 0 !important; 
				padding: 0 !important; 
				margin-left: 1.6% !important; 
			}
			
			#top-icon:hover{
				transition: .5s;
				color: #f5c400 !important;
			}
			
			#top-button{
				font-size: 3.5vw !important;
				width: 100% !important; 
			}
			
			#top-button:hover{
				transition: .5s;
				background-color: #cca300 !important;
			}
					
			ul li{
				list-style: none;
				float:right;
				margin-left: 10px;
				margin-top: 10px;
				margin-bottom: 0 !important;
			}

			ul li a{
				position:relative;
				display:inline;
				color: white;
				transition: .5s;
				margin-bottom: 0 !important;
			}
			
			.mobile-socials{
				margin-bottom: 0 !important; 
			}
			
			
			@media only screen and (max-width: 600px){
				.mobile-socials{
					display: 1; 
				}
				
				.normal-socials{
					display: none;
				}
				
				#top-icon{
					font-size: 4.2vw !important; 
				}
				
				#top-button{
					font-size: 4.2vw !important;
				}
				
				#top-icon{ 
					margin-left: 2.5% !important; 
				}
			}
			
			@media only screen and (min-width: 601px) and (max-width: 767px){
			
				.mobile-socials{
					display: 1; 
				}
				
				.normal-socials{
					display: none;
				}
				
				#top-icon{
					font-size: 3.4vw; 
				}
				
				#top-button{
					font-size: 3.4vw !important;
				}
				
				#top-icon{ 
					margin-left: 2% !important; 
				}
			}
			
			@media only screen and (min-width: 768px) and (max-width: 991px){
				.mobile-socials{
					display: 1; 
				}
				
				.normal-socials{
					display: none;
				}
				
				#top-icon{
					font-size: 2.4vw; 
				}
				
				#top-button{
					font-size: 2.4vw !important;
				}
				
				#top-icon{ 
					margin-left: 1.5% !important; 
				}
			}
			
			@media only screen and (min-width: 992px) and (max-width: 1200px){
				.mobile-socials{
					display: 1 !important; 
				}
				
				.normal-socials{
					display: none !important;
				}
				
				#top-icon{
					font-size: 2vw; 
				}
				
				#top-button{
					font-size: 2vw !important;
				}
				
				#top-icon{ 
					margin-left: 1% !important; 
				}
			}
			
			@media screen and (min-width: 1201px){
				.mobile-socials{
					display: none !important; 
				}
				
				.normal-socials{
					display: 1 !important;
				}
				
				#top-icon{
					font-size: 1.2vw; 
				}
				
				#top-button{
					font-size: 1.2vw !important;
				}
				
				#top-icon{ 
					margin-left: 1% !important; 
				}
			}
			
/* --------------------------------------------------- This CSS is for the navigation bar ----------------------------------------------------------*/
	
			#brand-image{
				margin: 0 !important;
			}
			
			.navbar.navbar-dark{
				background-color:black;
				border-bottom:3px solid #f5c400;	
				margin-top: 0 !important;
			}
			
			a{
				color: white !important;
			}
			
			a:hover{
				transition: .5s;
				color: #f5c400 !important;
			}
			
			.shop-tab{
				color: #f5c400 !important;
			}
			
			.shop-tab:hover{
				transition: .5s;
				color: white !important;
			}
			
			.navbar-nav li{
				list-style: none;
				float:left;
			}
			
			.navbar-nav li a{
				position:relative;
				display:block;
				color: white;
				transition: .5s;
			}
			
			#nav-text{
			}
			
			#top-social{
				top: 20% !important; 
			}
			
			#top-button{
				color: black !important;
				background-color: #f5c400; !important;
				border-radius: 0 !important;
				border: 0;
				margin: 0 !important;
				vertical-align: middle !important;
			}
			
			@media only screen and (max-width: 600px){
				#brand-image{
					width: 30vw !important;
				}
			}
			
			@media only screen and (min-width: 601px) and (max-width: 767px){
				#brand-image{
					width: 25vw !important;
				}
			}
			
			@media only screen and (min-width: 768px) and (max-width: 991px){
				#brand-image{
					width: 18vw !important;
				}
			}
			
			@media only screen and (min-width: 992px) and (max-width: 1200px){
				#brand-image{
					width: 15vw !important;
				}
			}
			
			@media only screen and (min-width: 1201px){
				#brand-image{
					width: 9vw !important;
				}
			}
			
			@media screen and (max-width: 767px){
				.navbar-nav li a{
					font-size: 4vw; 
				}
			}
			
			@media screen and (max-width: 767px){
				#top-button{
					font-size: 4.6vw; 
				}	
			}

			
			@media screen and (min-width: 768px) and (max-width: 1200px){
				.navbar-nav li a{
					font-size: 2vw; 
				}
				
				#top-button{
					font-size: 2.4vw;
				}
			}
			
/*-------------------- This CSS is for the image with the header behind it at the top of the page ---------*/
			
			.page-header{
				background-image: url("Images/Page Headers/about_page_header.png"); 
				height: 20vw;
				background-position: center; 
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			}
			
			h1{
				color: #f5c400 !important;
				text-align: center;
				font-weight: 900;
				font-size: 3.5vw;
			}
			
			.centered{
			  text-align: center;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  color: white;
			}
			
			@media screen and (max-width: 600px){
				.page-header{
					height: 35vw !important;
				}
				
				h1{
					font-size: 7.2vw !important;
				}
			}
			
			@media screen and (min-width: 601px) and (max-width: 767px){
				.page-header{
					height: 30vw;
				}
				
				h1{
					font-size: 6.5vw !important;
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 991px){
				.page-header{
					height: 24vw !important;
				}
				
				h1{
					font-size: 6vw !important;
				}
			}
			
			@media screen and (min-width: 992px) and (max-width: 1200px){
				.page-header{
					height: 21vw !important;
				}
				
				h1{
					font-size: 5.5vw !important;
				}
			}
			
			@media screen and (min-width: 1201px){
				.page-header{
					height: 17vw !important;
				}
				
				h1{
					font-size: 4vw !important;
				}
			}
			
/*---------------------------------- This CSS is for the about us paragraph ----------------- */
			
			.about-us{
				margin: 0 auto;
			}
			
			.about-us p{
				margin: 2% !important; 
				color: white !important;
				font-size: 1.5vw;
			}
			
			@media screen and (max-width: 600px){
				.about-us{
					width: 80% !important;
				}
				p{
					font-size: 4vw !important;
				}
			}
			
			@media screen and (min-width: 601px) and (max-width: 767px){
				.about-us{
					width: 80% !important;
				}
				p{
					font-size: 3.4vw !important;
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 991px){
				.about-us{
					width: 80% !important;
				}
				p{
					font-size: 3vw !important;
				}
			
			}
			
			@media screen and (min-width: 992px) and (max-width: 1200px){
				.about-us{
					width: 80% !important;
				}
				p{
					font-size: 2.5vw !important;
				}
			}
			
			@media screen and (min-width: 1201px){
				.about-us{
					width: 75% !important;
				}
				
				p{
					font-size: 1.7vw !important;
				}
			}
			
			
			
/*--------------------------- This CSS is for the slideshow at the bottom of the page -----------*/
			
			.card{
				border: 0 !important;
			}
			
			.owl-theme .owl-nav [class*=owl-]{
				margin-top: 0 !important;
				color: white !important;
				font-size: 50px !important;
			}
			
			.owl-theme .owl-nav [class*=owl-]:hover{
				background: none !important;
				color: #f5c400 !important;
			}
			
			.owl-theme .owl-nav [class*=owl-]:focus{
				border: 0 !important;
				outline: 0 !important;
			}

/*------------------------------This CSS is for the Stay Connected tab ------------------------------*/
			
			.stayconnected_bar{
				background: #f5c400;
				margin-bottom: 2% !important;
			}
			
			.second-header{
				position: relative;
				padding-top: 1%;
				padding-bottom: 1%;
			}
			
			.bottomsocial > i{
				color:black;
				margin-right: 5px;
			}
			
			#first-icon{
				margin-left: 2%;
			}
			
			.bottomsocial > i:hover{
				transition: .5s;
				color:white;
			}
			
			@media screen and (max-width: 600px){
				.second-header{
					font-size: 5vw !important; 
					padding-top: 3.5%;
					padding-bottom: 3.5%;
				}
				
				.bottomsocial > i{
					font-size: 5vw !important; 
				}
			}
			
			@media screen and (min-width: 601px) and (max-width: 767px){
				.second-header{
					font-size: 3.5vw; 
					padding-top: 2.5%;
					padding-bottom: 2.5%;
				}
				
				.bottomsocial > i{
					font-size: 3.5vw !important; 
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 991px){	
				.second-header{
					font-size: 2.6vw; 
					padding-top: 2%;
					padding-bottom: 2%;
					margin-bottom: 3% !important;
				}
				
				.bottomsocial > i{
					font-size: 2.6vw !important; 
				}
			}
			
			@media screen and (min-width: 992px) and (max-width: 1200px){	
				.second-header{
					font-size: 2.2vw; 
					padding-top: 1.5%;
					padding-bottom: 1.5%;
				}
				
				.bottomsocial > i{
					font-size: 2.2vw !important; 
				}
			}
			
			@media screen and (min-width: 1201px){	
				.second-header{
					font-size: 1.6vw; 
					padding-top: 1%;
					padding-bottom: 1%;
				}
				
				.bottomsocial > i{
					font-size: 1.6vw !important; 
				}
			}

/*----------------------------------------------This CSS is for the footer -----------------------------------------------*/
			
			#feedback-button{
				color: black;
				background-color: white;
				border-radius: 0 !important;
				outline: 0;
				border: 0;
				width: 100%;
			}
			
			#feedback-button:hover{
				transition: .5s;
				background-color: #cccccc !important;
			}
			
			#feedback-button:focus, #feedback-button:active{
				outline: none !important;
				box-shadow: none;
			}
				
			
			.form-control:focus {
				transition: .3s;
				border: 3px solid #f5c400;
				box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(245, 196, 0, 0.5);
			}
			.modal-content{
				background-color: black;
				color: #f5c400;
			}
			
			.close{
				color: #f5c400;
				text-shadow: none;
				opacity: 1;
			}
			
			.close:hover{
				color: white !important;
			}
			
			#pop-up-button{
				background-color: #f5c400 !important;
				border-radius: 0 !important;
				border: none;
				color: black;
			}
			
			#pop-up-button:focus, #pop-up-button:active{
				outline: none !important;
				box-shadow: none;
			}
			
			
			
			#mc_embed_signup{
				background:black; 
				font:14px;  
			}
			
			#mc_embed_signup h4 {
				text-align: center;
				color: white !important
			}
			
			#mc_embed_signup label{
				margin-top: 5px !important;
				color: white !important;
			}
			
			#mc_embed_signup .mc-field-group input {
				background-color: black !important;
				border-radius: 0 !important;
				color: white !important;
				border: 0;
				outline: 0;
				background: transparent;
				border-bottom: 1px solid #f5c400;
				height: 35px;
				width:100%;
			}
			
			#mc_embed_signup #mc-embedded-subscribe {
				background-color: #f5c400 !important;
				color: black !important;
				border-radius: 1 !important;
				border: 0;
				width: 90%;
				display: block;
			}
			
			#mc_embed_signup #mc-embedded-subscribe:hover {
				background: #cca300 !important;
			}
			
			#mc_embed_signup #mc-embedded-subscribe:focus {
				outline: 0 !important;
			}
			
			@media screen and (max-width: 767px){
				.mobile_space{
					display: none;
				}
				
				#mc_embed_signup #mc-embedded-subscribe {
					width: 60%;
				}
				
				#mc_embed_signup{
					font-size: 4vw; 
				}
				
				#feedback-button{
					font-size: 4vw; 
				}
			}	
			
			@media screen and (min-width: 768px) and (max-width: 1200px){
				.mobile_space{
					display: 1;
				}
				
				#mc_embed_signup{
					font-size: 1.9vw; 
				}
				
				#feedback-button{
					font-size: 1.9vw; 
				}
				
			}
			
			@media screen and (min-width: 1201px){	
				.mobile_space{
					display: none;
				}
				
				#feedback-button{
					width: 60%; 
				}
			}
			
			hr{
				height: 1px;
				background-color: white;
				width: 100%;
				opacity: 0.1;
				margin: 0;
			}
			
			#footer-image{
				width: 5%;
			}
			
			.copyright-text{
				color: white !important;
			}
			
			@media screen and (max-width: 600px){
				.subscribe_space{
					display: 1 !important; 
				}
				#feedback-button{
					font-size: 4.5vw !important; 
					padding: 2.5% !important; 
					width: 60%;
					margin-bottom: 10%;
				}
				
				.feedback-icon{
					font-size: 4.5vw !important; 
				}
				
				#mc_embed_signup{
					font-size: 4.5vw !important;  
				}
				#mc_embed_signup h4 {
					font-size: 6.5vw !important; 
				}
				
				#mc_embed_signup .mc-field-group input {
					margin-bottom: 10% important; 
				}
				
				#mc_embed_signup #mc-embedded-subscribe {
					font-size: 4.5vw !important; 
					padding: 2.5% !important; 
					width: 60%;
				}
				
				#footer-image{
					width: 15%;
				}
				
				.copyright-text{
					font-size: 4vw !important; 
				}
			}
			
			@media screen and (min-width: 601px) and (max-width: 767px){
				.subscribe_space{
					display: 1 !important; 
				}
				
				#feedback-button{
					font-size: 3.5vw !important; 
					padding: 2% !important; 
					width: 55%;
					margin-bottom: 10%;
				}
				
				.feedback-icon{
					font-size: 3.5w !important; 
				}
				
				#mc_embed_signup{
					font-size: 3.5vw !important;  
				}
				#mc_embed_signup h4 {
					font-size: 5.5vw !important; 
				}
				
				#mc_embed_signup #mc-embedded-subscribe {
					font-size: 3.5vw !important; 
					padding: 2% !important; 
					width: 55%;
				}
				
				#footer-image{
					width: 12%;
				}
				
				.copyright-text{
					font-size: 3.2vw !important; 
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 991px){
			
				.subscribe_space{
					display: none !important; 
				}
				
				#feedback-button{
					font-size: 1.9vw !important; 
					padding: 3% !important; 
					margin-bottom: 0 !important; 
					margin-top: 3% !important;
				}
				
				.feedback-icon{
					font-size: 1.9w !important; 
				}
				
				#mc_embed_signup{
					font-size: 2vw !important;  
				}
				#mc_embed_signup h4 {
					margin: 0 !important; 
					font-size: 3vw !important; 
				}
				
				#mc_embed_signup #mc-embedded-subscribe {
					font-size: 1.9vw !important; 
					padding: 3% !important; 
				}
				
				#footer-image{
					width: 8%;
				}
				
				.copyright-text{
					font-size: 2.5vw !important; 
				}
			}
			
			@media screen and (min-width: 992px) and (max-width: 1200px){
			
				.subscribe_space{
					display: none !important; 
				}
				
				#feedback-button{
					font-size: 1.6vw !important; 
					padding-top: 3% !important; 
					padding-bottom: 3% !important; 
					margin-bottom: 0 !important; 
					margin-top: 2% !important;
				}
				
				.feedback-icon{
					font-size: 1.6w !important; 
				}
				
				#mc_embed_signup{
					font-size: 2vw !important;  
				}
				#mc_embed_signup h4 {
					margin: 0 !important; 
					font-size: 2.7vw !important; 
				}
				
				#mc_embed_signup .mc-field-group input {
					font-size: 1.6vw !important; 
					padding-top: 3% !important; 
					padding-bottom: 3% !important; 
					margin-top: 10% !important;
				}
				
				#mc_embed_signup #mc-embedded-subscribe {
					
					margin-top: 10% !important;				
				}
				
				#footer-image{
					width: 6.5%;
				}
				
				.copyright-text{
					font-size: 2vw !important; 
				}

			}
			
			@media screen and (min-width: 1201px){
				.subscribe_space{
					display: none !important; 
				}
				
				#feedback-button{
					font-size: 1.2vw !important; 
					padding-top: 3% !important; 
					padding-bottom: 3% !important; 
					margin-bottom: 0 !important; 
					margin-top: 3% !important;
				}
				
				.feedback-icon{
					font-size: 1.2vw !important; 
				}
				
				#mc_embed_signup .mc-field-group input {
					font-size: 1.2vw !important; 
					padding-top: 3% !important; 
					padding-bottom: 3% !important; 
				}
				
				#footer-image{
					width: 5%;
				}
				
				.copyright-text{
					font-size: 1.3vw !important; 
				}
			}
			
		</style>
	</head>

	<body>
		<header>
			<table class="table table-borderless mobile-socials" style = "display: inline-block;" id = "top-table">
				<tr>
					<td style = "width:95%; text-align: right; vertical-align: middle;">
						<!--<ul style = "display:inline; text-align: right; position: relative; vertical-align: middle;">-->
							<a href = "https://www.youtube.com/channel/UCPanTc9nNIgXgApez9Ju3pg" style = "vertical-align: middle"><i class="fab fa-youtube" id = "top-icon"></i></a>
							<a href = "https://www.instagram.com/realtalkwindsor/" style = "vertical-align: middle"><i class="fab fa-instagram" id = "top-icon"></i></a>
							<a href = "https://twitter.com/realtalkwindsor?lang=en" style = "vertical-align: middle"><i class="fab fa-twitter" id = "top-icon"></i></a>
							<a href = "https://www.snapchat.com/add/realtalkwindsor" style = "vertical-align: middle"><i class="fab fa-snapchat-ghost" id = "top-icon"></i></a>
							<a href = "https://www.facebook.com/RealTalkWindsor/" style = "vertical-align: middle"><i class="fab fa-facebook" id = "top-icon"></i></a>
						<!--</ul>
						<p>Hello</p>-->
					</td>
					<td style = "width:5%; text-align: left">
						<form action = "https://facebook.us13.list-manage.com/subscribe/post?u=899e9fdf02d0017b148a243b8&amp;id=24741fb85f" method="get" target="">
							<button type="submit" class="btn btn-primary" id = "top-button">Subscribe</button>
						</form>
					</td>
				</tr>
			</table>
			<nav class="navbar navbar-expand-md navbar-dark bg-inverse">
				<a class="navbar-brand" href="main.html"><img id = "brand-image" alt = "RTW Logo" src = "Images/Logo/RTWLogo.png" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class = "nav-item">
							<a class="nav-link" href="events.php" id = "nav-text"><b>EVENTS</b></a>
						</li>
						<li class = "nav-item">	
							<a class="nav-link" href="about.html" id = "nav-text"><b>ABOUT US</b></a>
						</li>
						<li class = "nav-item">
							<a class="nav-link" href="watch.php" id = "nav-text"><b class = "shop-tab">WATCH</b></a>
						</li>
						<li class = "nav-item">
							<a class="nav-link" href="resources.html" id = "nav-text"><b>RESOURCES</b></a>
						</li>
						<li class = "nav-item">
							<a class="nav-link" href="contact.html" id = "nav-text"><b>CONTACT US</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html" id = "nav-text"><b class = "shop-tab">SHOP</b></a>
						</li>
					</ul>
				</div>
				
				<ul class = "navbar-nav ml-auto normal-socials">
					<li><a href = "https://www.youtube.com/channel/UCPanTc9nNIgXgApez9Ju3pg" id = "top-social"><i class="fab fa-youtube"></i></a></li>
					<li><a href = "https://www.instagram.com/realtalkwindsor/" id = "top-social"><i class="fab fa-instagram whiteinsta"></i></a></li>
					<li><a href = "https://www.snapchat.com/add/realtalkwindsor"id = "top-social"><i class="fab fa-snapchat-ghost"></i></a></li>
					<li><a href = "https://twitter.com/realtalkwindsor?lang=en" id = "top-social"><i class="fab fa-twitter"></i></a></li>
					<li><a href = "https://www.facebook.com/RealTalkWindsor/" id = "top-social"><i class="fab fa-facebook whitefacebook"></i></a></li>   
					<li>
						<form action = "https://facebook.us13.list-manage.com/subscribe/post?u=899e9fdf02d0017b148a243b8&amp;id=24741fb85f" method="get" target="">
							<button type="submit" class="btn btn-primary" id = "top-button"> Subscribe</button>
						</form>
					</li>
				</ul>
			</nav>
		</header>
		<br>
		<h1 style = "color: #f5c400"><b>WATCH</b></h1>
		<?php 
		$db = mysqli_connect("localhost", "root", "", "rtw_events");
		$sql = "SELECT * FROM youtube";
		$result = mysqli_query($db, $sql);
		$rowcount=mysqli_num_rows($result);
		$i = 1;
		while (($row = mysqli_fetch_array($result)) && ($i <= 9)){
			$vid_title = $row['Title'];
			$vid_embedlink = $row['Embed_Link'];
			$vid_description = $row['Description'];
			if (($i % 3) == 1){
				echo '<br><br><div class = "row">';
			}
			echo '<div class="col-sm-4">';
				echo '<div class="container">';
					echo '<div class="card" style = "background-color: #1a1a1a; border-color: #f5c400; width: 80% !important; margin: auto;">';
						echo $vid_embedlink;
					echo '</div>';
				echo '</div>';
			echo '</div>';
			if (($i % 3) == 0){
				echo '</div>';
			}
			$i++;
		}

		?>
		<br>
		<h4 style = "text-align: center; color: white">Want to check out more of #RTW? Visit our YouTube channel to see more!</h4>
		<br>
		<!--
echo '<div class="card-body">';
							echo '<div class = "text-center">';
								echo '<h6 class="card-title" style = "color: white">'.$vid_description.'</h6>';

							echo '</div>';
						echo '</div>';
		<!--<div class = "row">
		    <div class="col-sm-3">
				<div class="container">
					<div class="card" style = "background-color: #1a1a1a; border-color: #f5c400">
						<iframe width="100%" src="https://www.youtube.com/embed/5huemSsrwns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="card-body">
							<div class = "text-center">
								<h6 class="card-title" style = "color: #f5c400">#RTW Small Talk: Staying Firm</h6>
							</div>
							<h6 style = "font-size: 12px; color: white !important" class="card-text">As the month of Ramadan will be departing us shortly, Mustafa Sawalha shares some duaas we can make to help us stay firm on the path of Allah</h6>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="container">
					<div class="card" style = "background-color: #1a1a1a; border-color: #f5c400">
						<iframe width="100%" src="https://www.youtube.com/embed/5huemSsrwns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="card-body">
							<div class = "text-center">
								<h6 class="card-title" style = "color: #f5c400">#RTW Small Talk: The Patience of Prophet Ayyoub</h6>
							</div>
							<h6 style = "font-size: 12px; color: white !important" class="card-text">The first #SmallTalk video is here! Omar Asfour discusses the 'perfect patience' of Prophet Ayyoub ('alayhi-s-salam) and the powerful duaa he made to Allah during a time of unimaginable difficulty in his life.</h7>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="container">
					<div class="card" style = "background-color: #1a1a1a; border-color: #f5c400">
						<iframe width="100%" src="https://www.youtube.com/embed/5huemSsrwns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="card-body">
							<div class = "text-center">
								<h6 class="card-title" style = "color: #f5c400">#RTW Small Talk: Staying Firm</h6>
							</div>
							<h6 style = "font-size: 12px; color: white !important" class="card-text">The first #SmallTalk video is here! Omar Asfour discusses the 'perfect patience' of Prophet Ayyoub ('alayhi-s-salam) and the powerful duaa he made to Allah during a time of unimaginable difficulty in his life.</h7>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="container">
					<div class="card" style = "background-color: #1a1a1a; border-color: #f5c400">
						<iframe width="100%" src="https://www.youtube.com/embed/5huemSsrwns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="card-body">
							<div class = "text-center">
								<h6 class="card-title" style = "color: #f5c400">#RTW Small Talk: The Patience of Prophet Ayyoub</h6>
							</div>
							<h6 style = "font-size: 12px; color: white !important" class="card-text">The first #SmallTalk video is here! Omar Asfour discusses the 'perfect patience' of Prophet Ayyoub ('alayhi-s-salam) and the powerful duaa he made to Allah during a time of unimaginable difficulty in his life.</h7>
							
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<footer class="page-footer font-small unique-color-dark">
			<div style = "text-align: center" class = "stayconnected_bar">
				<h5 class = "second-header" style = "vertical-align: middle"><b>STAY CONNECTED</b><a class = "bottomsocial" id = "first-icon" href = "https://www.instagram.com/realtalkwindsor/"><i class="fab fa-instagram"></a></i><a class = "bottomsocial" href = "https://www.snapchat.com/add/realtalkwindsor"><i class="fab fa-snapchat-ghost"></a></i><a class = "bottomsocial" href = "https://twitter.com/realtalkwindsor?lang=en"><i class="fab fa-twitter"></a></i><a class = "bottomsocial" href = "https://www.facebook.com/RealTalkWindsor/"><i class="fab fa-facebook"></h5></a></i></th>
			</div>
			<div class = "container-fluid">
				<div class = "row">
						<div class = "col-md-3" align = "center">
							<div class = "row">
								<div class = "col-md-12">
									<br>
									<button type="button" class="btn btn-primary" id = "feedback-button" data-toggle="modal" data-target="#feedbackform"><i class="far fa-comment-alt" class = "feedback-icon"></i>&nbsp;&nbsp;Give Us Feedback</button>
								</div>
							</div>
						</div>
						
						<div class = "col-md-1"></div>
					<div class = "col-md-8">
						<form action="https://facebook.us13.list-manage.com/subscribe/post?u=899e9fdf02d0017b148a243b8&amp;id=24741fb85f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="hidden_iframe" onsubmit="return validateForm();" novalidate>
							<div id="mc_embed_signup">
								<div class = "row">
									<div class = "col-md-12" align = "center">
										<h4 style = "text-align: center; color: white;"><b>GET UPDATES FROM US</b></h4>
									</div>
								</div>
								<div class = "row">
									<div class = "col-md-3"align = "center">
										<div class="mc-field-group">
											<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder = "Email*">
										</div>
									</div>
									<div class = "col-md-3" align = "center">
										<div class="mc-field-group">
											<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder = "First Name">
										</div>
									</div>
									<div class = "col-md-3" align = "center">
										<div class="mc-field-group">
											<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder = "Last Name">
										</div>
									</div>
									<div class = "col-md-3" align = "center">
										<br class = "subscribe_space">
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    
										<div style="position: absolute; left: -5000px" aria-hidden="true"><input type="text" name="b_899e9fdf02d0017b148a243b8_24741fb85f" tabindex="-1" value=""></div>
										<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "col-md-1"></div>
				</div>
			</div>
			<hr>
			<div class = "row" style = "margin: auto">
				<div class = "col-md-12" align = "center">
					<br>
					<img id = "footer-image" style = "margin: auto" alt = "RTW Logo" src = "Images/Logo/RTW_small_logo.png" />
					<p class = "copyright-text" style = "font-size: 14px"> © 2020 Real Talk Windsor</p>
				</div>
			</div>
		</footer>
		
		<div class="modal fade" id="feedbackform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">GIVE US FEEDBACK</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 style = "color:white">Do you have a comment or suggestion? Your feedback helps us improve the program for everyone. <br><br>Share your feedback here:</h5>
						<script type="text/javascript">var submitted=false;</script>
						<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.location='feedbackthanks.html';}"></iframe> 
						<form action = "https://docs.google.com/forms/u/2/d/e/1FAIpQLSeIKcfKr6-DAHLT96SfvYACa7o_f6TaE4N-9M6XJExyWrsWwQ/formResponse" method = "post" target="hidden_iframe" onsubmit="return validateForm();" >
						<div class="form-group">
							<textarea class="form-control" name = "entry.903777498" id="message-text" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input class="btn btn-primary" id = "pop-up-button" type="submit" name = "submit" value="Submit">
					</div>
						</form>
					<script type="text/javascript">
						function validateForm(){
							submitted = true;
							return true;
						}
					</script>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="owl.carousel.min.js"></script>

		<script>
			$('.owl-carousel').owlCarousel({
				autoplay: true,
				loop: true,
				autoplayTimeout:3000,
				nav:true,
				dots: false,
				responsive:{
					0:{
						items: 1,
					},
					
					600:{
						items: 2,
					},

					767:{
						items: 3,
					},
					
					991:{
						items: 4,
					},
				}
			});
		</script>
	
	</body>
		

</html>
	