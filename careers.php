<?php include('layouts/header.php'); ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  :root {
    --theme-color1: #AE7D54;       /* Primary brown */
    --theme-color1-rgb: 174, 125, 84;
    --theme-color2: #fdece3;       /* Light peach */
    --theme-color3: #faf7f2;       /* Off-white */
    --theme-color-light: #ffffff;  /* Pure white */
    --theme-color-dark: #121212;   /* Near black */
    --text-color: #666666;        /* Medium gray */
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
    padding: 100px 0;
  }
  
  .page-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    z-index: -1;
  }
  
  .page-title .title {
    font-size: 3rem;
    font-weight: 700;
    color: var(--theme-color-light);
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  
  .page-breadcrumb {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
  }
  
  .page-breadcrumb li {
    margin: 0 10px;
    position: relative;
  }
  
  .page-breadcrumb li:after {
    content: '/';
    position: absolute;
    right: -15px;
    color: var(--theme-color-light);
  }
  
  .page-breadcrumb li:last-child:after {
    display: none;
  }
  
  .page-breadcrumb a {
    color: var(--theme-color-light);
    text-decoration: none;
    transition: all 0.3s ease;
  }
  
  .page-breadcrumb a:hover {
    color: var(--secondary-accent);
  }
  
  .sec-title {
    margin-bottom: 50px;
  }
  
  .sec-title h2 {
    color: var(--theme-color1);
    font-weight: 700;
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
  }
  
  .sec-title h2:after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    width: 80px;
    height: 3px;
    background: var(--accent-color);
    transform: translateX(-50%);
  }
  
  .sec-title .sub-title {
    display: block;
    color: var(--accent-color);
    font-weight: 600;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
  }
  
  .job-list {
    border-left: 4px solid var(--accent-color);
    transition: all 0.3s ease;
  }
  
  .job-list:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }
  
  .testimonial-box {
    border-top: 3px solid var(--theme-color1);
    transition: all 0.3s ease;
  }
  
  .testimonial-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  
  .tm-section-title {
    color: var(--theme-color1);
    font-weight: 700;
    text-align: center;
  }
  
  .tm-white-bg {
    background: var(--theme-color-light);
    padding: 80px 0;
  }
  
  .main-login {
    background: rgba(var(--theme-color-light), 0.9);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    max-width: 800px;
    margin: 0 auto;
  }
  
  .form-group label {
    color: var(--theme-color1);
    font-weight: 600;
  }
  
  .input-group-addon {
    background: var(--theme-color1);
    color: var(--theme-color-light);
    border: none;
  }
  
  .login-button {
    background: var(--accent-color);
    border: none;
    padding: 12px 30px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
  }
  
  .login-button:hover {
    background: var(--theme-color1);
    transform: translateY(-3px);
  }
  
  /* Responsive Styles */
  @media (max-width: 991px) {
    h1, h2, h3 {
      font-size: 2rem;
    }
    
    .page-title {
      padding: 70px 0;
    }
    
    .page-title .title {
      font-size: 2.2rem;
    }
    
    .main-login {
      padding: 30px 20px;
    }
  }
  
  @media (max-width: 767px) {
    .page-title .title {
      font-size: 1.8rem;
    }
    
    .sec-title h2 {
      font-size: 1.8rem;
    }
    
    .tm-section-title {
      font-size: 1.5rem;
    }
  }
   h1 {
      font-size: 2.5rem !important;
      font-family: Arial, Helvetica, sans-serif !important;
      font-weight: 600;
      color: #AE7D54;
    }
    h2 {
   font-size: 1.7rem !important;
   line-height: 30px !important;
   font-family: Arial, Helvetica, sans-serif !important;
   font-weight: 600 !important;
   color: #AE7D54;
    }
    h3 {
font-size: 1.5rem !important;
font-family: Arial, Helvetica, sans-serif !important;
font-weight: 600 !important;
color: #AE7D54;
 }
    /* For very small devices (up to 480px) */
    @media (max-width: 991px) {
      .btn-lg {
        font-size: 0.85rem;
        padding: 0.6rem 1.2rem;
      }
      .feature-card .icon-box {
        font-size: 1.2rem;
      }
       h1 {
   font-size: 2rem !important;
   font-family: Arial, Helvetica, sans-serif !important;
   font-weight: 600;
 }
    }
