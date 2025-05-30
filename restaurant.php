<?php 
$pageTitle = "Fine Dining & Rooftop Bar | Hotel Ranbirs, Gomti Nagar Lucknow";
$pageDescription = "Experience exquisite multi-cuisine dining at Poseidon Restaurant & vibrant cocktails at Aabshaar Rooftop Bar. Best fine dining in Gomti Nagar, Lucknow.";
$pageKeywords = "best restaurant in Lucknow, rooftop bar Gomti Nagar, fine dining Lucknow, Hotel Ranbirs restaurant, Poseidon Lucknow, Aabshaar bar";
include('layouts/header.php'); 
?>

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
  
  /* Typography Adjustments */
  h1 {
    font-size: 2.2rem !important;
    line-height: 1.3 !important;
    font-family: 'Arial', sans-serif !important;
    font-weight: 600 !important;
    color: var(--headings-color) !important;
    color: #AE7D54 !important;
  }
  
  h2 {
    font-size: 1.8rem !important;
    line-height: 1.4 !important;
    font-family: 'Arial', sans-serif !important;
    font-weight: 600 !important;
    color: var(--headings-color) !important;
    color: #AE7D54 !important;
  }
  
  h3 {
    font-size: 1.4rem !important;
    line-height: 1.4 !important;
    font-family: 'Arial', sans-serif !important;
    font-weight: 600 !important;
    color: var(--headings-color) !important;
    color: #AE7D54;
  }
  
  p, .text-muted {
    font-size: 1rem;
    line-height: 1.6;
    color: var(--text-color);
  }
  
  .sub-title {
    font-size: 0.9rem;
    letter-spacing: 1px;
    text-transform: uppercase;
  }
  
  /* Card and Section Styling */
  .dish-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(var(--theme-color1-rgb), 0.1);
  }
  .dish-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.1);
  }
  
  .feature-card {
    transition: all 0.3s ease;
  }
  .feature-card:hover {
    transform: translateY(-5px);
  }
  
  .testimonial-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(var(--theme-color1-rgb), 0.1);
  }
  .testimonial-card:hover {
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  
  /* Responsive Adjustments */
  @media (max-width: 991px) {
    h1 {
      font-size: 1.8rem !important;
    }
    h2 {
      font-size: 1.5rem !important;
    }
    h3 {
      font-size: 1.3rem !important;
    }
    .btn-lg {
      font-size: 0.9rem;
      padding: 0.7rem 1.3rem;
    }
    .feature-card .icon-box {
      width: 60px !important;
      height: 60px !important;
      font-size: 1.5rem !important;
    }
  }
  
  @media (max-width: 767px) {
    h1 {
      font-size: 1.6rem !important;
    }
    h2 {
      font-size: 1.4rem !important;
    }
    .page-title {
      padding: 80px 0;
    }
    .bigbanner {
      display: none;
    }
  }
  
  /* Content Spacing */
  section {
    padding: 60px 0;
  }
  
  .pt-80 {
    padding-top: 60px;
  }
  
  .pb-80 {
    padding-bottom: 60px;
  }
  
  .mb-4 {
    margin-bottom: 1.2rem !important;
  }
  
  /* Button Styling */
  .btn {
    font-size: 0.9rem;
    padding: 0.6rem 1.2rem;
    transition: all 0.3s ease;
  }
  
  .btn-lg {
    font-size: 1rem;
    padding: 0.8rem 1.6rem;
  }
  
  .btn-style-two {
    font-size: 0.85rem !important;
  }
</style>

<!-- Schema Markup for Restaurant -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Restaurant",
  "name": "Poseidon Restaurant at Hotel Ranbirs",
  "description": "Multi-cuisine restaurant serving authentic Indian delicacies with Awadhi flair along with international favorites in Gomti Nagar, Lucknow.",
  "image": "https://images.unsplash.com/photo-1576765607924-b6c69c207f65",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "CP 125, Viraj Khand",
    "addressLocality": "Gomti Nagar",
    "addressRegion": "Uttar Pradesh",
    "postalCode": "226010",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "26.8381",
    "longitude": "81.0019"
  },
  "telephone": "+919876543210",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "07:00",
    "closes": "23:00"
  },
  "servesCuisine": ["Indian", "Awadhi", "International"],
  "priceRange": "$$",
  "hasMenu": {
    "@type": "Menu",
    "name": "Poseidon Restaurant Menu",
    "url": "#"
  }
}
</script>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Page Title Section with Parallax -->
<section class="page-title" style="background-image: url('images/banner/restaurantfullsize1.JPG')">
  <div class="auto-container text-center" data-aos="fade-down" data-aos-delay="100">
    <h1 class="title" style="color: #AE7D54 !important" data-aos="fade-up" data-aos-delay="200">Dine with Delight</h1>
    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="250">Exquisite culinary experiences at Hotel Ranbirs</p>
    <ul class="page-breadcrumb" data-aos="fade-up" data-aos-delay="300">
      <li><a href="index.html" style="color: var(--theme-color1);">Home</a></li>
      <li class="text-white">Restaurant & Bar</li>
    </ul>
  </div>
