<?php 
$pageTitle = "Hotel Ranbirs Gomti Nagar | Luxury 3-Star Hotel in Lucknow";
$pageDescription = "Experience premium hospitality at Hotel Ranbirs, a 3-star luxury hotel in Gomti Nagar, Lucknow. Featuring elegant rooms, multi-cuisine restaurant, banquet hall & rooftop bar.";
$pageKeywords = "hotel in Gomti Nagar, luxury hotel Lucknow, 3-star hotel Lucknow, banquet hall Lucknow, rooftop bar Lucknow, hotel near MAX Hospital";
include("layouts/header.php"); 
?>

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
    h1 {
      font-size: 2.5rem !important;
      font-family: Arial, Helvetica, sans-serif !important;
      font-weight: 600;
      color: #AE7D54 !important;
    }
    h2 {
   font-size: 1.7rem !important;
   line-height: 30px !important;
   font-family: Arial, Helvetica, sans-serif !important;
   font-weight: 600 !important ;
   color: #AE7D54 !important;
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hotel",
  "name": "Hotel Ranbirs",
  "description": "3-star luxury hotel in Gomti Nagar, Lucknow offering premium accommodations, dining, and event spaces",
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
    "latitude": "26.8539",
    "longitude": "81.0089"
  },
  "telephone": "+91-8429521002",
  "email": "info@hotelranbirs.com",
  "image": "https://www.hotelranbirs.com/images/resource/about1-1.jpg",
  "priceRange": "$$",
  "amenityFeature": [
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
      "name": "Banquet Hall"
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Meeting Rooms"
    }
  ],
  "starRating": {
    "@type": "Rating",
    "ratingValue": "3"
  }
}
</script>

<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/banner/room1fullsize.JPG);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title" style="color: var(--theme-color1);">Welcome to Hotel Ranbirs, Gomti Nagar, Lucknow</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 order-lg-2 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title style-two">Premium 3-Star Property</span>
                        <h2>Prime Location, Premium Hospitality</h2>
                        <div class="text-2">Hotel Ranbirs, located opposite MAX Hospital in Viraj Khand-4, Gomti Nagar, is designed to offer comfort, elegance, and personalized service.</div>
                        <div class="text">Whether you're here for business, leisure, or a grand celebration, we offer everything from spacious rooms and a multi-cuisine restaurant to a banquet hall, rooftop bar, and modern meeting room.</div>
                    </div>
                    <h3 class="mt-4 mb-3">Why Choose Hotel Ranbirs?</h3>
                    <ul class="list-style-two">
                        <li><i class="icon fa fa-circle-check"></i> Prime location in central Lucknow</li>
                        <li><i class="icon fa fa-circle-check"></i> In-house restaurant and rooftop bar</li>
                        <li><i class="icon fa fa-circle-check"></i> Professional event management services</li>
                        <li><i class="icon fa fa-circle-check"></i> 24x7 hospitality service</li>
                    </ul>
                    <div class="btn-box">
                        <a href="page-rooms.html" class="theme-btn btn-style-four"><span class="btn-title">View Our Rooms</span></a>
                    </div>
                </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-md-8 col-lg-6">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1 overlay-anim wow reveal-left tm-gsap-img-parallax overflow-hidden">
                        <img src="images/banner/hallway1.png" alt="Hotel Ranbirs front view and entrance">
                    </figure>
                    <figure class="image-2 overlay-anim wow reveal-left tm-gsap-img-parallax overflow-hidden">
                        <img src="images/banner/rooftop-bar1.png" alt="Rooftop bar at Hotel Ranbirs with city view">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Marquee Section -->
<section class="marquee-section pt-0">
    <div class="marquee marquee-style-one">
        <div class="marquee-group">
            <div class="text text-style2" data-text="LUXURY">Comfortable</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
            <div class="text" data-text="HOSPITALITY">Ranbirs</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
            <div class="text text-style2" data-text="MODERN">Amenities</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
            <div class="text" data-text="BEST PRICE">Guarantee</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
        </div>
        <div class="marquee-group">
            <div class="text text-style2" data-text="LUXURY">Comfortable</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
            <div class="text" data-text="HOSPITALITY">Ranbirs</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
            <div class="text text-style2" data-text="MODERN">Amenities</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
            <div class="text" data-text="BEST PRICE">Guarantee</div>
            <span class="text divider "> <i class="icon fa-sharp fa-solid fa-star"></i> </span>
        </div>
    </div>
</section>
<!--End Marquee Section -->

