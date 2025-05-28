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

<!-- Schema Markup for Hotel -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hotel",
  "name": "Hotel Ranbirs Gomti Nagar",
  "description": "Luxury hotel in Gomti Nagar, Lucknow offering premium accommodations, fine dining, banquet facilities and rooftop bar with city views.",
  "image": "https://www.hotelranbirs.com/images/background/bg4.jpg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Vipin Khand, Gomti Nagar",
    "addressLocality": "Lucknow",
    "addressRegion": "Uttar Pradesh",
    "postalCode": "226010",
    "addressCountry": "India"
  },
  "telephone": "+915222234567",
  "priceRange": "₹7000 - ₹12000",
  "starRating": {
    "@type": "Rating",
    "ratingValue": "4.5"
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Free High-Speed WiFi"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Restaurant"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Rooftop Bar"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Fitness Center"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Banquet Halls"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/hotelranbirs",
    "https://www.instagram.com/hotelranbirs",
    "https://www.tripadvisor.com/hotelranbirs"
  ]
}
</script>

<!-- Banner Section -->
<section id="home" class="banner-section-four" aria-label="Hotel Ranbirs Luxury Accommodations">
  <div class="outer-box" data-background="images/banner/room1fullsize.JPG" title="Hotel Ranbirs Luxury Lobby">

    <!-- Content Slider -->
    <div class="service-two-slider">
      <!-- service-block -->
      <div class="service-block-four" data-bg="images/banner/room1fullsize.JPG">
        <div class="inner-box">
          <div class="content">
            <div class="count">01 <span>/ 05</span></div>
            <h2 class="title">Luxurious Rooms</h2>
          </div>
          <div class="overlay-content">
            <div class="count">01 <span>/ 05</span></div>
            <h2 class="title"><a href="room-details.html" title="View Room Details">Luxurious Rooms</a></h2>
            <div class="text">Experience the perfect blend of comfort and elegance in our well-appointed rooms featuring premium bedding, modern amenities, and stylish decor designed for both business and leisure travelers.</div>
          </div>
        </div>
      </div>

      <!-- service-block -->
      <div class="service-block-four" data-bg="images/banner/restaurantfullsize1.JPG">
        <div class="inner-box">
          <div class="content">
            <div class="count">02 <span>/ 05</span></div>
            <h2 class="title">Multi-Cuisine Restaurant</h2>
          </div>
          <div class="overlay-content">
            <div class="count">02 <span>/ 05</span></div>
            <h2 class="title"><a href="restaurant.html" title="Posadian Restaurant">Posadian Restaurant</a></h2>
            <div class="text">Savor delicious Indian, Mughlai, Chinese and Continental dishes prepared by our expert chefs in an elegant family-friendly setting with full bar service.</div>
          </div>
        </div>
      </div>

      <!-- service-block -->
      <div class="service-block-four" data-bg="images/banner/rooftopabsar1.jpg">
        <div class="inner-box">
          <div class="content">
            <div class="count">03 <span>/ 05</span></div>
            <h2 class="title">Rooftop Bar</h2>
          </div>
          <div class="overlay-content">
            <div class="count">03 <span>/ 05</span></div>
            <h2 class="title"><a href="rooftop-bar.html" title="Aabshaar Lounge">Aabshaar Lounge</a></h2>
            <div class="text">Enjoy our signature cocktails and snacks at 'Aabshaar' rooftop bar with happy hour deals, live DJ nights, and stunning views of the Lucknow skyline.</div>
          </div>
        </div>
      </div>

      <!-- service-block -->
      <div class="service-block-four" data-bg="images/banner/banquethall.jpg">
        <div class="inner-box">
          <div class="content">
            <div class="count">04 <span>/ 05</span></div>
            <h2 class="title">Banquet Hall</h2>
          </div>
          <div class="overlay-content">
            <div class="count">04 <span>/ 05</span></div>
            <h2 class="title"><a href="banquets.html" title="Banquet Facilities">Banquet Hall</a></h2>
            <div class="text">Host your memorable weddings, corporate events and social gatherings in our elegantly designed banquet spaces with customizable layouts and professional event planning.</div>
          </div>
        </div>
      </div>

      <!-- service-block -->
      <div class="service-block-four" data-bg="images/background/slide2.jpg">
        <div class="inner-box">
          <div class="content">
            <div class="count">05 <span>/ 05</span></div>
            <h2 class="title">Gymnasium</h2>
          </div>
          <div class="overlay-content">
            <div class="count">05 <span>/ 05</span></div>
            <h2 class="title"><a href="facilities.html" title="Fitness Center">Fitness Center</a></h2>
            <div class="text">Stay fit during your stay with our well-equipped fitness center featuring cardio machines, free weights and 24/7 access for hotel guests.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Section -->