</section>

<!-- Welcome Section -->
<section class="pt-80 pb-60" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="flip-left" data-aos-delay="200">
        <div class="position-relative">
          <img src="images/banner/room1fullsize.JPG" alt="Poseidon Restaurant" 
               class="img-fluid rounded shadow-lg border-glow" 
               data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-perspective="1000">
          <div class="position-absolute bottom-0 start-0 p-3 bg-white rounded-end" style="box-shadow: 0 5px 15px rgba(0,0,0,0.1);" data-aos="fade-right" data-aos-delay="400">
            <h5 class="mb-0" style="color: var(--theme-color1);">Since 2010</h5>
            <p class="mb-0 small">Serving authentic flavors</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="pe-lg-4">
          <span class="badge mb-3 pulse-anim" style="background-color: var(--theme-color1); color: white;">FINE DINING</span>
          <h2 class="mb-3">Poseidon Restaurant</h2>
          <p class="mb-4">Hotel Ranbirs invites you to Poseidon, our cozy multi-cuisine restaurant serving authentic Indian delicacies with Awadhi flair along with international favorites.</p>
          
          <!-- Signature Dishes Carousel -->
          <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-delay="500">
            <div class="dish-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/5787/5787068.png" alt="Lucknowi Kebabs" class="img-fluid mb-2" style="height: 60px;">
              <h3 class="h6 mb-1">Lucknowi Kebabs</h3>
              <p class="small mb-0">Signature dish</p>
            </div>
            <div class="dish-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/5787/5787093.png" alt="Awadhi Biryani" class="img-fluid mb-2" style="height: 60px;">
              <h3 class="h6 mb-1">Awadhi Biryani</h3>
              <p class="small mb-0">House special</p>
            </div>
            <div class="dish-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3194/3194889.png" alt="Royal Desserts" class="img-fluid mb-2" style="height: 60px;">
              <h3 class="h6 mb-1">Royal Desserts</h3>
              <p class="small mb-0">Sweet endings</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rooftop Bar Section -->
<section class="pt-60 pb-60" style="background: url('images/banner/restaurantfullsize1.JPG') no-repeat center center/cover; position: relative;">
  <div class="overlay" style="background: rgba(0,0,0,0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative" style="z-index: 1;">
    <div class="row feature-row g-0 mb-5 overflow-hidden rounded shadow-lg" data-aos="fade-up">
      <div class="col-lg-6">
        <img src="images/banner/hotel-ranbirs-gomti-nagar-lucknow-hotels-eseka6605u.avif" alt="Aabshaar Rooftop Bar" 
             class="img-fluid w-100 h-100 object-cover" 
             style="min-height: 350px;">
      </div>
      <div class="col-lg-6 d-flex align-items-center" style="background-color: rgba(255, 255, 255, 0.95);">
        <div class="content-box p-4 p-lg-5">
          <span class="badge mb-3" style="background-color: var(--theme-color1); color: white;">NIGHTLIFE</span>
          <h2 class="mb-3">Aabshaar Rooftop Bar</h2>
          <p class="mb-4">Elevate your evenings at our stylish rooftop bar offering panoramic views of Gomti Nagar. Enjoy crafted cocktails and premium spirits in a vibrant atmosphere.</p>
          
          <div class="row g-3">
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="100">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-cocktail mb-2" style="color: var(--theme-color1);"></i>
                <h3 class="h6 mb-1">Signature Cocktails</h3>
                <p class="small mb-0">Bartender's special creations</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="200">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-music mb-2" style="color: var(--theme-color1);"></i>
                <h3 class="h6 mb-1">Live Music</h3>
                <p class="small mb-0">Weekend performances</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="300">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-umbrella-beach mb-2" style="color: var(--theme-color1);"></i>
                <h3 class="h6 mb-1">Ambient Lighting</h3>
                <p class="small mb-0">Perfect evening atmosphere</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="400">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-city mb-2" style="color: var(--theme-color1);"></i>
                <h3 class="h6 mb-1">City Views</h3>
                <p class="small mb-0">Lucknow skyline</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Dining Experience -->