</style>

<!-- Page Title Section -->
<section class="page-title" style="background-image: url('images/background/carreer.jpg');">
  <div class="auto-container text-center text-white py-5" data-aos="fade-down">
    <h1 class="title" style="color: #AE7D54;">Join Our Team at Ranbirs</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html" class="text-white">Home</a></li>
      <li>Careers</li>
    </ul>
  </div>
</section>
<!-- Careers Section -->
<section class="pt-80 pb-60" style="background-color: var(--theme-color3);">
  <div class="auto-container text-center" data-aos="fade-up">
    <div class="sec-title mb-5">
      <span class="sub-title">WORK WITH US</span>
      <h2>Career Opportunities</h2>
      <p class="text-muted">Join our dynamic team and be part of something special in the hospitality industry</p>
    </div>

    <!-- Team Image -->
    <img src="https://images.pexels.com/photos/3184325/pexels-photo-3184325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=600&w=1000" 
         alt="Careers at Ranbirs" 
         class="img-fluid mb-4 shadow rounded border-glow" 
         style="max-height: 400px; object-fit: cover;">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="job-list bg-white p-4 rounded shadow-sm mb-4">
          <h5 class="mb-3"><i class="fas fa-briefcase me-2" style="color: var(--accent-color);"></i>We're Hiring Soon!</h5>
          <p class="mb-4">We have exciting opportunities coming up in various departments. Please check back soon for open positions or send us your resume for future consideration.</p>
          <button class="btn btn-secondary pulse-anim" disabled>Apply Now</button>
        </div>

        <div class="bg-white p-4 rounded shadow-sm">
          <h5 class="mb-3"><i class="fas fa-paper-plane me-2" style="color: var(--accent-color);"></i>Submit Your Resume</h5>
          <p>We're always looking for talented individuals to join our team. Send us your resume and we'll contact you when positions become available.</p>
          <p class="mt-3"><strong>Email:</strong> <a href="mailto:hr@hotelranbirs.com" style="color: var(--theme-color1);">hr@hotelranbirs.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Opening Details Section -->
<section class="tm-white-bg" id="myDiv">
  <div class="container">
    <div class="row">
      <div class="tm-section-header section-margin-top">
        <div class="col-lg-4 col-md-3 col-sm-3"><hr style="border-top: 2px solid var(--theme-color1); width: 90%;"></div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <h2 class="tm-section-title">Current Openings</h2>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-3"><hr style="border-top: 2px solid var(--theme-color1); width: 90%;"></div>  
      </div>        
    </div>
    
    <div class="row mt-5">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead style="background-color: var(--theme-color1); color: white;">
              <tr>
                <th style="width: 15%;">Post Name</th>
                <th>Description</th>
                <th style="width: 15%;">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Front Desk Associate</td>
                <td>Guest relations, check-in/check-out procedures, and customer service (Experience preferred)</td>
                <td><button id="apply1" class="btn btn-info" disabled>Coming Soon</button></td>
              </tr>
              <tr>
                <td>Housekeeping Staff</td>
                <td>Room cleaning, maintenance, and ensuring guest comfort</td>
                <td><button id="apply2" class="btn btn-info" disabled>Coming Soon</button></td>
              </tr>
              <tr>
                <td>Please Wait...</td>
                <td>We have number of posts coming soon. Please be patient and stay tuned for further announcements.</td>
                <td><button id="apply" class="btn btn-info" disabled>Apply Now</button></td>
              </tr>
              <tr>
                <th colspan="3" class="text-center" style="background-color: var(--theme-color2);">
                  Kindly drop your Resume/CV on hr@hotelranbirs.com
                </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-12 text-center">
        <img src="https://hotelranbirs.com/assets/img/careersfront.png" alt="Hotel Ranbirs Team" class="img-fluid shadow rounded" style="max-height: 400px;">
      </div>
    </div>
  </div>
</section>

