<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta name="author" content="Sadhana Rotkar">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="og:title" property="og:title" content="Mobeserv">


	<title>Mobeserv</title>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/plugins.css" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" /> -->
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<!-- Preloader -->
	<div class="preloader-bg"></div>
	<div id="preloader">
		<div id="preloader-status">
			<div class="preloader-position loader"> <span></span> </div>
		</div>
	</div>
	<!-- Progress scroll totop -->
	<div class="progress-wrap cursor-pointer">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo -->
			<a class="logo" href="index.php"> <img src="img/logo.png" alt=""> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link <?php if($activePage =='home'){echo 'active';}?>" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link <?php if($activePage =='about'){echo 'active';}?>" href="about.php">About</a></li>
					<li class="nav-item dropdown"> <span class="nav-link">Solutions <i class="ti-angle-down"></i></span>
						<ul class="dropdown-menu last">
							<li class="dropdown-item <?php if($activePage =='Field Force Automation'){echo 'active';}?>"><a href="field_force_automation.php">Field Force Automation</a></li>
							<li class="dropdown-item <?php if($activePage =='healthInsurance'){echo 'active';}?>"><a href="health_insurance.php">Health Insurance</a></li>
							<li class="dropdown-item <?php if($activePage =='medicalCRM'){echo 'active';}?>"><a href="medical_CRM.php">Medical CRM</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link <?php if($activePage =='showcase'){echo 'active';}?>" href="showcase.php">Showcase</a></li>
					<li class="nav-item dropdown"> <span class="nav-link">Resources <i class="ti-angle-down"></i></span>
						<ul class="dropdown-menu last">
							<li class="dropdown-item"><a>Blogs</a></li>
							<li class="dropdown-item <?php if($activePage =='casestudy'){echo 'active';}?>"><a href="casestudy.php">Case Studies</a></li>
							<li class="dropdown-item <?php if($activePage =='clients'){echo 'active';}?>"><a href="clients.php">Clients</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link <?php if($activePage =='contact'){echo 'active';}?>" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>