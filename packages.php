<?php include('layouts/header.php'); ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
  :root {
    --theme-color1: #AE7D54;
    --theme-color1-rgb: 174, 125, 84;
    --theme-color2: #fdece3;
    --theme-color3: #faf7f2;
    --theme-color-light: #ffffff;
    --theme-color-dark: #121212;
    --text-color: #666666;
    --headings-color: #121212;
  }
  
  /* Page Title */
  .page-title {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/background/meeting-bg.jpg);
    background-size: cover;
    background-position: center;
    padding: 120px 0 80px;
    color: white;
    position: relative;
  }
  
  .page-title h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
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
  }
  
  .meeting-card:hover {
    transform: translateY(-10px);
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
    background: var(--theme-color1);
    color: white;
    padding: 5px 15px;
    border-radius: 30px;
    font-size: 14px;
  }
  
  /* Features Section */
  .feature-icon {
    font-size: 2.5rem;
    color: var(--theme-color1);
    margin-bottom: 15px;
  }
  
  .feature-card {
    padding: 30px;
    border-radius: 10px;
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
  }
  
  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
  
  /* Pricing Section */
  .pricing-card {
    border: 1px solid #eee;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  
  .pricing-card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
  
  .pricing-header {
    background-color: var(--theme-color1);
    color: white;
    padding: 20px;
    text-align: center;
  }
  
  .pricing-body {
    padding: 30px;
    background: white;
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
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    color: white;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .gallery-item:hover .gallery-overlay {
    opacity: 1;
  }
  
  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .page-title h1 {
      font-size: 2rem;
    }
    
    .meeting-img, .gallery-img {
      height: 200px;
    }
  }
</style>

<!-- Page Title Section -->
<section class="page-title">
  <div class="auto-container text-center" data-aos="fade-down">
    <h1 class="title">Book a Professional Meeting Room in Lucknow</h1>
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
        <div class="meeting-card">
          <div class="position-relative">
            <img src="images/meetings/boardroom.jpg" alt="Executive Boardroom" class="meeting-img">
            <div class="meeting-badge">Popular Choice</div>
          </div>
          <div class="p-4 bg-white">
            <h3>Executive Boardroom</h3>
            <p class="text-muted">Our premium meeting space designed for corporate discussions and presentations</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Seats up to 20 attendees</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Natural daylight with blackout options</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> Premium ergonomic seating</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="mb-4">Ideal for Corporate Events & Business Needs</h2>
        <p class="lead mb-4">Hotel Ranbirs in Gomti Nagar offers state-of-the-art meeting facilities designed to enhance productivity and professionalism.</p>
        
        <div class="row mt-4">
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-building"></i>
              </div>
              <h4>Central Location</h4>
              <p>Prime Gomti Nagar address with easy access from all parts of Lucknow</p>
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
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Amenities Section -->
<section class="pt-80 pb-80 bg-light">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Amenities & Facilities</h2>
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
<section class="pt-80 pb-80">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Meeting Room Packages</h2>
      <p class="text-muted">Flexible options for every business need</p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card">
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
        <div class="pricing-card">
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
            <a href="#contact" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card">
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
<section class="pb-80 pt-60 bg-light">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Our Meeting Spaces</h2>
      <p class="text-muted">Professional environments designed for productivity</p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-item">
          <img src="images/meetings/meeting1.jpg" alt="Boardroom Setup" class="gallery-img">
          <div class="gallery-overlay">
            <h5>Executive Boardroom</h5>
            <p>U-shaped setup for 18 persons</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-item">
          <img src="images/meetings/meeting2.jpg" alt="Conference Setup" class="gallery-img">
          <div class="gallery-overlay">
            <h5>Conference Style</h5>
            <p>Theater setup for 30 persons</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="gallery-item">
          <img src="images/meetings/meeting3.jpg" alt="Training Room" class="gallery-img">
          <div class="gallery-overlay">
            <h5>Training Room</h5>
            <p>Classroom setup for 25 persons</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section id="contact" class="pt-80 pb-80" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(images/background/cta-bg.jpg); background-size: cover; background-position: center; color: white;">
  <div class="auto-container text-center" data-aos="fade-up">
    <h2 class="mb-4 text-white">Ready to Book Your Meeting?</h2>
    <p class="mb-5 text-light">Our events team will help you plan the perfect business meeting or conference</p>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6 mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <a href="tel:+919876543210" class="btn btn-light btn-lg w-100 py-3">
              <i class="bi bi-telephone me-2"></i> Call +91 9876543210
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <a href="contact.html" class="btn btn-outline-light btn-lg w-100 py-3">
              <i class="bi bi-envelope me-2"></i> Send Enquiry
            </a>
          </div>
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
    easing: 'ease-in-out'
  });
</script>

<?php include("layouts/footer.php"); ?>