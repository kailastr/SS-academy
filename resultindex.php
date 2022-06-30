
<?php 
ob_start();
session_start();
if(isset( $_SESSION['valid']))
{
    
$title = "Result Update";
require_once('admin-header.php'); 
include('dbconnection.php');

//Databse Connection file

if(isset($_POST['submit']))
  {
  	//getting the post values
    $year=$_POST['year'];
    $details=$_POST['details'];
    $total_students=$_POST['total_students'];
    $full_Aplus=$_POST['full_Aplus'];
    $standard=$_POST['standard'];
    

    // Image upload

$target_dir = "uploads-result/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$image = $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) 
        {
            $uploadOk = 1;
         } 
        else
         {
                $uploadOk = 0;
        }


// Check if file already exists
if (file_exists($target_file))
{
  echo "<script>alert('Sorry, file already exists.');</script>"; 
  $uploadOk = 0;
  echo "<script>window.location.href = 'resultindex.php'</script>"; 
}

// Check file size
if ($_FILES["img"]["size"] > 10000000)
 {
  echo "<script>alert('Sorry, your file is too large.');</script>"; 
  $uploadOk = 0;
  echo "<script>window.location.href = 'resultindex.php'</script>"; 
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) 
{
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');</script>"; 
    $uploadOk = 0;
    echo "<script>window.location.href = 'resultindex.php'</script>"; 
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "<script>alert('Sorry, File is unable to upload.');</script>"; 
// if everything is ok, try to upload file
} 
else
 {
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    // Query for data insertion
    $query=mysqli_query($con, "insert into result(year,details, total_students, full_Aplus, standard, image) value('$year','$details', '$total_students', '$full_Aplus', '$standard', '$image' )");
    if ($query)
     {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='resultindex.php'; </script>";
    }
    else
    {
        echo "<script>alert('Something went wrong Please try again');</script>"; 
        echo "<script>window.location.href = 'resultindex.php'</script>"; 
    }

  }
   else 
    {
        echo "<script>alert('Sorry.. There was an error uploading your file..Try again');</script>"; 
        echo "<script>window.location.href = 'resultindex.php'</script>"; 
    }
}
  }

  
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);

$ret=mysqli_query($con,"select * from result where id=$rid");
while ($row=mysqli_fetch_array($ret)) {
    $img_name = $row['image'];
    $target_dir = "uploads-result/";
    $target_file = $target_dir . basename($img_name);
    if (file_exists($target_file))
{
    unlink($target_file);
}
}



$sql=mysqli_query($con,"delete from result where id=$rid");
echo "<script>alert('The record deleted successfully');</script>"; 
echo "<script>window.location.href = 'resultindex.php'</script>";     
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Table Design</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v90/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 200px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box .input-group-addon {
    border: none;
    border: none;
    background: transparent;
    position: absolute;
    z-index: 9;
}
.search-box input {
    height: 34px;
    padding-left: 28px;     
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 8px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    padding: 0 10px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}



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
    <form  method="POST" enctype="multipart/form-data">
		<h2>Fill Data</h2>
        <div class="row">
		    <p class="hint-text">Fill data regarding the result.</p>
        </div>
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
        	<input type="file" name="img" value="choose result image">
        </div>
		
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
</div>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Result <b>Update</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Year</th>                       
                        <th>Details</th>
                        <th>total_students</th>
                        <th>total_Aplus</th>
                        <th>standard</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$ret=mysqli_query($con,"select * from result");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php  echo $row['year'];?>
                        <td><?php  echo $row['details'];?></td>                        
                        <td><?php  echo $row['total_students'];?></td>
                        <td> <?php  echo $row['full_Aplus'];?></td>
                        <td><?php  echo $row['standard'];?></td>
                        <td><?php  echo $row['image'];?></td>
                        <td>
                            <a href="read.php?viewid=<?php echo htmlentities ($row['id']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="edit.php?editid=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="resultindex.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else { 
    ?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
	<a href="edit.php?editid=1"><i class="material-icons">&#xE254;</i></a>
    <a href="resultindex.php?delid="><i class="material-icons">&#xE872;</i></a>
                       
</tr>
<?php 
}
?>                 
                
                </tbody>
            </table>
       
        </div>
    </div>
</div>     

<?php
 require_once('admin-footer.php');
}
else
{
    header("Location:admin/admin-login.php");
} 
 ?>