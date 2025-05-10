<?php include("layouts/header.php"); ?>

<style>
  
    :root {
      --theme-color1: #AE7D54;       /* Primary brown */
      --theme-color1-rgb: 174, 125, 84;
      --theme-color2: #fdece3;       /* Light peach */
      --theme-color3: #faf7f2;       /* Off-white */
      --theme-color-light: #ffffff;  /* Pure white */
      --theme-color-dark: #121212;   /* Near black */
      --text-color:rgb(196, 196, 196);        /* Medium gray */
      --headings-color: #121212;    /* Dark headings */
      --accent-color: #b34700;      /* Warning orange */
      --secondary-accent: #ff8800;  /* Bright orange */
    }
  /* Animation Classes */
  .float-anim {
    animation: float 6s ease-in-out infinite;
  }
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
  }
  
  .pulse-anim {
    animation: pulse 2s ease infinite;
  }
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
  
  .border-glow {
    animation: border-glow 3s ease infinite alternate;
  }
  @keyframes border-glow {
    from { box-shadow: 0 0 5px rgba(var(--theme-color1-rgb), 0.5); }
    to { box-shadow: 0 0 20px rgba(var(--theme-color1-rgb), 0.8); }
  }
  
  /* Custom Styles */
  .page-title {
    background-size: cover;
    background-position: center;
    position: relative;
    z-index: 1;
  }
  .page-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: var(--gradient-1);
    z-index: -1;
  }
  
  .dish-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(var(--theme-color1-rgb), 0.1);
  }
  .dish-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
  }
  
  .menu-highlight {
    position: relative;
    overflow: hidden;
  }
  .menu-highlight::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: var(--theme-color1);
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }
  .menu-highlight:hover::after {
    transform: scaleX(1);
  }
  h1, h2, h3 {
    font-size: 2.5rem;
    font-family: Arial, Helvetica, sans-serif !important;
    font-weight: 600;
  }
/* For very small devices (up to 480px) */
@media (max-width: 991px) {
  h1, h2, h3 {
    font-size: 2rem;
    font-family: Arial, Helvetica, sans-serif !important;
  }
  .btn-lg {
    font-size: 0.85rem;
    padding: 0.6rem 1.2rem;
  }
  .feature-card .icon-box {
    font-size: 1.2rem;
  }
}
</style>
<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
	<div class="auto-container">
		<div class="title-outer text-center">
			<h1 class="title" class="title" style="color: var(--theme-color1);">Contact Us</h1>
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