<section class="pt-60 pb-60" style="background-color: white;">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="zoom-in">
      <span class="sub-title" style="color: var(--theme-color1);">EXPERIENCE</span>
      <h2 class="mb-3">Our Dining Experiences</h2>
      <p class="text-muted">Exceptional culinary journeys for every occasion</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="card h-100 border-0 overflow-hidden shadow-sm hover-effect">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="images/banner/rstaurant.jpg" 
                   class="img-fluid h-100 object-cover" 
                   alt="Poseidon Restaurant Interior">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h3 class="h5 card-title"><i class="fas fa-utensils me-2" style="color: var(--theme-color1);"></i>Poseidon Restaurant</h3>
                <p class="card-text">Contemporary dining featuring traditional dishes from across India and Asia—reimagined with innovation and elegance.</p>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i>Breakfast: 7:00 AM - 10:30 AM</li>
                  <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i>Lunch: 12:30 PM - 3:30 PM</li>
                  <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i>Dinner: 7:00 PM - 11:00 PM</li>
                </ul>
                <a href="#" class="btn btn-sm mt-2" style="background-color: var(--theme-color1); color: white;">View Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="card h-100 border-0 overflow-hidden shadow-sm hover-effect">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="images/banner/rooftop.avif" 
                   class="img-fluid h-100 object-cover" 
                   alt="Aabshaar Rooftop Bar">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h3 class="h5 card-title"><i class="fas fa-cocktail me-2" style="color: var(--theme-color1);"></i>Aabshaar Rooftop</h3>
                <p class="card-text">The perfect place to unwind after work or begin your night out. Enjoy refreshing beverages against the Lucknow skyline.</p>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i>Evening: 5:00 PM - 11:00 PM</li>
                  <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i>Happy Hours: 5:00 PM - 7:00 PM</li>
                  <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: var(--theme-color1);"></i>Live Music: Friday & Saturday</li>
                </ul>
                <a href="#" class="btn btn-sm mt-2" style="background-color: var(--theme-color1); color: white;">View Drinks Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Special Features -->
<section class="pt-60 pb-60" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--theme-color1);">WHY CHOOSE US</span>
      <h2 class="mb-3">Dining at Hotel Ranbirs</h2>
      <p class="text-muted">What makes our culinary experience special</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card text-center p-4 h-100 rounded shadow-sm bg-white">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 70px; height: 70px; background-color: var(--theme-color1); color: white; font-size: 25px;">
            <i class="fas fa-leaf"></i>
          </div>
          <h3 class="h5 mb-2">Fresh Ingredients</h3>
          <p class="mb-0">Locally sourced produce and premium imported ingredients for authentic flavors</p>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card text-center p-4 h-100 rounded shadow-sm bg-white">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center pulse-anim" 
               style="width: 70px; height: 70px; background-color: var(--theme-color1); color: white; font-size: 25px;">
            <i class="fas fa-cheese"></i>
          </div>
          <h3 class="h5 mb-2">Expert Chefs</h3>
          <p class="mb-0">Our culinary team brings decades of global experience and local expertise</p>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card text-center p-4 h-100 rounded shadow-sm bg-white">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 70px; height: 70px; background-color: var(--theme-color1); color: white; font-size: 25px;">
            <i class="fas fa-wine-glass-alt"></i>
          </div>
          <h3 class="h5 mb-2">Premium Bar</h3>
          <p class="mb-0">Extensive selection of wines, spirits and craft cocktails curated by our mixologists</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="pt-60 pb-60" style="background-color: white;">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--theme-color1);">GUEST REVIEWS</span>
      <h2 class="mb-3">What Our Diners Say</h2>
      <p class="text-muted">Hear from our valued guests</p>
    </div>
    
    <div class="row g-4 justify-content-center">
      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="100">
        <div class="testimonial-card p-4 rounded shadow-sm h-100">
          <div class="rating mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4"><i class="fas fa-quote-left me-2" style="color: var(--theme-color1);"></i>The kebabs at Poseidon are the best I've had outside of old Lucknow. The rooftop bar has amazing ambiance in the evenings.</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle me-3" width="50" alt="Guest Review">
            <div>
              <h3 class="h6 mb-0">Priyanka Sharma</h3>
              <small class="text-muted">Regular Guest</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="200">
        <div class="testimonial-card p-4 rounded shadow-sm h-100">
          <div class="rating mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4"><i class="fas fa-quote-left me-2" style="color: var(--theme-color1);"></i>Perfect place for business dinners. The service is attentive without being intrusive and the food is consistently excellent.</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="50" alt="Guest Review">
            <div>
              <h3 class="h6 mb-0">Rajiv Malhotra</h3>
              <small class="text-muted">Business Traveler</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="300">
        <div class="testimonial-card p-4 rounded shadow-sm h-100">
          <div class="rating mb-3" style="color: var(--theme-color1);">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="mb-4"><i class="fas fa-quote-left me-2" style="color: var(--theme-color1);"></i>The Sunday brunch is fantastic! Great variety and quality. The live music at the rooftop bar makes for a perfect evening.</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="50" alt="Guest Review">
            <div>
              <h3 class="h6 mb-0">Ananya Patel</h3>
              <small class="text-muted">Food Blogger</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 position-relative overflow-hidden" style="background: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;">
  <div class="overlay" style="background: rgba(0, 0, 0, 0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative text-center" style="z-index: 1;" data-aos="zoom-in">
    <h2 class="text-white mb-4">Ready to Experience Our Culinary Offerings?</h2>
    <p class="text-white mb-5">Make a reservation or inquire about private dining options</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Book a Table</a>
      <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call Us Now</a>
    </div>
  </div>
</section>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  // Initialize AOS animations
  AOS.init({
    duration: 800,
    easing: 'ease-in-out'
  });
  
  // Initialize tilt.js for 3D tilt effect
  $(document).ready(function(){
    $('[data-tilt]').tilt();
    
    // Initialize Owl Carousel
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 15,
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