<!-- Application Form Section -->
<section class="pb-80" style="background-image: url('https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg'); background-size: cover; background-attachment: fixed; position: relative;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(var(--theme-color1-rgb), 0.7);"></div>
  <div class="container position-relative" style="z-index: 1;">
    <div class="row main" id="myForm">
      <div class="main-login main-center">
        <h2 class="text-center mb-4" style="color: var(--theme-color-light);">Application Form</h2>
        <form class="" method="post" action="#">
          
          <div class="form-group mb-4">
            <label for="name" class="cols-sm-2 control-label" style="color: var(--theme-color-light);">Your Name</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required>
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="email" class="cols-sm-2 control-label" style="color: var(--theme-color-light);">Your Email</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="phone" class="cols-sm-2 control-label" style="color: var(--theme-color-light);">Mobile Number</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your Number" required>
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="address" class="cols-sm-2 control-label" style="color: var(--theme-color-light);">Address</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i></span>
                <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="resume" class="cols-sm-2 control-label" style="color: var(--theme-color-light);">Your Resume</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file fa-lg" aria-hidden="true"></i></span>
                <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
              </div>
              <small class="form-text" style="color: var(--theme-color-light);">Accepted formats: PDF, DOC, DOCX (Max 5MB)</small>
            </div>
          </div>

          <div class="form-group mt-5">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button pulse-anim">
              <i class="fa fa-paper-plane me-2"></i> Submit Application
            </button>
          </div>
        </form>
      </div>
    </div>      
  </div>
</section>

<!-- Testimonials Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color-light);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title">EMPLOYEE TESTIMONIALS</span>
      <h2>What Our Team Says</h2>
    </div>
    <div class="row justify-content-center">
      <!-- Testimonial 1 -->
      <div class="col-md-5 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="testimonial-box bg-light p-4 shadow-sm rounded d-flex flex-column h-100">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Employee 1" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; object-fit: cover;">
          <p class="mb-2"><i class="fas fa-quote-left me-2" style="color: var(--accent-color);"></i>Working at Hotel Ranbirs has been a wonderful experience. The management truly cares about employee growth and work-life balance.</p>
          <div class="mt-auto">
            <h6 class="mb-0 text-end">– Priya Sharma</h6>
            <p class="text-muted text-end mb-0">Front Desk Manager</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-5 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="testimonial-box bg-light p-4 shadow-sm rounded d-flex flex-column h-100">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Employee 2" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; object-fit: cover;">
          <p class="mb-2"><i class="fas fa-quote-left me-2" style="color: var(--accent-color);"></i>The team environment here is fantastic. I've grown both personally and professionally during my time at Hotel Ranbirs.</p>
          <div class="mt-auto">
            <h6 class="mb-0 text-end">– Rajesh Kumar</h6>
            <p class="text-muted text-end mb-0">Head Chef</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color2);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title">WHY JOIN US</span>
      <h2>Employee Benefits</h2>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="benefit-card bg-white p-4 rounded shadow-sm h-100 text-center">
          <div class="icon-box mb-3">
            <i class="fas fa-umbrella-beach fa-3x" style="color: var(--accent-color);"></i>
          </div>
          <h4>Paid Time Off</h4>
          <p>Generous vacation and sick leave policies to help you maintain work-life balance.</p>
        </div>
      </div>
      
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="benefit-card bg-white p-4 rounded shadow-sm h-100 text-center">
          <div class="icon-box mb-3">
            <i class="fas fa-utensils fa-3x" style="color: var(--accent-color);"></i>
          </div>
          <h4>Meal Benefits</h4>
          <p>Complimentary meals during shifts and discounts at our restaurant.</p>
        </div>
      </div>
      
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="benefit-card bg-white p-4 rounded shadow-sm h-100 text-center">
          <div class="icon-box mb-3">
            <i class="fas fa-graduation-cap fa-3x" style="color: var(--accent-color);"></i>
          </div>
          <h4>Training Programs</h4>
          <p>Continuous learning opportunities to advance your hospitality career.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
  });
  
  // Flexslider initialization
  $(document).ready(function(){
    $('.flexslider').flexslider({
      animation: "fade",
      slideshow: true,
      slideshowSpeed: 5000,
      animationSpeed: 600,
      controlNav: false,
      directionNav: false
    });
  });
</script>

<?php include("layouts/footer.php"); ?>