<!-- Features Section Two -->
<section class="feature-section-two pb-0">
    <div class="auto-container">
        <div class="row feature-row g-0">
            <div class="image-column col-lg-6">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image overlay-anim wow reveal-right">
                            <img src="images\banner\Adobe Express - file (8).jpg" alt="Multi-cuisine restaurant interior at Hotel Ranbirs">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="content-column col-lg-6" >
                <div class="inner-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">EXPERIENCE</span>
                            <h2>Our Multi-Cuisine Restaurant & Rooftop Bar</h2>
                            <div class="text">Enjoy diverse culinary experiences at our in-house restaurant featuring local Lucknowi flavors and international cuisine. Our rooftop bar offers refreshing drinks with a panoramic view of Gomti Nagar.</div>
                        </div>
                        <a href="#" class="theme-btn btn-style-two read-more">VIEW MENU</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row feature-row g-0">
            <div class="content-column col-lg-6">
                <div class="inner-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">HOST</span>
                            <h2>Banquet & Meeting Facilities</h2>
                            <div class="text">Our professional event management team can handle everything from corporate meetings to grand weddings. The banquet hall accommodates up to 200 guests with customizable setups and catering options.</div>
                        </div>
                        <a href="#" class="theme-btn btn-style-two read-more">ENQUIRE NOW</a>
                    </div>
                </div>
            </div>
            <div class="image-column col-lg-6">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image overlay-anim wow reveal-left">
                            <img src="images/banner/banquet1.jpg" alt="Elegant banquet hall at Hotel Ranbirs">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row feature-row g-0">
            <div class="image-column col-lg-6">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image overlay-anim wow reveal-right">
                            <img src="images/banner/location.png" alt="Prime location of Hotel Ranbirs in Gomti Nagar">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="content-column col-lg-6">
                <div class="inner-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">LOCATION</span>
                            <h2>Opposite MAX Hospital, Gomti Nagar</h2>
                            <div class="text">Our prime location in Viraj Khand-4 places you minutes away from major corporate offices, shopping centers, and healthcare facilities. Easy access to all parts of Lucknow makes us the preferred choice for both business and leisure travelers.</div>
                        </div>
                        <a href="contact.html" class="theme-btn btn-style-two read-more">GET DIRECTIONS</a>
                    </div> 
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- End Features Section -->

<!-- Funfact Section -->
<section class="funfact-section-two">
    <div class="outer-box">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block-two col-lg-3 col-sm-6">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="40">0</span>+</div>
                            <div class="counter-text">Luxury <br/> Rooms</div>
                        </div>
                    </div>
                    <!-- Counter block-->
                    <div class="counter-block-two col-lg-3 col-sm-6">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="5">0</span></div>
                            <div class="counter-text">Event <br/> Spaces</div>
                        </div>
                    </div>
                    <!-- Counter block-->
                    <div class="counter-block-two col-lg-3 col-sm-6">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="2">0</span></div>
                            <div class="counter-text">Restaurants & <br/> Bars</div>
                        </div>
                    </div>
                    <!-- Counter block-->
                    <div class="counter-block-two col-lg-3 col-sm-6">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="100">0</span>%</div>
                            <div class="counter-text">Satisfaction <br/> Guarantee</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Funfact Section -->

<!-- Testimonial Section Five -->
<section class="testimonial-section-five pt-0">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <span class="sub-title">Our Guest Feedback</span>
                    <h2>What Our Guests Say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial-block-five col-lg-4 col-sm-6">
                <div class="inner-box">
                    <div class="content-box">
                        <span class="icon fa fa-quote-right"></span>
                        <div class="text">Staying at Hotel Ranbirs was a wonderful experience. The staff was exceptionally professional and the rooms were spotless with all modern amenities. Will definitely return!</div>
                    </div>
                    <div class="info-box">
                        <figure class="thumb"><img src="images/resource/testi2-thumb1.png" alt="Rajesh Kumar - Business Traveler"></figure>
                        <div>
                            <span class="designation">Business Traveler</span>
                            <div class="name">Rajesh Kumar</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-five col-lg-4 col-sm-6">
                <div class="inner-box">
                    <div class="content-box">
                        <span class="icon fa fa-quote-right"></span>
                        <div class="text">The banquet facilities at Ranbirs are excellent. We hosted our daughter's wedding here and everything was perfect - from food to service. Highly recommended for events!</div>
                    </div>
                    <div class="info-box">
                        <figure class="thumb"><img src="images/resource/testi2-thumb2.png" alt="Priya Singh - Wedding Planner"></figure>
                        <div>
                            <span class="designation">Wedding Planner</span>
                            <div class="name">Priya Singh</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-five col-lg-4 col-sm-6">
                <div class="inner-box">
                    <div class="content-box">
                        <span class="icon fa fa-quote-right"></span>
                        <div class="text">As a frequent traveler to Lucknow, I always choose Hotel Ranbirs for its unbeatable combination of comfort, location and value. The staff remembers my preferences which makes me feel at home.</div>
                    </div>
                    <div class="info-box">
                        <figure class="thumb"><img src="images/resource/testi2-thumb1.png" alt="Amit Patel - Corporate Client"></figure>
                        <div>
                            <span class="designation">Corporate Client</span>
                            <div class="name">Amit Patel</div>
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
    <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 80px; top: 20%; left: 10%; animation-delay: 0s;" alt="Decoration icon">
    <img src="https://cdn-icons-png.flaticon.com/512/3048/3048127.png" class="position-absolute float-anim" style="width: 60px; bottom: 30%; right: 15%; animation-delay: 1s;" alt="Decoration icon">
</section>

<?php include("layouts/footer.php"); ?>