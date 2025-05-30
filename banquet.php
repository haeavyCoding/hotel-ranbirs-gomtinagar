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
      --text-color: #555555;        /* Medium gray */
      --headings-color: #121212;    /* Dark headings */
      --accent-color: #b34700;      /* Warning orange */
      --secondary-accent: #ff8800;  /* Bright orange */
    }
  
  /* Typography */
  body {
    font-size: 0.95rem;
    line-height: 1.6;
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
   font-size: 2.5rem !important;
   font-family: Arial, Helvetica, sans-serif !important;
   font-weight: 600;
 }
    }
  
  .lead-text {
    font-size: 1.1rem;
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
    background: rgba(0,0,0,0.4);
    z-index: -1;
  }
  
  .dish-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(var(--theme-color1-rgb), 0.1);
  }
  
  .dish-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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
    height: 2px;
    background: var(--theme-color1);
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }
  
  .menu-highlight:hover::after {
    transform: scaleX(1);
  }
  
  /* Responsive Adjustments */
  @media (max-width: 991px) {
    h1 {
      font-size: 2rem !important;
    }
    
    h2 {
      font-size: 1.4rem !important;
    }
    
    h3 {
      font-size: 1.2rem !important;
    }
    
    .page-title {
      padding: 70px 0;
    }
    
    .btn-lg {
      padding: 0.5rem 1rem;
      font-size: 0.9rem;
    }
    
  }
  
  @media (max-width: 767px) {
    body {
      font-size: 0.95rem;
    }
    
    h1 {
      font-size: 2rem !important;
    }
    
    h2 {
      font-size: 1.5rem !important;
    }
  }
</style>

<!-- Page Title Section with Parallax -->
<section class="page-title" style="background-image: url('images/banner/banquetbanner.jpg')">
  <div class="auto-container text-center" data-aos="fade-down" data-aos-delay="100">
    <h1 class="title text-white mb-3" style="color: var(--theme-color1) !important">Premier Banquet Hall in Gomti Nagar</h1>
    <p class="lead-text text-white mb-4">Elegant venue for weddings, corporate events & social gatherings</p>
    <ul class="page-breadcrumb" data-aos="fade-up" data-aos-delay="200">
      <li><a href="index.php" class="text-white">Home</a></li>
      <li class="text-white">Banquet Hall</li>
    </ul>
  </div>
</section>

<!-- Banquet Intro Section -->
<section class="py-5">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
        <div class="position-relative rounded overflow-hidden">
          <img src="images/banner/banquetredfull.jpg" 
               alt="Luxury banquet hall interior at Hotel Ranbirs" 
               class="img-fluid w-100">
          <div class="position-absolute bottom-0 start-0 p-3 rounded-end" style="background-color: var(--theme-color1); color: white;">
            <h5 class="mb-0">Since 2010</h5>
            <p class="mb-0 small">Creating memorable events</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="ps-lg-4">
          <span class="badge mb-3" style="background-color: var(--theme-color1); color: white;">WEDDING & EVENTS</span>
          <h2 class="mb-3">Luxury Banquet Hall in Heart of Lucknow</h2>
          <p class="mb-4">Our elegant venue opposite MAX Hospital in Gomti Nagar is perfect for:</p>
          
          <div class="row g-3 mb-4">
            <div class="col-md-4">
              <div class="bg-light p-3 text-center rounded">
                <i class="fas fa-glass-cheers mb-2" style="color: var(--theme-color1); font-size: 1.5rem;"></i>
                <h6 class="mb-0">Weddings</h6>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light p-3 text-center rounded">
                <i class="fas fa-briefcase mb-2" style="color: var(--theme-color1); font-size: 1.5rem;"></i>
                <h6 class="mb-0">Corporate Events</h6>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light p-3 text-center rounded">
                <i class="fas fa-birthday-cake mb-2" style="color: var(--theme-color1); font-size: 1.5rem;"></i>
                <h6 class="mb-0">Social Events</h6>
              </div>
            </div>
          </div>
          
          <ul class="list-unstyled mb-4">
            <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> 300+ seating capacity</li>
            <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Multi-cuisine catering</li>
            <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i> Professional event planning</li>
          </ul>
          
          <a href="#contact" class="btn btn-primary">Enquire Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Highlights Section -->
