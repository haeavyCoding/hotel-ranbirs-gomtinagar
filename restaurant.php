<?php include('layouts/header.php'); ?>

<style>
  
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

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Page Title Section with Parallax -->
<section class="page-title" style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80')">
  <div class="auto-container text-center" data-aos="fade-down" data-aos-delay="100">
    <h1 class="title text-white" data-aos="fade-up" data-aos-delay="200">Dine with Delight at Hotel Ranbirs</h1>
    <ul class="page-breadcrumb" data-aos="fade-up" data-aos-delay="300">
      <li><a href="index.html" style="color: var(--theme-color1);">Home</a></li>
      <li class="text-white">Restaurant & Rooftop Bar</li>
    </ul>
  </div>
</section>

<!-- Floating Food Items Decoration -->
<div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="pointer-events: none; z-index: -1;">
  <img src="https://cdn-icons-png.flaticon.com/512/5787/5787100.png" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 5%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/5787/5787132.png" class="position-absolute float-anim" style="width: 60px; top: 30%; right: 8%; animation-delay: 1s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3194/3194889.png" class="position-absolute float-anim" style="width: 70px; bottom: 25%; left: 10%; animation-delay: 2s;">
</div>

<!-- Welcome Section with 3D Tilt Effect -->
<section class="pt-120 pb-80" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="flip-left" data-aos-delay="200">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1576765607924-b6c69c207f65" alt="Poseidon Restaurant" 
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
          <h2 class="mb-3">Poseidon – Family Restaurant</h2>
          <p class="mb-4" data-aos="fade-up" data-aos-delay="400">Hotel Ranbirs invites you to Poseidon, our cozy multi-cuisine restaurant serving authentic Indian delicacies with Awadhi flair along with international favorites. Our chefs blend traditional recipes with contemporary presentation.</p>
          
          <!-- Signature Dishes Carousel -->
          <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-delay="500">
            <div class="dish-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/5787/5787068.png" alt="Kebab" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Lucknowi Kebabs</h6>
              <p class="small mb-0">Signature dish</p>
            </div>
            <div class="dish-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/5787/5787093.png" alt="Biryani" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Awadhi Biryani</h6>
              <p class="small mb-0">House special</p>
            </div>
            <div class="dish-card p-3 rounded bg-white shadow-sm text-center mx-2">
              <img src="https://cdn-icons-png.flaticon.com/512/3194/3194889.png" alt="Dessert" class="img-fluid mb-2" style="height: 60px;">
              <h6 class="mb-1">Royal Desserts</h6>
              <p class="small mb-0">Sweet endings</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rooftop Bar Section with Interactive Elements -->
<section class="pt-80 pb-80" style="background: url('https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80') no-repeat center center/cover; position: relative;">
  <div class="overlay" style="background: rgba(0,0,0,0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative" style="z-index: 1;">
    <div class="row feature-row g-0 mb-5 overflow-hidden rounded shadow-lg" data-aos="fade-up">
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1613470208965-96b377ff8500" alt="Rooftop Bar" 
             class="img-fluid w-100 h-100 object-cover" 
             style="min-height: 400px;">
      </div>
      <div class="col-lg-6 d-flex align-items-center" style="background-color: rgba(var(--theme-color-white-rgb), 0.9);">
        <div class="content-box p-5">
          <span class="badge mb-3" style="background-color: var(--theme-color1); color: white;">NIGHTLIFE</span>
          <h2 class="mb-3">Aabshaar – Rooftop Bar & Club</h2>
          <p class="mb-4">Elevate your evenings at our stylish rooftop bar offering panoramic views of Gomti Nagar. Enjoy crafted cocktails, premium spirits, and a selection of bar snacks in a vibrant yet relaxed atmosphere.</p>
          
          <div class="row g-3">
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="100">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-cocktail mb-2" style="color: var(--theme-color1);"></i>
                <h6 class="mb-1">Signature Cocktails</h6>
                <p class="small mb-0">Try our bartender's special creations</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="200">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-music mb-2" style="color: var(--theme-color1);"></i>
                <h6 class="mb-1">Live Music</h6>
                <p class="small mb-0">Weekend performances</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="300">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-umbrella-beach mb-2" style="color: var(--theme-color1);"></i>
                <h6 class="mb-1">Ambient Lighting</h6>
                <p class="small mb-0">Perfect evening atmosphere</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-up" data-aos-delay="400">
              <div class="p-3 rounded" style="background-color: var(--theme-color3);">
                <i class="fas fa-city mb-2" style="color: var(--theme-color1);"></i>
                <h6 class="mb-1">City Views</h6>
                <p class="small mb-0">Panoramic Lucknow skyline</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Dining Experience with Animated Cards -->