<!-- About Section -->
<section id="about" class="about-section-eight pb-0" aria-label="About Hotel Ranbirs">
  <div class="outer-box">
    <div class="row">
      <!-- Content Column -->
      <div class="content-column col-lg-5 col-xl-4">
        <div class="inner-column">
          <div class="sec-title">
            <span class="sub-title style-three">HOTEL RANBIRS LUXURY HOTEL</span>
            <h1>Welcome to Hotel Ranbirs Gomti Nagar</h1>
            <div class="text">Experience the perfect blend of luxury, comfort and convenience at Hotel Ranbirs, one of the best hotels in Lucknow for business travelers, families and couples. Strategically located in upscale Gomti Nagar, we offer elegant rooms, rooftop bar, fine dining restaurant, banquet halls and warm hospitality that feels like home - only better.</div>
          </div>
          <div class="btn-box">
            <a href="#packages" class="theme-btn btn-style-two" title="View Room Packages"><span class="btn-title">View Packages</span></a>
            <a href="#contact" class="theme-btn btn-style-three ms-3" title="Book Your Stay"><span class="btn-title">Book Now</span></a>
          </div>
        </div>
      </div>
      <!-- Image Column -->
      <div class="image-column col-lg-7 col-xl-8">
        <div class="inner-column">
          <figure class="image-1 overlay-anim wow reveal-right tm-gsap-img-parallax overflow-hidden">
            <img src="images\banner\about1-540-740.jpg" alt="Luxury Lobby at Hotel Ranbirs Gomti Nagar" title="Hotel Ranbirs Lobby">
          </figure>
          <figure class="image-2 wow reveal-right tm-gsap-img-parallax overflow-hidden">
            <img src="images\banner\about-1-1-280-280.jpg" alt="Deluxe Room at Hotel Ranbirs" title="Deluxe Room">
            <img src="images\banner\about1-2-280-280.jpg" alt="Posadian Restaurant Interior" title="Restaurant View">
          </figure>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-image wow reveal-top tm-gsap-img-parallax overflow-hidden">
    <img src="images\banner\banner.jpg" alt="Hotel Ranbirs Exterior View" title="Hotel Building">
  </div>
</section>
<!--End About Section -->

<!-- Services Section -->
<section id="services" class="services-section-five" aria-label="Hotel Amenities">
  <div class="auto-container">
    <div class="sec-title text-center">
      <span class="sub-title">OUR SERVICES</span>
      <h2>Premium Amenities</h2>
      <div class="text">We provide everything you need for a comfortable and memorable stay in Lucknow</div>
    </div>
    <div class="outer-box">
      <div class="row">
        <!-- Service Block -->
        <div class="service-block-five col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="100ms">
          <div class="inner-box">
            <div class="image-box">
              <div class="bg-image" style="background-image:url(images/resource/service2-1.jpg);" title="WiFi Service"></div>
            </div>
            <div class="content-box">
              <figure class="icon mb-0"><img src="images/icons/icon-leaf1.png" alt="WiFi Icon"></figure>
              <h3 class="title"><a href="#" title="Internet Services">Free High-Speed Wi-fi</a></h3>
              <div class="text">Complimentary high-speed internet access throughout the hotel and in all rooms for seamless connectivity</div>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block-five col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="200ms">
          <div class="inner-box">
            <div class="image-box">
              <div class="bg-image" style="background-image:url(images/resource/service2-2.jpg);" title="Parking Area"></div>
            </div>
            <div class="content-box">
              <figure class="icon mb-0"><img src="images/icons/icon-leaf2.png" alt="Parking Icon"></figure>
              <h3 class="title"><a href="#" title="Parking Facilities">Secure Parking</a></h3>
              <div class="text">Complimentary on-site parking available for all our guests with 24/7 security surveillance</div>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block-five col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="300ms">
          <div class="inner-box">
            <div class="image-box">
              <div class="bg-image" style="background-image:url(images/resource/service2-1.jpg);" title="AC Room"></div>
            </div>
            <div class="content-box">
              <figure class="icon mb-0"><img src="images/icons/icon-leaf1.png" alt="AC Icon"></figure>
              <h3 class="title"><a href="#" title="Climate Control">Climate Control</a></h3>
              <div class="text">All rooms equipped with individual air conditioning and temperature control for your comfort</div>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block-five col-lg-3 col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="400ms">
          <div class="inner-box">
            <div class="image-box">
              <div class="bg-image" style="background-image:url(images/resource/service2-2.jpg);" title="Fitness Center"></div>
            </div>
            <div class="content-box">
              <figure class="icon mb-0"><img src="images/icons/icon-leaf3.png" alt="Gym Icon"></figure>
              <h3 class="title"><a href="#" title="Gym Facilities">24/7 Fitness Center</a></h3>
              <div class="text">Well-equipped gymnasium with cardio machines and free weights available round the clock</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Section-->

