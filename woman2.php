<?php
    include 'databaseconn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	 <meta charset="utf-8">
	<style>
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family:sans-serif;
}
header
{
	background-image: url(ss.jpg);
	height: 100vh;
	background-position: center;
	background-size: cover;
}
nav{
	background-color: black;
	width: 100%;
	height: 80px;                  
}
nav img{
	width: 10%;
	height: 100%;
	margin-left: 60px;
}
nav ul{
	float: right;
}
nav ul li
{
	display: inline-block;
	line-height: 75px;
    margin-right: 10px;
    color: white;
}
nav ul li a{
	color: white;
	font-size: 17px;
	display: block;
    padding: 10px;
	font-family: sans-serif;
	font-weight: bold;
}
nav li a{
	color: white;
	text-decoration: none;
	font-size: 90%;
	font-weight: bold;
}
a:hover{
	color: orange;
	border-bottom: 2px solid orange;
	transition: all 0.5s ease-in;
	padding: 2px 0;
}
ul li ul{
	position: absolute;
	top: 60px;
	display: none;
	visibility: hidden;
}
ul li:hover> ul,
ul li:focus-within > ul,
ul li ul:hover{
	visibility: visible;
	opacity: 1;
	display:  block;
	padding: 0px;
	margin-right: 40px;
}
ul li ul li{
	clear: both;
	width: 50%;
}
.main h2{
	padding-top: 20px;
	margin-left: 5%;
	font-size: 30px;
	color: white;
	font-family: sans-serif;
	font-weight: bold;
}

.main h1{
	margin-top: 15%;
	margin-left: 15%;
	font-size: 30px;
	color: white;
	font-weight: bold;
}
.sp{
	color: white;
	font-size: 40px;
	font-weight: bold;
	animation: animate  1s linear finite;
}
@keyframes animate{
	0%
	{
		opacity: 0;
		transform: rotateX(90deg);
		filter: blur(10px);
	}
	100%
	{
		opacity: 1;
		transform: rotateX(0deg);
		filter: blur(0);
	}
}
section{
	position: relative;
	width: 100%;
	height: 100vh;
	display: flex;
	margin-bottom: 40px;
}
section .imgbox{
	position: absolute;
	margin-top: 5%;
	width: 50%;
	height: 100%;
}
section .imgbox:before{
	content: "";
	position: absolute;;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(225deg,#e91e63,#03a9f4);
	z-index: 1;
	mix-blend-mode: screen;
}
section .imgbox img{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}
.content-box{
	width: 100%;
	height: 110%;
	font-family: sans-serif;
	display: flex;
	justify-content: center;
	margin-left: 60%;
	margin-top: 8%;
}
.cards{
	width: 380px;
	height: 90%;
	box-shadow: 0 0 10px 20px #ff66ff;
	perspective: 1000px;
}
.inner-box{
	position: relative;
	width: 100%;
	height: 100%;
	transform-style: preserve-3d;
	transition: transform 1s;
}
.card-front,.card-back{
	position: absolute;
	width: 380px;
	height: 100%;
	background-position: center;
	background-size: cover;
	background: linear-gradient(225deg,#da70d6,#f433ff);
	padding: 55px;
	box-sizing: border-box;
	backface-visibility: hidden;
}
.card-back{
	transform: rotateY(180deg);
}
.card h2{
	font-weight: normal;
	font-size: 24px;
	text-align: center;
	font-weight: bold;
}
.input-box{
	width: 100%;
	background: transparent;
	border:2px solid #fff;
	margin: 10px  0;
	height: 40px;
	border-radius: 20px;
	padding: 0 20px;
	box-sizing: border-box;
	outline: none;
	text-align: center;
	color: #fff;
	margin-top: 20px;
}
::placeholder{
	color: #fff;
	font-size: 17px;
}
button{
	width: 100%;
	background: transparent;
	border: 2px solid #fff;
	margin: 35px 0 20px;
	height: 40px;
	font-size: 17px;
	border-radius: 20px;
	padding: 0  20px;
	box-sizing: border-box;
	outline: none;
	color: #fff;
	cursor: pointer;
}
.submit-btn{
	position: relative;
}
.submit-btn::after{
    content: '\27a4';
    color: #333;
    line-height: 35px;
    font-size: 17px;
    height: 35px;
    width: 38px;
    border-radius: 50%;
    position: absolute;
    background: #fff;
    right: -1px;
    top: -1px;
}
.btn{
	border: 2px solid #fff;
	border-radius: 20px;
}
span{
	font-size: 17px;
	margin-left: 10px;
}
.card .btn{
	margin-top: 70px;
}
.cards a{
	color: #fff;
	text-decoration: none;
	display: block;
	text-align: center;
	font-size: 17px;
	margin-top: 10px;
}
	</style>

</head>
<body>

      <header>
      	<nav>
      		<img src="besafe1.png">
      		<ul>
      			<li><a class="active">HOME</a></li>
      			<li><a>EMERGENCY CONTACT</a></li>
      			<li><a>ABOUT US</a></li>
      			<li><a>MORE</a>
      			<li><a href="#login">LOGIN</a>
      			</li>
      		</ul>
      	</nav>
      	<div class="main">
      		<h1><span class="sp">WOMAN SECURITY</span></h1>
      			
      		<h2><span class="sp">WE ARE HERE TO SECURE YOU</span></h2>
      	</div>
    </header>
  
  </section>
     
      <section id="login">
          <div class="imgbox">
            <img src="safe.jpg">
          </div>
            <div class="content-box">
            	 <div class="cards">
                  <div class="inner-box" id="card">
                <div class="card-front">
                  <h2>Login</h2>
                  <form action="login.php" method="POST">
                    <input type="email"  name="email" class="input-box" placeholder="Your Email Id" required>
                    <input type="password"   name="password" class="input-box" placeholder="Password" id="password-field " required>
                    <i id="pass-status" class="fa-fa-eye" aria-hidden="true" onclick="viewPassword()"></i>
                    <button type="submit"  name="login" class="submit-btn">Login</button>
                    <input type="checkbox"><span>Remember Me</span>
                  </form>
                  <button type="button" class="btn" onclick="openRegister()">I'am New Here</button>
                  <a href="">Forget Password</a>
                </div>
               

                <div class="card-back">
                          <h2>Register</h2>
                  <form action="register.php" method="POST">
                    <input type="text"  name="Name" class="input-box" placeholder="Your Name" required>
                    <input type="contact" name="Contact" class="input-box" placeholder="Your Contact No." required>
                    <input type="email" name="Email" class="input-box" placeholder="Your Email Id" required>
                    <input type="password" name="Password" class="input-box" placeholder="Password" required>
                    <input type="password" name="Cpassword" class="input-box" placeholder="Confirm password" required>
                    <button type="submit" name="Submit" class="submit-btn">Submit</button>
                    <input type="checkbox"><span>Remember Me</span>
                  </form>
                  <button type="button" class="btn" onclick="openLogin()">I've and Account</button>
                  <a href="">Forget Password</a>
                </div>
              </div>
            </div>
            </div>     
    </section>

   
   
    <script>
      
      var card = document.getElementById("card");

      function openRegister(){
        card.style.transform = "rotateY(-180deg)";
      }
      function openLogin(){
        card.style.transform = "rotateY(0deg)";
      }
    </script>
</body>
</html>