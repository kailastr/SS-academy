<?php 
$title = "SS Admission form";
require("header.php");
?>

<style>
    .bodybg {
        background: url("images/bg2.jpg");
        background-repeat: no-repeat;
        background-size: cover;      
        margin-top: 0%;
    }

    .admform {
        background-color: (0,0,0,0.5);

    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course";

// create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/bg2.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Admission Form</h3>
                
            </div><!-- end title -->

            <div class="row">
                
				<div class="col-xl-2 col-md-2 col-sm-2"></div>
				<div class="col-xl-8 col-md-8 col-sm-8">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="admission" class="" action="admconnect.php" name="admission" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="fname" id="first_name" class="form-control" placeholder="First Name" style="color: black;" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="lname" id="last_name" class="form-control" placeholder="Last Name" style="color: black;" required>
                                </div>                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="num" id="phone" class="form-control" placeholder="Your Phone" style="color: black;" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="pname" id="first_name" class="form-control" placeholder="Parent Name" style="color: black;" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="anum" id="phone" class="form-control" placeholder="Parent's number" style="color: black;" pattern="{10}" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="address" id="comments" rows="6" placeholder="Address" style="color: black;" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                               
                                <select name="standard" id="name" class="form-control" style="color: black;" required>
                                    <option value="" selected disabled hidden>Choose class</option>
                                    <?php $i=1;
                                    $sql = "SELECT * FROM course order by course_number";
                                    $rslt = $conn->query($sql);
                                    if($rslt){
                                        if ($rslt -> num_rows > 0) {
                                        // output data of each row
                                        while($row = $rslt->fetch_assoc()) 
	                                    {
                                    ?>

                                        <option value="<?php echo $row['course_name'];?>"><?php echo $row['course_name'];?></sup></option>                                    
                                        <?php
                                    	            }
                                                }
                                            }
                                        ?>
                                </select>
                                </div>
                                <br>
                                <br>

								<div class="col-lg-4 col-md-4 col-sm-4"></div>
									<div class="col-lg-4 col-md-4 col-sm-6">
                                 		<button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" data-dismiss="modal">SUBMIT</button>
                                	</div>
								<div class="col-lg-4 col-md-4 col-sm-4"></div>
                            </div>
                        </form>
                    </div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<?php
require("footer.php");
?>