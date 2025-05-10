<?php include('layouts/header.php'); ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
  
  /* Page Title Section */
  .page-title {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/background/page-title-bg.png);
    background-size: cover;
    background-position: center;
    padding: 120px 0 80px;
    color: white;
    position: relative;
  }
  
  .page-title h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
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
    content: "/";
    position: absolute;
    right: -15px;
    color: var(--theme-color1);
  }
  
  .page-breadcrumb li:last-child:after {
    display: none;
  }
  
  .page-breadcrumb a {
    color: var(--theme-color1);
    text-decoration: none;
    transition: all 0.3s;
  }
  
  .page-breadcrumb a:hover {
    color: white;
  }
  
  /* Meeting Overview Section */
  .content-box h2 {
    color: var(--headings-color);
    font-size: 2.5rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
  }
  
  .content-box h2:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 80px;
    height: 3px;
    background: var(--theme-color1);
  }
  
  .content-box p {
    color: var(--text-color);
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
  }
  
  .list-group-item {
    padding: 12px 0;
    font-size: 1.1rem;
    color: var(--text-color);
    border-left: 0;
    border-right: 0;
    transition: all 0.3s;
  }
  
  .list-group-item:hover {
    color: var(--theme-color1);
    transform: translateX(5px);
  }
  
  .list-group-item i {
    margin-right: 10px;
    width: 20px;
    text-align: center;
  }
  
  /* Ideal For Section */
  .feature-section-two {
    position: relative;
    overflow: hidden;
  }
  
  .sec-title {
    margin-bottom: 50px;
  }
  
  .sec-title h2 {
    font-size: 2.5rem;
    color: var(--headings-color);
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
  }
  
  .sec-title h2:after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -10px;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: var(--theme-color1);
  }
  
  .sec-title p {
    color: var(--text-color);
    font-size: 1.1rem;
    max-width: 700px;
    margin: 0 auto;
  }
  
  /* Why Choose Section */
  .bg-light {
    background-color: var(--theme-color3) !important;
  }
  
  /* Amenities Icons */
  .fa-projector:before {
    content: "\f008";
  }
  
  .fa-desk:before {
    content: "\f6c7";
  }
  
  /* Image Styling */
  .img-fluid {
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }
  
  .img-fluid:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
  }
  
  /* Responsive Adjustments */
  @media (max-width: 991.98px) {
    .page-title h1 {
      font-size: 2.5rem;
    }
    
    .content-box h2, .sec-title h2 {
      font-size: 2rem;
    }
  }
  
  @media (max-width: 767.98px) {
    .page-title {
      padding: 80px 0 50px;
    }
    
    .page-title h1 {
      font-size: 2rem;
    }
    
    .content-box h2, .sec-title h2 {
      font-size: 1.75rem;
    }
    
    .content-box, .sec-title {
      text-align: center;
    }
    
    .content-box h2:after {
      left: 50%;
      transform: translateX(-50%);
    }
  }
  
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

<!-- Page Title Section -->
<section class="page-title">
  <div class="auto-container text-center" data-aos="fade-down" data-aos-delay="100">
    <h1 class="title" style="color: var(--theme-color1);">Meetings & Events</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Meetings & Events</li>
    </ul>
  </div>
</section>

<!-- Meeting Overview Section -->
<section class="pt-120 pb-80">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
        <div class="image-container">
          <img src="images/banner/banner1-1.jpg" alt="Meeting Hall at Hotel Ranbirs" class="img-fluid rounded">
          <div class="overlay-box" data-aos="fade" data-aos-delay="600">
            <div class="overlay-inner">
              <h4>2,000 sq. ft. Event Space</h4>
              <p>Perfect for any occasion</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="content-box pe-lg-4">
          <h2 class="mb-3">Host Exceptional Events at Hotel Ranbirs</h2>
          <p class="mb-4">Hotel Ranbirs in Gomti Nagar, Lucknow offers state-of-the-art meeting and event spaces tailored for both business and social gatherings. Our elegant venues combine modern amenities with timeless sophistication to create the perfect setting for your special occasion.</p>
          <div class="features-list">
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i>Total event space: 2,000 sq. ft. with flexible configurations</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i>Grand ballroom capacity: Up to 500 guests theater-style</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i>3 versatile meeting rooms with natural lighting</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i>Dedicated event planning team</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i>Customizable catering menus</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ideal For Section -->
<section class="feature-section-two bg-light pt-80 pb-80">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Perfect for Every Occasion</h2>
      <p class="text-muted">From intimate gatherings to grand celebrations, our versatile spaces adapt to your needs</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="feature-card">
              <div class="card-body">
                <h3><i class="fas fa-briefcase me-3"></i> Corporate Events</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Board meetings & strategy sessions</li>
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Annual general meetings</li>
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Training programs & workshops</li>
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Investor meetings</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="feature-card">
              <div class="card-body">
                <h3><i class="fas fa-glass-cheers me-3"></i> Social Gatherings</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Weddings & receptions</li>
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Anniversary celebrations</li>
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Birthday parties</li>
                  <li class="list-group-item bg-transparent"><i class="fas fa-caret-right me-2"></i>Family reunions</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Amenities Section -->
