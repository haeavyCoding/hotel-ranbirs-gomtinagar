<?php include('layouts/header.php'); ?>

<!-- Meta Tags -->
<meta name="title" content="Banquet Hall in Gomti Nagar – Weddings & Events | Hotel Ranbirs">
<meta name="description" content="Host your wedding, engagement, or corporate event at our stylish banquet hall in Gomti Nagar, opposite MAX Hospital, Lucknow.">
<link rel="canonical" href="/banquet-hall-lucknow">

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

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
<!-- Page Title Section with Parallax -->
<section class="page-title" style="background-image: url('https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
  <div class="auto-container text-center" data-aos="fade-down" data-aos-delay="100">
    <h1 class="title" style="color: var(--theme-color1);">Host Unforgettable Events at Our Banquet Hall</h1>
    <ul class="page-breadcrumb" data-aos="fade-up" data-aos-delay="200">
      <li><a href="index.html" style="color: var(--theme-color1);">Home</a></li>
      <li class="text-white">Banquet</li>
    </ul>
  </div>
  
  <!-- Floating Decorative Elements -->
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 5%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 60px; top: 30%; right: 8%; animation-delay: 1s;">
</section>

<!-- Banquet Intro Section -->
<section class="pt-120 pb-80" style="background-color: var(--theme-color-white);">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
               alt="Best Banquet in Gomti Nagar" 
               class="img-fluid rounded shadow-lg border-glow">
          <div class="position-absolute bottom-0 start-0 p-3 rounded-end" style="background-color: var(--theme-color1); color: white;" data-aos="fade-up" data-aos-delay="400">
            <h5 class="mb-0">Since 2010</h5>
            <p class="mb-0 small">Creating memorable events</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="pe-lg-4">
          <span class="badge mb-3 pulse-anim" style="background-color: var(--theme-color1); color: white;">WEDDING & EVENTS</span>
          <h2 class="mb-3" style="font-family: var(--title-font);">Make Every Occasion Grand at Ranbirs</h2>
          <p class="mb-4" data-aos="fade-up" data-aos-delay="400">Located in the heart of Lucknow, Hotel Ranbirs is renowned as the <strong>Best Banquet in Gomti Nagar</strong>. Whether it's a wedding, reception, engagement, or corporate event, our luxurious spaces and experienced planners turn every moment into a memory.</p>
          
          <!-- Event Types Carousel -->
          <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-delay="500">
            <div class="hover-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Wedding" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Weddings</h6>
              <p class="small mb-0">Dream celebrations</p>
            </div>
            <div class="hover-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Corporate" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Corporate Events</h6>
              <p class="small mb-0">Professional setups</p>
            </div>
            <div class="hover-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Social" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Social Gatherings</h6>
              <p class="small mb-0">Elegant occasions</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Highlights Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="zoom-in">
      <span class="sub-title" style="color: var(--theme-color1);">WHY CHOOSE US</span>
      <h2 style="font-family: var(--title-font);">Why Choose Hotel Ranbirs for Your Special Day?</h2>
      <p class="text-muted">We offer luxury, elegance, and perfection under one roof.</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="hover-card bg-white p-4 rounded shadow-sm h-100">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-utensils"></i>
          </div>
          <h5 class="text-center">Multi-Cuisine Catering</h5>
          <p class="mb-0 text-center">Enjoy delicious vegetarian and non-vegetarian delicacies prepared by expert chefs using the finest ingredients and traditional recipes.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="hover-card bg-white p-4 rounded shadow-sm h-100">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center pulse-anim" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-glass-cheers"></i>
          </div>
          <h5 class="text-center">Premium Beverages & Bar</h5>
          <p class="mb-0 text-center">We offer a wide selection of alcoholic and non-alcoholic beverages including premium wines, mocktails, and custom bar setups.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="hover-card bg-white p-4 rounded shadow-sm h-100">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-gem"></i>
          </div>
          <h5 class="text-center">Theme Décor & Planning</h5>
          <p class="mb-0 text-center">Our professional wedding planners specialize in personalized theme décor, floral arrangements, and event styling to match your dream vision.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Facilities Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color-white);">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <h2 style="font-family: var(--title-font);">Elegant Banquet Facilities</h2>
        <p class="mb-4">Our beautifully designed banquet hall is equipped with modern amenities, mood lighting, AV systems, and spacious seating—ideal for any occasion from weddings to business meets.</p>
        
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Spacious indoor hall</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Custom seating arrangements</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Professional lighting</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> On-site parking</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Power backup</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Wi-Fi enabled</li>
            </ul>
          </div>
        </div>
        
        <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn me-2" style="background-color: var(--theme-color1); color: white;">View Floor Plan</a>
          <a href="#" class="btn btn-outline-dark">Capacity Details</a>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2025&q=80" 
               alt="Banquet Facilities" 
               class="img-fluid rounded shadow-lg">
          <div class="position-absolute bottom-0 end-0 p-3 rounded-start" style="background-color: var(--theme-color1); color: white;">
            <h5 class="mb-0">Up to 300 Guests</h5>
            <p class="mb-0 small">Flexible seating options</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--theme-color1);">CLIENT REVIEWS</span>
      <h2 style="font-family: var(--title-font);">What Our Clients Say</h2>
      <p class="text-muted">Hear from couples and organizations who celebrated with us</p>
    </div>
    
    <div class="row g-4 justify-content-center">
      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="100">
        <div class="hover-card p-4 rounded shadow-sm h-100 bg-white">
          <div class="rating mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4"><i class="fas fa-quote-left me-2" style="color: var(--theme-color1);"></i>The Ranbirs team made our wedding day absolutely perfect. Their attention to detail and professional service exceeded our expectations.</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle me-3" width="50" alt="Client">
            <div>
              <h6 class="mb-0">Priyanka & Raj</h6>
              <small class="text-muted">Wedding Couple</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="200">
        <div class="hover-card p-4 rounded shadow-sm h-100 bg-white">
          <div class="rating mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="mb-4"><i class="fas fa-quote-left me-2" style="color: var(--theme-color1);"></i>Our corporate gala was executed flawlessly. The banquet space was transformed exactly as we envisioned.</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="50" alt="Client">
            <div>
              <h6 class="mb-0">Amit Sharma</h6>
              <small class="text-muted">Corporate Client</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="300">
        <div class="hover-card p-4 rounded shadow-sm h-100 bg-white">
          <div class="rating mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4"><i class="fas fa-quote-left me-2" style="color: var(--theme-color1);"></i>From the initial planning to the final execution, every detail was handled professionally. The food was exceptional!</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="50" alt="Client">
            <div>
              <h6 class="mb-0">Ananya Patel</h6>
              <small class="text-muted">Birthday Celebration</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section with Parallax -->
<section class="py-4 position-relative overflow-hidden" style="background: url('https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;">
  <div class="overlay" style="background: rgba(var(--theme-color-black-rgb), 0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative text-center" style="z-index: 1;" data-aos="zoom-in">
    <h2 class="text-white mb-4" style="font-family: var(--title-font);">Ready to Plan Your Dream Event?</h2>
    <p class="text-white mb-5">Contact us today to book your date and customize your event package with our professional planners.</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Book a Tour</a>
      <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call Now</a>
    </div>
  </div>
  
  <!-- Floating Decorative Elements -->
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 10%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 60px; bottom: 30%; right: 15%; animation-delay: 1s;">
</section>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  // Initialize AOS animations
  AOS.init({
    duration: 1000,
    once: false,
    easing: 'ease-in-out'
  });
  
  // Initialize Owl Carousel
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      autoplay: true,
      responsive: {
        0: { items: 1 },
        576: { items: 2 },
        768: { items: 3 }
      }
    });
  });
</script>

<?php include("layouts/footer.php"); ?>