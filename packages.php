<?php include('layouts/header.php'); ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

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
  
  /* Page Title */
  .page-title {
  background: linear-gradient(
                  rgba(0, 0, 0, 0.3), 
                  rgba(0, 0, 0, 0.1)
              ), 
              url('images/background/meeting-backgound.jpg');
  background-size: cover;
  background-position: center;
  padding: 120px 0 80px;
  color: var(--theme-color-light);
  position: relative;
}

  
  .page-title h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 15px;
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
  
  /* Meeting Hero Section */
  .meeting-hero {
    padding: 80px 0;
    background-color: var(--theme-color3);
  }
  
  .meeting-card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
    border: 1px solid rgba(var(--theme-color1-rgb), 0.1);
  }
  
  .meeting-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
  }
  
  .meeting-img {
    height: 250px;
    object-fit: cover;
    width: 100%;
  }
  
  .meeting-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--accent-color);
    color: white;
    padding: 5px 15px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
  }
  
  /* Features Section */
  .feature-icon {
    font-size: 2.5rem;
    color: var(--theme-color1);
    margin-bottom: 15px;
    transition: all 0.3s ease;
  }
  
  .feature-card {
    padding: 30px;
    border-radius: 10px;
    background: var(--theme-color-light);
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
    border: 1px solid rgba(var(--theme-color1-rgb), 0.1);
  }
  
  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
  
  .feature-card:hover .feature-icon {
    transform: scale(1.1);
    color: var(--accent-color);
  }
  
  /* Pricing Section */
  .pricing-card {
    border: 1px solid rgba(var(--theme-color1-rgb), 0.2);
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
    background: var(--theme-color-light);
  }
  
  .pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }
  
  .pricing-header {
    background-color: var(--theme-color1);
    color: var(--theme-color-light);
    padding: 25px;
    text-align: center;
  }
  
  .pricing-body {
    padding: 30px;
  }
  
  .price {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--theme-color1);
  }
  
  /* Gallery Section */
  .gallery-item {
    margin-bottom: 30px;
    overflow: hidden;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .gallery-img {
    transition: transform 0.5s ease;
    height: 250px;
    object-fit: cover;
    width: 100%;
  }
  
  .gallery-item:hover .gallery-img {
    transform: scale(1.1);
  }
  
  .gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(var(--theme-color1-rgb), 0.8), transparent);
    color: var(--theme-color-light);
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .gallery-item:hover .gallery-overlay {
    opacity: 1;
  }
  
  /* CTA Section */
  .cta-section {
    position: relative;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    padding: 80px 0;
  }
  
  .cta-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7)
  }
  
  .cta-content {
    position: relative;
    z-index: 1;
  }
  
  /* Responsive Adjustments */
  @media (max-width: 991px) {
    h1, h2, h3 {
      font-size: 2rem;
    }
    
    .page-title {
      padding: 80px 0;
    }
    
    .page-title h1 {
      font-size: 2.2rem;
    }
    
    .meeting-img, .gallery-img {
      height: 200px;
    }
    
    .feature-card, .pricing-card {
      padding: 20px;
    }
  }
  
  @media (max-width: 767px) {
    .page-title h1 {
      font-size: 2rem;
    }
    
    .price {
      font-size: 2rem;
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
 h2{
  text-align: center !important;
 }
    }
</style>

<!-- Page Title Section -->
<section class="page-title">
  <div class="auto-container text-center" data-aos="fade-down">
    <h1 class="title" style="color: #AE7D54">Premium Meeting Rooms in Gomti Nagar</h1>
    <p class="lead mb-4" style="max-width: 800px; margin: 0 auto; color: white !important;">Professional meeting spaces designed for productivity and success</p>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Meeting Rooms</li>
    </ul>
  </div>
</section>

<!-- Meeting Hero Section -->
<section class="meeting-hero pt-80 pb-80">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <div class="meeting-card border-glow">
          <div class="position-relative">
            <img src="images/background/meeting-backgound.jpg" alt="Executive Boardroom" class="meeting-img">
            <div class="meeting-badge pulse-anim">Most Popular</div>
          </div>
          <div class="p-4 bg-white">
            <h3 style="color: var(--theme-color1);">Executive Boardroom</h3>
            <p class="text-muted">Our premium meeting space designed for corporate discussions and presentations</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Seats up to 20 attendees</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Natural daylight with blackout options</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Premium ergonomic seating</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> State-of-the-art technology</li>
            </ul>
            <a href="#contact" class="btn btn-primary mt-3">Book This Room</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="mb-4" style="color: var(--theme-color1);">Professional Meeting Spaces in Lucknow</h2>
        <p class="lead mb-4">Hotel Ranbirs in Gomti Nagar offers state-of-the-art meeting facilities designed to enhance productivity and professionalism for your business needs.</p>
        
        <div class="row mt-4">
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h4>Prime Location</h4>
              <p>Centrally located in Gomti Nagar with easy access from all parts of Lucknow</p>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-wifi"></i>
              </div>
              <h4>High-Speed WiFi</h4>
              <p>Dedicated business-grade internet for seamless connectivity</p>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Flexible Capacity</h4>
              <p>Rooms available for 10 to 50 attendees in various configurations</p>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-clock-history"></i>
              </div>
              <h4>24/7 Support</h4>
              <p>Dedicated staff available to assist with all your meeting needs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Amenities Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color2);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--accent-color);">FACILITIES</span>
      <h2 style="color: var(--theme-color1);">Meeting Room Amenities</h2>
      <p class="text-muted">Everything you need for productive business meetings</p>
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="bi bi-projector"></i>
          </div>
          <h4>AV Equipment</h4>
          <p>HD Projector & 120" screen with HDMI/USB connectivity</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="bi bi-mic"></i>
          </div>
          <h4>Audio Systems</h4>
          <p>Crystal clear sound with wireless microphones</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="bi bi-cup-hot"></i>
          </div>
          <h4>Catering</h4>
          <p>Tea/Coffee breaks and lunch options available</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="bi bi-printer"></i>
          </div>
          <h4>Business Services</h4>
          <p>Printing, scanning and secretarial support</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color-light);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--accent-color);">PACKAGES</span>
      <h2 style="color: var(--theme-color1);">Meeting Room Packages</h2>
      <p class="text-muted">Flexible options for every business need</p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card h-100">
          <div class="pricing-header">
            <h3>Half Day</h3>
            <p>4 Hours Meeting</p>
          </div>
          <div class="pricing-body text-center">
            <div class="price">₹4,500</div>
            <p>+ Taxes as applicable</p>
            <ul class="list-unstyled my-4">
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Includes basic AV setup</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Mineral water service</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Writing pads & pens</li>
              <li class="py-2"><i class="bi bi-x text-danger me-2"></i> No catering included</li>
            </ul>
            <a href="#contact" class="btn btn-outline-primary">Book Now</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card h-100">
          <div class="pricing-header">
            <h3>Full Day</h3>
            <p>8 Hours Meeting</p>
          </div>
          <div class="pricing-body text-center">
            <div class="price">₹7,500</div>
            <p>+ Taxes as applicable</p>
            <ul class="list-unstyled my-4">
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Full AV setup</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Tea/Coffee service</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Flip chart & markers</li>
              <li class="py-2"><i class="bi bi-x text-danger me-2"></i> Lunch not included</li>
            </ul>
            <a href="#contact" class="btn btn-primary pulse-anim">Popular Choice</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card h-100">
          <div class="pricing-header">
            <h3>Executive Package</h3>
            <p>Full Day Premium</p>
          </div>
          <div class="pricing-body text-center">
            <div class="price">₹12,000</div>
            <p>+ Taxes as applicable</p>
            <ul class="list-unstyled my-4">
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Premium AV setup</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Lunch for 10 persons</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Dedicated coordinator</li>
              <li class="py-2"><i class="bi bi-check text-success me-2"></i> Valet parking</li>
            </ul>
            <a href="#contact" class="btn btn-outline-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="pb-80 pt-60" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--accent-color);">GALLERY</span>
      <h2 style="color: var(--theme-color1);">Our Meeting Spaces</h2>
      <p class="text-muted">Professional environments designed for productivity</p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-item">
          <img src="images\banner\room1fullsize.JPG" alt="Boardroom Setup" class="gallery-img">
          <div class="gallery-overlay">
            <h5 style="color:white;">Executive Boardroom</h5>
            <p style="color:white; !important">U-shaped setup for 18 persons</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-item">
          <img src="images\banner\room1fullsize.JPG" alt="Conference Setup" class="gallery-img">
          <div class="gallery-overlay">
            <h5 style="color:white;">Conference Style</h5>
            <p style="color:white;">Theater setup for 30 persons</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="gallery-item">
          <img src="images\banner\room1fullsize.JPG" alt="Training Room" class="gallery-img">
          <div class="gallery-overlay">
            <h5 style="color:white;">Training Room</h5>
            <p style="color:white;">Classroom setup for 25 persons</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
  <div class="cta-overlay"></div>
  <div class="auto-container">
    <div class="cta-content text-center" data-aos="zoom-in">
      <h2 class="text-white mb-4">Ready to Book Your Meeting?</h2>
      <p class="text-white mb-5" style="max-width: 700px; margin: 0 auto;">Our professional events team will help you plan the perfect business meeting, conference or corporate event at Hotel Ranbirs</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--accent-color); color: white;">
          <i class="bi bi-envelope me-2"></i> Send Enquiry
        </a>
        <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">
          <i class="bi bi-telephone me-2"></i> Call Us Now
        </a>
      </div>
    </div>
  </div>
  
  <!-- Floating decoration elements -->
  <img src="https://cdn-icons-png.flaticon.com/512/5787/5787068.png" class="position-absolute float-anim" style="width: 2rem; top: 20%; left: 10%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3194/3194889.png" class="position-absolute float-anim" style="width: 2rem; bottom: 30%; right: 15%; animation-delay: 1s;">
</section>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out'
  });
</script>

<?php include("layouts/footer.php"); ?>