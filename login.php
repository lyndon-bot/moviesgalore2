<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Movies Galore</title>
        <link rel="stylesheet" type="css" href="main.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#myNavbar" class="navbar-toggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">Movies Galore</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Movies<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 1</a></li>
								<li><a href="#">Page 2</a></li>
								<li><a href="#">Page 3</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<!--Login page-->
<form action="logreg.php" method="post" style="margin-top: 50px;">
    
    <div class="container">
        <label><b> Username </b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    </div>
    <label><b> Password <b></label>
    <input type="text" name="psw" placeholder="Enter Password" required>
    <button type="submit" name="submit" value="1"> Login</button>
    <input type="checkbox" checked="checked"> Remember Me 
    </div>
    <div class="container" style="background-color: #fff"> <button type="button" class="cancelbtn"></button>
        <span class="psw"> <a href="#"> Forgot password?</a> </span>
    </div>
                
</form>

<!--Sign up page-->
<form action="logreg.php" method="post">
    <!--Name <br>
    <input type="text" name='firstname'   value="">
    <input type='text' name='lastname' value=''> <br>-->
    
    <input type="text" name="uname" required/>
    <input type='password' placeholder="Enter Password" id="password" name="psw" required/> 
    <button name="submit" value="2">Submit</button>
   
   <!-- <input type='text' placeholder="Confirm Password" id="confirm_password" required>
    <br>
    Email <br>
    <input type="text" placeholder="Enter Email" name="email" required> <br>-->
</form>