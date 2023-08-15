<?php
include('Login&Signup/login.php');
?>

<!DOCTYPE html>
<html>
<head><title>Home</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="homeother.css">
<link rel="stylesheet" type="text/css" href="Login&Signup/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--Login form-->
  <div class="login-popup">
  	 <div class="box">
				<br><center><h2>WELCOME TO <font color="red">PIZZA</font> <font color="green">COTTAGE</font><br>LET'S START YOUR ORDER</h2><br>
				To get started with your order, please enter your Email and Password below.</center><br><br>
				<form action="http://Localhost/Login&Signup/login.php" method="POST">
				<div class="message"><?php if($message!="") { echo $message; } ?></div>
					<table align="center" >
						<tr>
							<td> Email </td>
						</tr>
						
						<tr> 
							<td class="textBOX"> <input type="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address.(example@gmail.com)" required> </td>
						</tr>
						
						<tr>
							<td> Password </td>
						</tr>
						
						<tr>
							<td class="textBOX"> <input type="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> </td>
						</tr>
					</table>
					<center> <br> <button class="LogIn" type="Submit" name="login_btn" value="Log In"> Log In </button> </center>
				</form>
					
					<br><h4>Don't have an account?<a href="Login&Signup/register.html"> &nbsp; Sign Up</a></h4>
  	 </div>
  </div>

<script src="Login&Signup/popupscript.js"></script>



<div>
	   <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="images/firstpic.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/1.1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/2.2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/3.3.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
	<div >
		<h1 class="topic">PIZZA</h1>
	</div>
	<div class="pizza">
		<div class="pizzaimg">
			<img src="images/image-article-1.jpg" width="400" height="250">
		</div>
		<div class="pizzatext">
			<p>Pizza is a dish of Italian origin consisting of a usually round,<br> 
			flat base of leavened wheat-based dough topped with tomatoes,<br>
			cheese, and often various other ingredients, which is then baked<br>
			at a high temperature, traditionally in a wood-fired oven. A small<br>
			pizza is sometimes called a pizzetta.</p>	
		</div>
	</div>
	</div>
	<div>
		<img src="images/logo.png" width="200px" height="200px" class="logocenter">
	</div>
	<div class="page-footer__contacts">
            <div class="contact-item-box">
              <div class="contact-item-box__title">Opening Hours</div>
              <div class="contact-item-box__value">Mon – Sat: 08:00 AM – 11:30 PM<br> Sun: 9:00 AM – 7:00 PM</div>
            </div>
            <div class="contact-item-box">
              <div class="contact-item-box__title">Contact us</div>
              <div class="contact-item-box__value">Email: info@pizzacottage.com<br> Phone: 011-2123456</div>
            </div>
    </div>
	<div>
	<h1 class="find">Find Us</h1>
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="391" id="gmap_canvas" src="https://maps.google.com/maps?q=colombo,%20sri%20lanka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:center;height:391px;width:1080px;margin-left:215px;}</style><a href="https://www.embedgooglemap.net">create google maps for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:391px;width:1080px;}</style></div></div>
	</div>
	<div class="page-footer__contacts">
		<div class="contact-item-box">
			<div class="contact-item-box__title">Colombo</div>
			<div class="contact-item-box__value">Athurugiriya<br>Mount Lavinia<br>Nugegoda<br>Rajagiriya</div>
		</div>
		<div class="contact-item-box">
			<div class="contact-item-box__title">Gampaha</div>
			<div class="contact-item-box__value">Ja-Ela<br>Katunayake<br>Negombo<br>Wattala<br>Gampaha</div>
		</div>
		<div class="contact-item-box">
			<div class="contact-item-box__title">Galle</div>
			<div class="contact-item-box__value">Hikkaduwa<br>Galle</div>
		</div>
		<div class="contact-item-box">
			<div class="contact-item-box__title">Kandy</div>
			<div class="contact-item-box__value">Peradeniya<br>Kandy</div>
		</div>
	</div>
	<div class="page-footer__bottom">
        <div class="uk-container">
          <div class="page-footer__social">
            <ul class="social">
              <li class="social-item"><a class="social-link" href="#!"><i class="fa fa-twitter"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fa fa-facebook-f"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fa fa-instagram"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fa fa-google-plus"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
          <div class="page-footer__copy"><span>© Copyrights 2022 PizzaCottage. All rights reserved.</span><a style=" color: white;" href="" >Terms and Conditions</a></div>
        </div>
      </div>
</body>
</html>