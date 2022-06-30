<?php 

$title = "Contact SS Academy";
require("header.php");

?>

<?php require_once('header.php'); ?><!-- Calling header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact<span class="m_1">Contact us, we are always there for you.</span></h1>
		</div>
	</div>
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are here!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" pattern="{10}" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.." required></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d795.8789263705362!2d75.94092824030787!3d10.783106461038075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7bb0680bd15d1%3A0xbfb42743ca242094!2sQWMR%2B77Q%2C%20Kuttadu%2C%20Ponnani%2C%20Kerala%20679586!5e0!3m2!1sen!2sin!4v1636179778742!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div class="blog-author">
		<div class="author-bio">
			<h3 class="author_name"><a href="#">You Tube</a></h3>
			<h5>Learn with us on <a href="#">You Tube</a></h5>
			<p class="author_det">
				We provide you all a free You Tube reference classes which could help you to go through the syllabus at anytime, anywhere.
                <br>
                <br>
			</p>
		</div>
		<div class="author-desc">
			<img src="images/youtube-logo-7630 (1).png" alt="about author">
			<ul class="author-social">
					<li><a href="https://www.youtube.com/results?search_query=ss+academy+ponnani"><i class="fa fa-hand-pointer-o"></i></a></li>
			</ul>
		</div>
	</div>
	<br>
	
    <?php require_once('footer.php'); ?>