<section class="pt-80 pb-60">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="zoom-in">
      <h2>Event Facilities & Amenities</h2>
      <p class="text-muted">We provide everything you need for a successful event</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="amenity-card">
          <div class="card-icon">
            <i class="fas fa-projector"></i>
          </div>
          <h4>Audio-Visual Equipment</h4>
          <p>High-quality projectors, screens, and sound systems with technical support</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="amenity-card">
          <div class="card-icon">
            <i class="fas fa-utensils"></i>
          </div>
          <h4>Catering Services</h4>
          <p>Customized menus from our expert chefs, from coffee breaks to gala dinners</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="amenity-card">
          <div class="card-icon">
            <i class="fas fa-wifi"></i>
          </div>
          <h4>High-Speed Internet</h4>
          <p>Complimentary WiFi throughout the venue with premium bandwidth options</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="amenity-card">
          <div class="card-icon">
            <i class="fas fa-palette"></i>
          </div>
          <h4>Custom Decor</h4>
          <p>Professional decor services to match your event theme and branding</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="amenity-card">
          <div class="card-icon">
            <i class="fas fa-concierge-bell"></i>
          </div>
          <h4>Dedicated Staff</h4>
          <p>Professional event coordinators and service staff to assist throughout</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="amenity-card">
          <div class="card-icon">
            <i class="fas fa-parking"></i>
          </div>
          <h4>Ample Parking</h4>
          <p>Secure valet parking and spacious lots for all your guests' vehicles</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="pb-80 pt-60 bg-light">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Our Event Spaces</h2>
      <p class="text-muted">Explore our versatile venues through these glimpses</p>
    </div>
    <div class="row gallery-grid">
      <div class="col-lg-4 col-md-6 gallery-item" data-aos="zoom-in" data-aos-delay="200">
        <div class="gallery-card">
          <img src="images/gallery/event1.jpg" alt="Grand Ballroom" class="img-fluid">
          <div class="gallery-overlay">
            <h5>Grand Ballroom</h5>
            <p>Capacity: 500 guests</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 gallery-item" data-aos="zoom-in" data-aos-delay="300">
        <div class="gallery-card">
          <img src="images/gallery/event2.jpg" alt="Conference Room" class="img-fluid">
          <div class="gallery-overlay">
            <h5>Executive Boardroom</h5>
            <p>Capacity: 30 guests</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 gallery-item" data-aos="zoom-in" data-aos-delay="400">
        <div class="gallery-card">
          <img src="images/gallery/event3.jpg" alt="Outdoor Venue" class="img-fluid">
          <div class="gallery-overlay">
            <h5>Garden Pavilion</h5>
            <p>Capacity: 200 guests</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Section -->
<section class="pt-80 pb-80">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Why Choose Hotel Ranbirs?</h2>
      <p class="text-muted">We go beyond expectations to make your event extraordinary</p>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h4>Prime Location</h4>
          <p>Centrally located in Gomti Nagar with easy access from all parts of Lucknow</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-award"></i>
          </div>
          <h4>Award-Winning Service</h4>
          <p>Recognized for excellence in hospitality and event management</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-utensils"></i>
          </div>
          <h4>Culinary Excellence</h4>
          <p>Customized menus crafted by our master chefs using finest ingredients</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-hand-holding-heart"></i>
          </div>
          <h4>Personalized Attention</h4>
          <p>Dedicated event manager assigned to every function</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- CTA Section with Parallax -->
<section class="py-4 position-relative overflow-hidden" style="background: url('https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;">
  <div class="overlay" style="background: rgba(var(--theme-color-black-rgb), 0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative text-center" style="z-index: 1;" data-aos="zoom-in">
    <h2 class="text-white mb-4" style="font-family: var(--title-font);">Ready to Plan Your Event?</h2>
    <p class="text-white mb-5">Contact us today to book your date and customize your event package with our professional planners.</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Book a Meeting</a>
      <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call Now</a>
    </div>
  </div>
  
  <!-- Floating Decorative Elements -->
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 10%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 60px; bottom: 30%; right: 15%; animation-delay: 1s;">
</section>


<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 500,
    easing: 'ease-in-out'
  });
  
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>

<?php include("layouts/footer.php"); ?>