<!-- pricing-section -->
<section id="packages" class="pricing-section" aria-label="Room Packages">
  <div class="anim-icons">
    <img class="image-1" src="images/icons/shape-13.png" alt="Decorative Shape">
    <img class="image-2" src="images/icons/shape-14.png" alt="Decorative Shape">
  </div>
  <div class="auto-container">
    <div class="sec-title text-center">
      <span class="sub-title">ACCOMMODATION</span>
      <h2>Luxury Room Packages</h2>
      <div class="text">Choose from our selection of premium accommodations designed for comfort and style</div>
    </div>
    
    <!-- pricing-block -->
    <div class="pricing-block">
      <div class="inner-box">
        <div class="row">
          <div class="image-column col-lg-6 col-md-6">
            <div class="inner-column">
              <div class="text wow fadeInLeft" data-wow-delay="300ms">HOTEL RANBIRS</div>
              <div class="image-box">
                <figure class="image-1 overlay-anim wow reveal-left tm-gsap-img-parallax overflow-hidden">
                  <img src="images/rooms/delux.jpeg" alt="Deluxe Room Interior at Hotel Ranbirs" title="Deluxe Room">
                </figure>
                <figure class="image-2 overlay-anim wow reveal-left">
                  <img src="images/rooms/delux1.jpeg" alt="Deluxe Room Bathroom Facilities" title="Bathroom">
                </figure>
              </div>
            </div>
          </div>
          <div class="content-column col-lg-6 col-md-6">
            <div class="inner-column wow fadeInLeft" data-wow-delay="300ms">
              <h3 class="pricing-title">Deluxe Room</h3>
              <span class="pricing-amount">₹7000<span>/ Night (Single Occupancy)</span></span>
              <span class="pricing-amount">₹8000<span>/ Night (Double Occupancy)</span></span>
              <div class="list-box">
                <ul class="list-style-two">
                  <li><i class="icon fa fa-circle-check"></i> Welcome drink on arrival</li>
                  <li><i class="icon fa fa-circle-check"></i> Complimentary bottled water</li>
                  <li><i class="icon fa fa-circle-check"></i> Queen-size bed with premium linens</li>
                </ul>
                <ul class="list-style-two">
                  <li><i class="icon fa fa-circle-check"></i> Free high-speed Wi-Fi</li>
                  <li><i class="icon fa fa-circle-check"></i> 40" Smart LED TV</li>
                  <li><i class="icon fa fa-circle-check"></i> 24-hour room service</li>
                </ul>
              </div>
              <div class="text">Our Deluxe accommodation offers 18 business class rooms with a choice of twin or king beds, ideally suited for business travelers and couples. Features include a work desk, wardrobe, and modern bathroom with shower.</div>
              <div class="btn-box">
                <a href="#contact" class="btn-style-four" title="Book Deluxe Room">Book Now</a>
                <a href="room-details.html" class="btn-style-five ms-3" title="View Deluxe Room Details">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- pricing-block -->
    <div class="pricing-block mb-0">
      <div class="inner-box content-align-left">
        <div class="row">
          <div class="image-column col-lg-6 col-md-6">
            <div class="inner-column">
              <div class="text wow fadeInLeft" data-wow-delay="300ms">HOTEL RANBIRS</div>
              <div class="image-box">
                <figure class="image-1 overlay-anim wow reveal-right tm-gsap-img-parallax overflow-hidden">
                  <img src="images/rooms/executive.jpeg" alt="Executive Room at Hotel Ranbirs" title="Executive Room">
                </figure>
                <figure class="image-2 overlay-anim wow reveal-right">
                  <img src="images/rooms/delux1.jpeg" alt="Executive Room Seating Area" title="Sitting Area">
                </figure>
              </div>
            </div>
          </div>
          <div class="content-column col-lg-6 col-md-6">
            <div class="inner-column wow fadeInLeft" data-wow-delay="300ms">
              <h3 class="pricing-title">Executive Room</h3>
              <span class="pricing-amount">₹8000<span>/ Night (Single)</span></span>
              <span class="pricing-amount">₹9000<span>/ Night (Double)</span></span>
              <div class="list-box">
                <ul class="list-style-two">
                  <li><i class="icon fa fa-circle-check"></i> Elegant woodwork decor</li>
                  <li><i class="icon fa fa-circle-check"></i> King-size bed with premium bedding</li>
                  <li><i class="icon fa fa-circle-check"></i> Separate sitting area</li>
                </ul>
                <ul class="list-style-two">
                  <li><i class="icon fa fa-circle-check"></i> Minibar with refreshments</li>
                  <li><i class="icon fa fa-circle-check"></i> Electronic safe for valuables</li>
                  <li><i class="icon fa fa-circle-check"></i> Premium bathroom amenities</li>
                </ul>
              </div>
              <div class="text">The Executive room has been designed to provide more than just luxury. Beautiful woodwork creates a cozy atmosphere to relax and enjoy leisure time. Perfect for business executives and discerning travelers who appreciate extra space and amenities.</div>
              <div class="btn-box">
                <a href="#contact" class="btn-style-four" title="Book Executive Room">Book Now</a>
                <a href="room-details.html" class="btn-style-five ms-3" title="View Executive Room Details">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- pricing-block -->
    <div class="pricing-block">
      <div class="inner-box">
        <div class="row">
          <div class="image-column col-lg-6 col-md-6">
            <div class="inner-column">
              <div class="text wow fadeInLeft" data-wow-delay="300ms">HOTEL RANBIRS</div>
              <div class="image-box">
                <figure class="image-1 overlay-anim wow reveal-left tm-gsap-img-parallax overflow-hidden">
                  <img src="images/rooms/suite.jpeg" alt="Suite Room at Hotel Ranbirs" title="Luxury Suite">
                </figure>
                <figure class="image-2 overlay-anim wow reveal-left">
                  <img src="images/rooms/delux1.jpeg" alt="Suite Room Living Area" title="Living Space">
                </figure>
              </div>
            </div>
          </div>
          <div class="content-column col-lg-6 col-md-6">
            <div class="inner-column wow fadeInLeft" data-wow-delay="300ms">
              <h3 class="pricing-title">Suite Room</h3>
              <span class="pricing-amount">₹12000<span>/ Night</span></span>
              <div class="list-box">
                <ul class="list-style-two">
                  <li><i class="icon fa fa-circle-check"></i> Spacious living area with sofa</li>
                  <li><i class="icon fa fa-circle-check"></i> King-size bed with luxury bedding</li>
                  <li><i class="icon fa fa-circle-check"></i> Separate dining space</li>
                </ul>
                <ul class="list-style-two">
                  <li><i class="icon fa fa-circle-check"></i> Premium bathroom with amenities</li>
                  <li><i class="icon fa fa-circle-check"></i> 24-hour butler service</li>
                  <li><i class="icon fa fa-circle-check"></i> Complimentary breakfast</li>
                </ul>
              </div>
              <div class="text">Our elegantly styled Suite rooms are embellished with multiple features designed to inspire. Enjoy the separate living area, premium amenities and extra space perfect for families or guests seeking superior comfort. Includes exclusive check-in and personalized services.</div>
              <div class="btn-box">
                <a href="#contact" class="btn-style-four" title="Book Suite Room">Book Now</a>
                <a href="room-details.html" class="btn-style-five ms-3" title="View Suite Room Details">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End pricing-section -->