<section class="pt-80 pb-60" style="background-color: var(--theme-color-white);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="zoom-in">
      <span class="sub-title" style="color: var(--theme-color1);">EXPERIENCE</span>
      <h2>Our Dining Experiences</h2>
      <p class="text-muted">Exceptional culinary journeys for every occasion</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="card h-100 border-0 overflow-hidden shadow-sm hover-effect">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                   class="img-fluid h-100 object-cover" 
                   alt="Restaurant Interior">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h4 class="card-title"><i class="fas fa-utensils me-2" style="color: var(--theme-color1);"></i>Poseidon Restaurant</h4>
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
              <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                   class="img-fluid h-100 object-cover" 
                   alt="Rooftop Bar">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h4 class="card-title"><i class="fas fa-cocktail me-2" style="color: var(--theme-color1);"></i>Aabshaar Rooftop</h4>
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

<!-- Special Features with Animated Icons -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--theme-color1);">WHY CHOOSE US</span>
      <h2>Dining at Hotel Ranbirs</h2>
      <p class="text-muted">What makes our culinary experience special</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card text-center p-4 h-100 rounded shadow-sm bg-white">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-leaf"></i>
          </div>
          <h5>Fresh Ingredients</h5>
          <p class="mb-0">Locally sourced produce and premium imported ingredients for authentic flavors</p>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card text-center p-4 h-100 rounded shadow-sm bg-white">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center pulse-anim" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-cheese"></i>
          </div>
          <h5>Expert Chefs</h5>
          <p class="mb-0">Our culinary team brings decades of global experience and local expertise</p>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card text-center p-4 h-100 rounded shadow-sm bg-white">
          <div class="icon-box rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
               style="width: 80px; height: 80px; background-color: var(--theme-color1); color: white; font-size: 30px;">
            <i class="fas fa-wine-glass-alt"></i>
          </div>
          <h5>Premium Bar</h5>
          <p class="mb-0">Extensive selection of wines, spirits and craft cocktails curated by our mixologists</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials with Animated Cards -->
<section class="pt-80 pb-80" style="background-color: var(--theme-color-white);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title" style="color: var(--theme-color1);">GUEST REVIEWS</span>
      <h2>What Our Diners Say</h2>
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
            <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle me-3" width="50" alt="Guest">
            <div>
              <h6 class="mb-0">Priyanka Sharma</h6>
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
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="50" alt="Guest">
            <div>
              <h6 class="mb-0">Rajiv Malhotra</h6>
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
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="50" alt="Guest">
            <div>
              <h6 class="mb-0">Ananya Patel</h6>
              <small class="text-muted">Food Blogger</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section with Parallax Effect -->
<section class="py-5 position-relative overflow-hidden" style="background: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;">
  <div class="overlay" style="background: rgba(var(--theme-color-black-rgb), 0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative text-center" style="z-index: 1;" data-aos="zoom-in">
    <h2 class="text-white mb-4 fs-3">Ready to Experience Our Culinary Offerings?</h2>
    <p class="text-white mb-5">Make a reservation or inquire about private dining options</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Book a Table</a>
      <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call Us Now</a>
    </div>
  </div>
  
  <!-- Floating food decoration -->
  <img src="https://cdn-icons-png.flaticon.com/512/5787/5787068.png" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 10%; animation-delay: 0s;">
  <img src="https://cdn-icons-png.flaticon.com/512/3194/3194889.png" class="position-absolute float-anim" style="width: 60px; bottom: 30%; right: 15%; animation-delay: 1s;">
</section>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  // Initialize AOS animations
  AOS.init({
    duration: 800,
    once: false,
    easing: 'ease-in-out'
  });
  
  // Initialize tilt.js for 3D tilt effect
  $(document).ready(function(){
    $('[data-tilt]').tilt();
    
    // Initialize Owl Carousel
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
    
    // Add hover class to cards
    $('.hover-effect').hover(
      function() { $(this).addClass('shadow-lg').css('transform', 'translateY(-10px)'); },
      function() { $(this).removeClass('shadow-lg').css('transform', ''); }
    );
  });
</script>

<?php include("layouts/footer.php"); ?>