

<?php 
//Databse Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $year=$_POST['year'];
    $details=$_POST['details'];
    $total_students=$_POST['total_students'];
    $full_Aplus=$_POST['full_Aplus'];
    $standard=$_POST['standard'];
	$image=$_POST['image'];
   
	// image uploading
	<?php
$target_dir = "upload-result/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

		// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  $query=mysqli_query($con, "insert into result(year,details, total_students, full_Aplus, standard, image) value('$year','$details', '$total_students', '$full_Aplus', '$standard', '$image' )");
	  if ($query) {
	  
  
	  echo "<script>alert('You have successfully inserted the data');</script>";
	  echo "<script type='text/javascript'> document.location ='admin-index.php'; </script>";
	}
	else
	  {
		echo "<script>alert('Something Went Wrong. Please try again');</script>";

	  }
	} else {
	  echo "Sorry, there was an error uploading your file.";
	}
  }
  ?>

  // Query for data insertion
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>PHP Crud Operation!!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST">
		<h2>Fill Data</h2>
		<p class="hint-text">Fill data regarding the result.</p>
        <div class="form-group">
			<div class="form-group" style="text-align:center;">
        		<input type="radio" id="HS" name="standard" value="0" >
				<label for="HS" style="color: black;">High School</label> &emsp;
				<input type="radio" id="HSS" name="standard" value="1" >
				<label for="HSS" style="color: black;">Higher Secondary</label>
        	</div>			
			<div class="row">				
				<div class="col"><input type="number" class="form-control" name="total_students" placeholder="Total Students" required="true"></div>
				<div class="col"><input type="number" class="form-control" name="full_Aplus" placeholder="Full A+" required="true"></div>
			</div>        	
        </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="year" placeholder="Enter batch year" required="true">
        </div>
		<div class="form-group">
            <textarea class="form-control" name="details" placeholder="Enter the sentence to be shown" required="true"></textarea>
        </div>  
        <div class="form-group">
        	<input type="file" name="image">
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">View Aready Inserted Data!!  <a href="resultindex.php">View</a></div>
</div>
</body>
</html>