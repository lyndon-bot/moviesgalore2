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
					<a class="navbar-brand" href="#">Movies Galore</a>
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
        <?php
        
        include "query.php";
        include "conn.php";
            
        ?>
  
