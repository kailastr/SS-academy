<?php $activePage = basename($_SERVER['PHP_SELF'], ".php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/ss-icon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->

    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src = "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src = "https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
$('#myTable').DataTable();
} );
</script>

  
</head>
<body class="host_version"> 
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="admin-index.php">
					<img src="images\ss-icon.png" alt="SS logo" width="75" height="75" style="border: 1px">
				
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($activePage == 'admin-index') { echo ' active';} ?>"><a class="nav-link" href="admin-index.php">Dashboard</a></li>
          <li class="nav-item <?php if($activePage == 'message') { echo ' active';} ?>"><a class="nav-link" href="message.php">Messages</a></li>
          <li class="nav-item <?php if($activePage == 'courses') { echo ' active';} ?>"><a class="nav-link" href="courses.php">Courses</a></li>
          <li class="nav-item <?php if($activePage == 'resultindex') { echo ' active';} ?>"><a class="nav-link" href="resultindex">Result</a></li>
          <li class="nav-item"><a class="nav-link" href="admin-logout.php"> Logout</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>