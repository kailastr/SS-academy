<?php 

$title = "Higher Secondary Results";
require("header.php");
?>
<div class="all-title-box">
		<div class="container text-center">
			<h1> Higher Secondary Result</sup><span class="m_1">Your future is created by what you do today.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">We are always there for your success</p>
                </div>
            </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$i=1;
$sql = "SELECT * FROM result where standard = 1 order by id desc";
$rslt = $conn->query($sql);
if($rslt){
if ($rslt -> num_rows > 0) {
    // output data of each row
    while($row = $rslt->fetch_assoc()) 
	{
		?>
		  <hr class="invis"> 

<div class="row"> 
	<div class="col-lg-2 col-md-2 col-2"></div>
	<div class="col-lg-8 col-md-8 col-8">
		<div class="course-item">
			<div class="image-blog">
				<img src=" <?php echo $row['image'];?>" alt="" class="img-fluid">
			</div>
			<div class="course-br">
				<div class="course-title">
					<h2><a href="#" title=""> <?php echo $row['year'];?></a></h2>
				</div>
				<div class="course-desc">
					<p style="font-size: 16px"> <?php echo $row['details'];?> </p>
				</div>
			
			</div>
			<div class="course-meta-bot">
				<ul>
					<li style="font-size: 16px"><i class="fa fa-users" aria-hidden="true"></i> <?php echo $row['total_students'];?> Student</li>
					<li style="font-size: 16px"><i class="fa fa-child" aria-hidden="true" ></i> <?php echo $row['full_Aplus'];?> Full A+</li>
				</ul>
			</div>
		</div>
	</div><!-- end col -->
	<div class="col-lg-2 col-md-2 col-2"></div>
</div><!-- end row -->
		<?php
	}
}
}
?>


    </div><!-- end section -->

   
        <?php require_once('footer.php'); ?>  