<!-- Restaurant Section -->
<section id="restaurant" class="video-section-four" aria-label="Posadian Restaurant">
  <div class="bg bg-image" style="background-image: url(images/banner/restaurantfullsize1.JPG);" title="Restaurant Interior"></div>
  <div class="auto-container">
    <div class="outer-box">
      <div class="sec-title light wow fadeInUp">
        <h2>Posadian Restaurant</h2>
        <p class="text-white">Multi-Cuisine Fine Dining Experience</p>
      </div>
      <div class="btn-box">
        <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now-two" data-fancybox="gallery" data-caption="Posadian Restaurant Tour" title="Watch Video">
          <i class="fa-solid fa-play"></i>
          <span class="ripple"></span>
        </a>
      </div>
      <div class="info-text">
        <div class="inner-info">
          <div class="text">Dine at Posadian, our multi-cuisine restaurant offering a range of Indian, Mughlai, Chinese and Continental dishes. Start your day with our perfectly-cooked premium breakfast featuring hot items, fresh fruit, pastries and freshly-brewed coffee. Enjoy family dinners or business lunches in our elegant setting with full bar service.</div>
          <a href="restaurant.html" class="link" title="View Restaurant Menu">View Menu & Details <i class="icon fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Restaurant section -->

<!-- Banquet Section -->
<section id="banquet" class="about-section-eight pb-0" aria-label="Banquet Facilities">
  <div class="outer-box">
    <div class="row">
      <!-- Content Column -->
      <div class="content-column col-lg-5 col-xl-4">
        <div class="inner-column">
          <div class="sec-title">
            <span class="sub-title style-three">EVENTS & CELEBRATIONS</span>
            <h2>Banquets & Meetings</h2>
            <div class="text">Our elegantly designed banquet spaces are perfect for hosting weddings (capacity 250+), corporate events, and social gatherings. With customizable layouts, professional event planning services, and in-house catering, we ensure your special occasion is memorable. Features include stage lighting, audio-visual equipment, and dedicated event managers.</div>
          </div>
          <div class="btn-box">
            <a href="#contact" class="theme-btn btn-style-two" title="Enquire About Banquets"><span class="btn-title">Enquire Now</span></a>
            <a href="banquets.html" class="theme-btn btn-style-three ms-3" title="View Banquet Halls"><span class="btn-title">View Halls</span></a>
          </div>
        </div>
      </div>
      <!-- Image Column -->
      <div class="image-column col-lg-7 col-xl-8">
        <div class="inner-column">
          <figure class="image-1 overlay-anim wow reveal-right tm-gsap-img-parallax overflow-hidden">
            <img src="images/resource/about8-1.jpg" alt="Banquet Hall Setup at Hotel Ranbirs" title="Banquet Hall">
          </figure>
          <figure class="image-2 wow reveal-right tm-gsap-img-parallax overflow-hidden">
            <img src="images/resource/about8-2.jpg" alt="Wedding Reception at Hotel Ranbirs" title="Wedding Event">
            <img src="images/resource/about8-3.jpg" alt="Corporate Meeting Setup" title="Corporate Event">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Banquet Section -->

