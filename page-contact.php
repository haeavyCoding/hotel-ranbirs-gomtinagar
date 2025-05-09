<?php include("layouts/header.php"); ?>
<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
	<div class="auto-container">
		<div class="title-outer text-center">
			<h1 class="title">Contact Us</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!--Contact Details Start-->
<section class="contact-details">
	<div class="container pt-110 pb-70">
		<div class="row">
			<div class="col-xl-7 col-lg-6">
				<div class="sec-title">
					<span class="sub-title before-none">Send us an email</span>
					<h2>Feel free to write</h2>
				</div>
				<!-- Contact Form -->
				<form id="contact_form" name="contact_form" action="#" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mb-3">
								<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
					</div>
					<div class="mb-5">
						<input name="form_botcheck" class="form-control" type="hidden" value="" />
						<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit now</span></button>
						<button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
					</div>
				</form>
				<!-- Contact Form Validation-->
			</div>
			<div class="col-xl-5 col-lg-6">
				<div class="contact-details__right">
					<div class="sec-title">
						<span class="sub-title before-none">Need any help?</span>
						<h2>Get in touch with us</h2>
						<div class="text">Reach out for bookings, events, or any general queries — we're here to help you make your stay memorable at Hotel Ranbirs.</div>
					</div>
					<ul class="list-unstyled contact-details__info">
						<li>
							<div class="icon">
								<span class="lnr-icon-phone-plus"></span>
							</div>
							<div class="text">
								<h6 class="mb-1">Phone</h6>
								<a href="tel:05224056579">0522-4056579</a><br>
								<a href="tel:+918429521002">+91-8429521002</a>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-envelope1"></span>
							</div>
							<div class="text">
								<h6 class="mb-1">Email</h6>
								<a href="mailto:info@hotelranbirs.com">info@hotelranbirs.com</a>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="lnr-icon-location"></span>
							</div>
							<div class="text">
								<h6 class="mb-1">Address</h6>
								<span>
									ADMIN OFFICE<br>
									CP 125, Viraj Khand,<br>
									Gomtinagar, Lucknow – 226010, India
								</span>
							</div>
						</li>
						<li class="mt-4">
							<div class="social-links">
								<a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact Details End-->

<!-- Map Section-->
<section class="map-section">
	<iframe class="map w-100" src="https://www.google.com/maps?q=CP+125,+Viraj+Khand,+Gomtinagar,+Lucknow,+India&output=embed" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<!--End Map Section-->
<?php include("layouts/footer.php"); ?>
