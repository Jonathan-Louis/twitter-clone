<!doctype html>
<html lang="en" class="h-100">
	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Twitter Clone</title>
		
		<link rel="stylesheet" href="http://jonathan-louis-com.stackstaging.com/twitter-clone/styles.css">
		
	</head>
	
	<body class="d-flex flex-column h-100">
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	
		<a class="navbar-brand" href="http://jonathan-louis-com.stackstaging.com/twitter-clone/">
			<img src="twitter.png" width="40" height="30" alt="">
		</a>
		
		<a class="navbar-brand" href="http://jonathan-louis-com.stackstaging.com/twitter-clone/">Twitter</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		
			<ul class="navbar-nav mr-auto">
		
				<li class="nav-item">
					<a class="nav-link" href="?page=timeline">Your Timeline</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="?page=yourtweets">Your Tweets</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="?page=publicprofile">Public Profile</a>
				</li>
		
		</ul>
		
			<div class="form-inline my-2 my-lg-0">
			
				<?php if($_SESSION['id']) { ?>
					
					<a class="btn btn-outline-success my-2 my-sm-0" href="?function=logout">Logout</a>
					
				<?php } else { ?>
				
					<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">Login or Sign-Up</button>
				
				<?php } ?>
			
			</div>
			
		</div>

	</nav>