<!-- Testimonial Section Two -->
<section id="testimonial" class="testimonial-section-two style-light" aria-label="Guest Testimonials">
  <div class="testimonial-pattrn1-1 bounce-y"></div>
  <div class="auto-container">
    <div class="sec-title text-center">
      <span class="sub-title">OUR CUSTOMER FEEDBACK</span>
      <h2>Guest Experiences</h2>
      <div class="text">What our valued guests say about their stay at Hotel Ranbirs</div>
    </div>
    <div class="row">
      <div class="testimonials overflow-hidden col-lg-12">
        <!-- Testimonial Slider -->
        <div class="swiper-container testimonial-slider-content">
          <div class="swiper-wrapper">
            <!-- Testimonial Block -->
            <div class="testimonial-block-two swiper-slide">
              <div class="inner-box">
                <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                <div class="text">The service at Hotel Ranbirs was exceptional. The staff went above and beyond to make our stay comfortable. The rooms were spacious, clean and well-appointed. The food at Posadian restaurant was delicious with great variety. Will definitely return on my next trip to Lucknow!</div>
                <div class="info-box">
                  <h3 class="name">Rahul Sharma</h3>
                  <span class="designation">Business Traveler</span>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonial Block -->
            <div class="testimonial-block-two swiper-slide">
              <div class="inner-box">
                <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                <div class="text">We hosted our daughter's wedding at Hotel Ranbirs and it was perfect! The banquet team handled everything professionally from decor to food service. The Mughlai dishes were particularly excellent. Our guests are still complimenting us on the venue choice. Highly recommended for weddings!</div>
                <div class="info-box">
                  <h3 class="name">Priya Singh</h3>
                  <span class="designation">Wedding Host</span>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonial Block -->
            <div class="testimonial-block-two swiper-slide">
              <div class="inner-box">
                <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                <div class="text">As a frequent business traveler, I appreciate the comfortable beds, reliable high-speed WiFi and excellent room service at Hotel Ranbirs. The location in Gomti Nagar is convenient for all my meetings. The rooftop bar Aabshaar is a great place to unwind after work. Highly recommended!</div>
                <div class="info-box">
                  <h3 class="name">Amit Patel</h3>
                  <span class="designation">Corporate Executive</span>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next" title="Next Testimonial"></div>
          <div class="swiper-button-prev" title="Previous Testimonial"></div>
        </div>
        <!-- Testimonial Thumb -->
        <div class="swiper-container testimonial-thumbs mx-auto">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/resource/testi2-thumb1.png" alt="Rahul Sharma Guest" title="Rahul Sharma"/></div>
            <div class="swiper-slide"><img src="images/resource/testi2-thumb2.png" alt="Priya Singh Guest" title="Priya Singh"/></div>
            <div class="swiper-slide"><img src="images/resource/testi2-thumb3.png" alt="Amit Patel Guest" title="Amit Patel"/></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Testimonial Section Two -->

