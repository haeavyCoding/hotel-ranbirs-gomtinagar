<?php include('layouts/header.php'); ?>

<!-- Meta Tags -->
<meta name="title" content="Best Banquet Hall in Gomti Nagar, Lucknow | Hotel Ranbirs">
<meta name="description" content="Luxury banquet hall in Gomti Nagar, Lucknow for weddings, corporate events & social gatherings. 300+ capacity, multi-cuisine catering & professional event planning.">
<meta name="keywords" content="banquet hall lucknow, wedding venue gomti nagar, corporate event space lucknow, best banquet in lucknow, hotel ranbirs banquet">
<link rel="canonical" href="https://www.hotelranbirs.com/banquet-hall-lucknow">

<!-- Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EventVenue",
  "name": "Hotel Ranbirs Banquet Hall",
  "description": "Premium banquet hall in Gomti Nagar, Lucknow for weddings, corporate events and social gatherings",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "CP 125, Viraj Khand",
    "addressLocality": "Gomti Nagar",
    "addressRegion": "Uttar Pradesh",
    "postalCode": "226010",
    "addressCountry": "India"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "26.8381",
    "longitude": "81.0019"
  },
  "openingHours": "Mo-Su 00:00-23:59",
  "telephone": "+919876543210",
  "image": "https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04",
  "priceRange": "$$$",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Capacity",
      "value": "300 persons"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Catering",
      "value": "Multi-cuisine"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Parking",
      "value": "Available"
    }
  ]
}
</script>

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
<section class="page-title" style="background-image: url('images/banner/banquetbanner.jpg')">
  <div class="auto-container text-center" data-aos="fade-down" data-aos-delay="100">
    <h1 class="title" style="color: var(--theme-color1);">Premier Banquet Hall in Gomti Nagar, Lucknow</h1>
    <ul class="page-breadcrumb" data-aos="fade-up" data-aos-delay="200">
      <li><a href="index.html" style="color: var(--theme-color1);">Home</a></li>
      <li class="text-white">Banquet Hall</li>
    </ul>
  </div>
  
  <!-- Floating Decorative Elements -->
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Wedding decoration icon" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 5%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Event planning icon" class="position-absolute float-anim" style="width: 60px; top: 30%; right: 8%; animation-delay: 1s;">
</section>

<!-- Banquet Intro Section -->
<section class="pt-120 pb-80" style="background-color: var(--theme-color-white);">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
        <div class="position-relative">
          <img src="images\banner\banquetredfull.jpg" 
               alt="Luxury banquet hall interior at Hotel Ranbirs, Gomti Nagar" 
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
          <h2 class="mb-3" style="font-family: var(--title-font);">Luxury Banquet Hall in Lucknow for All Occasions</h2>
          <p class="mb-4" data-aos="fade-up" data-aos-delay="400">Located opposite MAX Hospital in Gomti Nagar, Hotel Ranbirs offers the <strong>best banquet facilities in Lucknow</strong>. Our elegant venue is perfect for weddings (capacity 300+), corporate events, birthday parties, and social gatherings, with complete event planning services.</p>
          
          <!-- Event Types Carousel -->
          <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-delay="500">
            <div class="hover-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Wedding events icon" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Weddings</h6>
              <p class="small mb-0">Dream celebrations</p>
            </div>
            <div class="hover-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Corporate events icon" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Corporate Events</h6>
              <p class="small mb-0">Professional setups</p>
            </div>
            <div class="hover-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Social events icon" class="img-fluid mb-2" style="height: 60px;">
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
      <h2 style="font-family: var(--title-font);">Top-Rated Banquet Hall in Gomti Nagar</h2>
      <p class="text-muted">Professional event management with premium amenities</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="hover-card bg-white p-4 rounded shadow-sm h-100">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-utensils"></i>
          </div>
          <h3 class="h5 text-center">Multi-Cuisine Catering</h3>
          <p class="mb-0 text-center">Expert chefs prepare delicious vegetarian and non-vegetarian dishes using premium ingredients and traditional Awadhi recipes.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="hover-card bg-white p-4 rounded shadow-sm h-100">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center pulse-anim" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-glass-cheers"></i>
          </div>
          <h3 class="h5 text-center">Premium Bar Services</h3>
          <p class="mb-0 text-center">Custom bar setups with premium spirits, wines, and creative mocktails for all types of celebrations and corporate events.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="hover-card bg-white p-4 rounded shadow-sm h-100">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-gem"></i>
          </div>
          <h3 class="h5 text-center">Custom Event Planning</h3>
          <p class="mb-0 text-center">From floral decorations to theme execution, our wedding planners handle every detail to match your vision perfectly.</p>
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
        <h2 style="font-family: var(--title-font);">Banquet Hall Features & Amenities</h2>
        <p class="mb-4">Our 5,000 sq.ft. air-conditioned banquet hall in Gomti Nagar features modern decor, advanced AV systems, and flexible layouts for 50-300 guests.</p>
        
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> 300+ seating capacity</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Customizable layouts</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Professional lighting</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Secure parking</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Power backup</li>
              <li class="mb-3"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> High-speed Wi-Fi</li>
            </ul>
          </div>
        </div>
        
        <div class="mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn me-2" style="background-color: var(--theme-color1); color: white;">View Floor Plan</a>
          <a href="#" class="btn btn-outline-dark">Pricing Details</a>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="position-relative">
          <img src="images\banner\Adobe Express - file (10).jpg" 
               alt="Spacious banquet hall with elegant decor at Hotel Ranbirs" 
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
      <h2 style="font-family: var(--title-font);">What Our Clients Say About Us</h2>
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
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priyanka wedding client testimonial" class="rounded-circle me-3" width="50">
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
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Amit corporate client testimonial" class="rounded-circle me-3" width="50">
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
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ananya birthday client testimonial" class="rounded-circle me-3" width="50">
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
    <h2 class="text-white mb-4" style="font-family: var(--title-font);">Book Your Event at Lucknow's Premier Banquet Hall</h2>
    <p class="text-white mb-5">Contact our event specialists today to check availability and customize your perfect celebration package.</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Schedule Visit</a>
      <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call: +91 9876543210</a>
    </div>
  </div>
  
  <!-- Floating Decorative Elements -->
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Event decoration icon" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 10%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" alt="Celebration icon" class="position-absolute float-anim" style="width: 60px; bottom: 30%; right: 15%; animation-delay: 1s;">
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