<section class="py-5 bg-light">
  <div class="auto-container">
    <div class="text-center mb-5">
      <span class="d-inline-block px-3 py-1 mb-3 rounded" style="background-color: var(--theme-color1); color: white;">WHY CHOOSE US</span>
      <h2 class="mb-3">Premium Banquet Facilities</h2>
      <p class="text-muted mx-auto" style="max-width: 700px;">Professional event management with complete amenities for memorable celebrations</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="h-100 p-4 bg-white rounded shadow-sm">
          <div class="icon-box rounded-circle mb-3 d-flex align-items-center justify-content-center" 
               style="width: 60px; height: 60px; background-color: var(--theme-color1); color: white; font-size: 1.5rem;">
            <i class="fas fa-utensils"></i>
          </div>
          <h3 class="h5 mb-3">Gourmet Catering</h3>
          <p class="mb-0">Expert chefs prepare delicious vegetarian and non-vegetarian dishes using premium ingredients and traditional recipes.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="h-100 p-4 bg-white rounded shadow-sm">
          <div class="icon-box rounded-circle mb-3 d-flex align-items-center justify-content-center" 
               style="width: 60px; height: 60px; background-color: var(--theme-color1); color: white; font-size: 1.5rem;">
            <i class="fas fa-wifi"></i>
          </div>
          <h3 class="h5 mb-3">Modern Amenities</h3>
          <p class="mb-0">High-speed WiFi, advanced AV systems, professional lighting and flexible layouts for all event types.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="h-100 p-4 bg-white rounded shadow-sm">
          <div class="icon-box rounded-circle mb-3 d-flex align-items-center justify-content-center" 
               style="width: 60px; height: 60px; background-color: var(--theme-color1); color: white; font-size: 1.5rem;">
            <i class="fas fa-gem"></i>
          </div>
          <h3 class="h5 mb-3">Custom Planning</h3>
          <p class="mb-0">From floral decorations to theme execution, our planners handle every detail to match your vision perfectly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
  <div class="auto-container">
    <div class="text-center mb-5">
      <span class="d-inline-block px-3 py-1 mb-3 rounded" style="background-color: var(--theme-color1); color: white;">GALLERY</span>
      <h2 class="mb-3">Our Banquet Hall</h2>
    </div>
    
    <div class="row g-3">
      <div class="col-md-4" data-aos="fade-up">
        <img src="images/banner/banquet1.jpg" alt="Banquet hall setup for wedding" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <img src="images/banner/banquetredfull.jpg" alt="Corporate event setup" class="img-fluid rounded shadow-sm">
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <img src="images/banner/banquet1.jpg" alt="Banquet dining area" class="img-fluid rounded shadow-sm">
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light">
  <div class="auto-container">
    <div class="text-center mb-5">
      <span class="d-inline-block px-3 py-1 mb-3 rounded" style="background-color: var(--theme-color1); color: white;">TESTIMONIALS</span>
      <h2 class="mb-3">What Our Clients Say</h2>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4">"The Ranbirs team made our wedding day absolutely perfect. Their attention to detail was exceptional."</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client" class="rounded-circle me-3" width="50">
            <div>
              <h6 class="mb-0">Priyanka & Raj</h6>
              <small class="text-muted">Wedding Couple</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="mb-4">"Our corporate gala was executed flawlessly. The banquet space was transformed exactly as we envisioned."</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="rounded-circle me-3" width="50">
            <div>
              <h6 class="mb-0">Amit Sharma</h6>
              <small class="text-muted">Corporate Client</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4">"From planning to execution, every detail was handled professionally. The food was exceptional!"</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="rounded-circle me-3" width="50">
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
        <p class="text-white mb-5">Contact our event specialists today to check availability and customize your perfect celebration package.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Enquire Online</a>
            <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call Now</a>
        </div>
    </div>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  // Initialize AOS animations
  AOS.init({
    duration: 800,

  });
</script>

<?php include("layouts/footer.php"); ?>