<!-- Contact Section -->
<section id="contact" class="contact-section style-four pb-0" aria-label="Contact Hotel Ranbirs">
  <div class="bg bg-image" style="background-image: url(images/banner/restaurantfullsize1.JPG)" title="Hotel Contact"></div>
  <div class="outer-box">
    <div class="row">

      <!-- Content Column -->
      <div class="content-column col-lg-7 col-xl-6">
        <div class="inner-column">
          <h3 class="title">Why Choose Hotel Ranbirs?</h3>
          <div class="text mb-4">Experience hospitality that blends modern luxury with traditional warmth at one of Lucknow's finest hotels in the prime Gomti Nagar location.</div>
          <div class="row">
            <div class="col-md-5">
              <ul class="list-style-two">
                <li><i class="icon fa-solid fa-check"></i> Prime Gomti Nagar location</li>
                <li><i class="icon fa-solid fa-check"></i> Luxurious AC rooms & suites</li>
                <li><i class="icon fa-solid fa-check"></i> Rooftop bar with city views</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-style-two ps-xl-4">
                <li><i class="icon fa-solid fa-check"></i> Multi-cuisine family restaurant</li>
                <li><i class="icon fa-solid fa-check"></i> Banquet halls for all events</li>
                <li><i class="icon fa-solid fa-check"></i> Complimentary Wi-Fi & parking</li>
              </ul>
            </div>
          </div>
          <div class="contact-block-box mt-5">
            <div class="row">
              <div class="contact-block-two col-md-5">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box"><i class="icon fa-light fa-envelope"></i></div>
                    <h4 class="icon-title">Contact Us</h4>
                    <div class="text-two">Email: <a href="mailto:info@hotelranbirs.com" title="Email Hotel Ranbirs">info@hotelranbirs.com</a></div>
                    <div class="text">24/7 Reception: +91 (522) 223-4567</div>
                    <div class="text">Banquet Enquiries: +91 9876543210</div>
                  </div>
                </div>
              </div>
              <div class="contact-block-two col-md-6">
                <div class="inner-box ps-xl-4">
                  <div class="content-box">
                    <div class="icon-box"><i class="icon fa-regular fa-location-dot"></i></div>
                    <h4 class="icon-title">Our Location</h4>
                    <div class="text">Vipin Khand, Gomti Nagar, Lucknow</div>
                    <div class="text-two">Uttar Pradesh, India - 226010</div>
                    <div class="text">30 minutes from Chaudhary Charan Singh Airport</div>
                    <div class="text">15 minutes from Lucknow Railway Station</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Form Column -->
      <div class="form-column col-lg-5 col-xl-6">
        <div class="inner-column">
          <!-- Contact Form -->
          <div class="contact-form wow fadeInLeft">
            <div class="icon-anchor-1 bounce-y"></div>
            <div class="sec-title">
              <span class="sub-title style-three">BOOK YOUR STAY</span>
              <h2>Reservation Request</h2>
              <div class="text">Get the best rates by booking directly with us</div>
            </div>

            <!--Contact Form-->
            <form method="post" action="#" id="contact-form">
              <div class="row">
                <div class="form-group col-lg-6 col-md-6">
                  <input type="text" name="name" placeholder="Your Name" required aria-label="Your Name">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                  <input type="email" name="email" placeholder="Email Address" required aria-label="Email Address">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                  <input type="text" name="phone" placeholder="Phone Number" required aria-label="Phone Number">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                  <select name="room-type" required aria-label="Room Type">
                    <option value="">Room Type</option>
                    <option value="Deluxe">Deluxe Room</option>
                    <option value="Executive">Executive Room</option>
                    <option value="Suite">Suite Room</option>
                    <option value="Banquet">Banquet Enquiry</option>
                    <option value="Restaurant">Restaurant Reservation</option>
                  </select>
                </div>
                <div class="form-group col-lg-6 col-md-6">
                  <input type="text" name="check-in" placeholder="Check-In Date" class="datepicker" required aria-label="Check-In Date">
                </div>
                <div class="form-group col-lg-6 col-md-6">
                  <input type="text" name="check-out" placeholder="Check-Out Date" class="datepicker" required aria-label="Check-Out Date">
                </div>
                <div class="form-group col-lg-12">
                  <textarea name="message" placeholder="Special Requests (Dietary, Accessibility, etc.)" rows="2" aria-label="Special Requests"></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <button type="submit" class="theme-btn btn-style-two" name="submit-form" title="Submit Booking Request"><span class="btn-title">Submit Booking Request</span></button>
                </div>
              </div>
            </form>
          </div>
          <!--End Contact Form -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<!-- client-section two -->
