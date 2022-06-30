<!doctype html>
<html lang="en">
  <head>
  <?php
   ob_start();
   session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";

    $conn = new mysqli($servername, $username, $password, $dbname);
    ?>
  	<title>SS Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/ss-icon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	</head>
	<body>

    <?php
    //check authentication
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($conn, "select * from admin_login where username='$username' && password='$password'");
        if (mysqli_num_rows($result)>0){
            $_SESSION['valid'] = true;
            echo "<script type='text/javascript'> document.location ='../admin-index.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Incorrect Username or Password !!'); </script>";
        }
    }

    ?>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/ss.jpg);"></div>
		      	<h3 class="text-center mb-0">SS Academy</h3>
		      	<p class="text-center">Admin Login</p>
						<form action="" method="post" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" name="password" class="form-control" placeholder="Password" required>
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" name = "submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
	            </div>
	          </form>
	          
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