<section class="client-section-two" aria-label="Our Partners">
  <div class="auto-container">
    <div class="sec-title">
      <h2>Our Valued Partners</h2>
      <div class="text">We collaborate with leading brands to enhance your hospitality experience</div>
    </div>
    <div class="client-slider wow fadeInUp"> 
      <!-- client-block -->
      <div class="client-block-two">
        <div class="inner-box">
          <figure class="image"><a href="#" title="Taj Hotels"><img src="images/resource/client1-1.png" alt="Taj Hotels Partner Logo"></a></figure>
        </div>
      </div>
      <!-- client-block -->
      <div class="client-block-two">
        <div class="inner-box">
          <figure class="image"><a href="#" title="MakeMyTrip"><img src="images/resource/client1-2.png" alt="MakeMyTrip Partner Logo"></a></figure>
        </div>
      </div>
      <!-- client-block -->
      <div class="client-block-two">
        <div class="inner-box">
          <figure class="image"><a href="#" title="OYO Rooms"><img src="images/resource/client1-3.png" alt="OYO Partner Logo"></a></figure>
        </div>
      </div>
      <!-- client-block -->
      <div class="client-block-two">
        <div class="inner-box">
          <figure class="image"><a href="#" title="Zomato"><img src="images/resource/client1-4.png" alt="Zomato Partner Logo"></a></figure>
        </div>
      </div>
      <!-- client-block -->
      <div class="client-block-two">
        <div class="inner-box">
          <figure class="image"><a href="#" title="Swiggy"><img src="images/resource/client1-5.png" alt="Swiggy Partner Logo"></a></figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End client section -->

<!-- Footer Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Hotel Ranbirs",
  "image": "https://www.hotelranbirs.com/images/background/bg4.jpg",
  "@id": "https://www.hotelranbirs.com",
  "url": "https://www.hotelranbirs.com",
  "telephone": "+915224056579",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "CP 125, Viraj Khand",
    "addressLocality": "Gomti Nagar",
    "addressRegion": "Lucknow",
    "postalCode": "226010",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "26.8467",
    "longitude": "80.9462"
  },
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
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/hotelranbirs",
    "https://www.instagram.com/hotelranbirs",
    "https://www.tripadvisor.com/hotelranbirs"
  ]
}
</script>

<?php include("layouts/footer.php"); ?>

<!-- Hotel Details -->
<div class="sr-only" aria-hidden="true">
  <h1>Hotel Ranbirs Gomti Nagar - Luxury Hotel in Lucknow</h1>
  <h2>Premium Accommodations, Fine Dining & Banquet Facilities</h2>
  <p>Have a Look</p>
  <address>
    ADMIN OFFICE CP 125,<br>
    VIRAJ KHAND GOMTINAGAR LUCKNOW,<br>
    PIN 226010.<br>
    0522-4056579, +91-8429521002<br>
    info@hotelranbirs.com
  </address>
</div>