<?php include("layouts/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Luxury Rooms & Suites in Gomti Nagar | Hotel Ranbirs - Best Accommodation in Lucknow</title>
  <meta name="description" content="Experience premium comfort in our luxury rooms & suites at Hotel Ranbirs, Gomti Nagar. Choose from Deluxe, Executive, Suite or Budget rooms with modern amenities, free WiFi & excellent service.">
  <meta name="keywords" content="hotel in Gomti Nagar, luxury hotel Lucknow, best hotels in Lucknow, Hotel Ranbirs rooms, premium accommodation, Gomti Nagar hotels">
  <link rel="canonical" href="https://www.hotelranbirs.com/rooms" />
  <meta property="og:title" content="Luxury Rooms & Suites in Gomti Nagar | Hotel Ranbirs">
  <meta property="og:description" content="Premium accommodation at Hotel Ranbirs, Gomti Nagar - Experience luxury and comfort in our well-appointed rooms and suites.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.hotelranbirs.com/rooms">
  <meta property="og:image" content="https://www.hotelranbirs.com/images/resource/room-collage.jpg">
  <meta property="og:site_name" content="Hotel Ranbirs">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Hotel",
    "name": "Hotel Ranbirs",
    "description": "Premium hotel accommodation in Gomti Nagar, Lucknow",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "CP 125, Viraj Khand",
      "addressLocality": "Gomti Nagar",
      "addressRegion": "Uttar Pradesh",
      "postalCode": "226010",
      "addressCountry": "India"
    },
    "telephone": "+91-8429521002",
    "url": "https://www.hotelranbirs.com",
    "priceRange": "₹5000 - ₹12000",
    "amenityFeature": [
      {
        "@type": "LocationFeatureSpecification",
        "name": "Free WiFi"
      },
      {
        "@type": "LocationFeatureSpecification",
        "name": "Air Conditioning"
      },
      {
        "@type": "LocationFeatureSpecification",
        "name": "Restaurant"
      },
      {
        "@type": "LocationFeatureSpecification",
        "name": "Gym"
      }
    ],
    "image": "https://www.hotelranbirs.com/images/resource/room-collage.jpg",
    "numberOfRooms": "30"
  }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    }
  </style>
</head>
<body>

<!-- Page Title -->
<section class="page-title" style="background-image: url(images/banner/room1fullsize.JPG); background-color: var(--theme-color2);">
  <div class="auto-container">
    <div class="title-outer text-center" data-aos="fade-down">
      <h1 class="title" style="color: var(--theme-color1);">Luxury Rooms & Suites in Gomti Nagar, Lucknow</h1>
      <p class="subtitle" style="color: var(--text-color);">Experience comfort and luxury in every space</p>
      <ul class="page-breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Rooms</li>
      </ul>
    </div>
  </div>
</section>

<!-- Introduction Section -->
<section class="intro-section pt-100 pb-70" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="image-box">
          <img src="images\banner\room1fullsize.JPG" alt="Luxury rooms at Hotel Ranbirs Gomti Nagar" class="rounded-lg shadow-lg">
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="content-box pl-lg-4">
          <h2 class="mb-4" style="color: var(--theme-color1);">🛏️ ROOMS DETAILS</h2>
          <h3 class="mb-3">Premium Accommodation in Gomti Nagar</h3>
          <p style="color: var(--text-color);">At Hotel Ranbirs, each room is designed to offer unmatched comfort and style. Whether you're booking a business trip or a relaxing getaway, our spacious and well-furnished rooms offer the perfect environment for rest and productivity.</p>
          
          <div class="features-box mt-5">
            <div class="feature-item" style="border-left: 3px solid var(--accent-color);">
              <h4 style="color: var(--headings-color);">Room Amenities:</h4>
              <ul class="amenities-list" style="color: var(--text-color);">
                <li><i class="fa fa-check" style="color: var(--accent-color);"></i> Air Conditioning</li>
                <li><i class="fa fa-check" style="color: var(--accent-color);"></i> Daily Housekeeping</li>
                <li><i class="fa fa-check" style="color: var(--accent-color);"></i> Smart LED TV with OTT Apps</li>
                <li><i class="fa fa-check" style="color: var(--accent-color);"></i> Complimentary Water Bottles</li>
                <li><i class="fa fa-check" style="color: var(--accent-color);"></i> Clean Linen, Toiletries, and Towels</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rooms Section -->
<section class="rooms-section pb-100 pt-70" style="background-color: var(--theme-color-light);">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2 style="color: var(--theme-color1);">Our Room Categories</h2>
      <p class="mt-2" style="color: var(--text-color);">Book direct for the best prices on rooms in Gomti Nagar, Lucknow</p>
    </div>
    <div class="row">
      <!-- Room 1 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up">
        <div class="inner-box" style="border: 1px solid var(--theme-color2); background: var(--theme-color-light);">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images\banner\room1fullsize.JPG" alt="Deluxe Room at Hotel Ranbirs Gomti Nagar"></figure>
          </div>
          <div class="content-box">
            <h3 class="title" style="color: white !important"><a href="room-details.html">Deluxe Room</a></h3>
            <span class="price" style="color: var(--accent-color);">₹7,000 / NIGHT</span>
            <p style="color: white !important;">Elegantly styled and spacious, the Deluxe Room features modern furnishings, plush bedding, and all essential comforts for both business and leisure travelers.</p>
            <div class="room-features mt-3">
              <ul style="color: var(--text-color);">
                <li><i class="fa fa-bed" style="color: var(--accent-color);"></i> Queen-size Bed</li>
                <li><i class="fa fa-television" style="color: var(--accent-color);"></i> LED TV</li>
                <li><i class="fa fa-desktop" style="color: var(--accent-color);"></i> Work Desk</li>
              </ul>
            </div>
          </div>
          <div class="box-caption" style="background: var(--theme-color2);">
            <a href="room-details.html" class="book-btn" style="background: var(--accent-color); color: white;">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-snowflake-o" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-cutlery" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-shower" style="color: var(--theme-color1);"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Room 2 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="inner-box" style="border: 1px solid var(--theme-color2); background: var(--theme-color-light);">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images\banner\room1fullsize.JPG" alt="Executive Room at Hotel Ranbirs Lucknow"></figure>
          </div>
          <div class="content-box">
            <h3 class="title" style="color: white !important;"><a href="room-details.html">Executive Room</a></h3>
            <span class="price" style="color: var(--accent-color);">₹8,000 / NIGHT</span>
            <p style="color: white !important;">Designed for luxury and convenience, the Executive Room features a workstation, complimentary high-speed internet, and enhanced in-room amenities.</p>
            <div class="room-features mt-3">
              <ul style="color: var(--text-color);">
                <li><i class="fa fa-bed" style="color: var(--accent-color);"></i> King-size Bed</li>
                <li><i class="fa fa-couch" style="color: var(--accent-color);"></i> Sofa Seating Area</li>
                <li><i class="fa fa-glass" style="color: var(--accent-color);"></i> Mini-Fridge & Electric Kettle</li>
              </ul>
            </div>
          </div>
          <div class="box-caption" style="background: var(--theme-color2);">
            <a href="room-details.html" class="book-btn" style="background: var(--accent-color); color: white;">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-snowflake-o" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-briefcase" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-tv" style="color: var(--theme-color1);"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Room 3 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="inner-box" style="border: 1px solid var(--theme-color2); background: var(--theme-color-light);">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images\banner\room1fullsize.JPG" alt="Family Suite at Hotel Ranbirs Gomti Nagar"></figure>
          </div>
          <div class="content-box">
            <h3 class="title" style="color: white !important;"><a href="room-details.html">Family Suite</a></h3>
            <span class="price" style="color: var(--accent-color);">₹12,000 / NIGHT</span>
            <p style="color: white !important;">The luxurious Suite offers a separate living area, king-size bed, premium bath essentials, and a beautiful city view to elevate your stay experience.</p>
            <div class="room-features mt-3">
              <ul style="color: var(--text-color);">
                <li><i class="fa fa-home" style="color: var(--accent-color);"></i> Two Interconnected Bedrooms</li>
                <li><i class="fa fa-users" style="color: var(--accent-color);"></i> Ideal for Families & Small Groups</li>
                <li><i class="fa fa-arrows-alt" style="color: var(--accent-color);"></i> Extra Space for Dining & Relaxation</li>
              </ul>
            </div>
          </div>
          <div class="box-caption" style="background: var(--theme-color2);">
            <a href="room-details.html" class="book-btn" style="background: var(--accent-color); color: white;">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-bed" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-bath" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-glass" style="color: var(--theme-color1);"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Room 4 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="inner-box" style="border: 1px solid var(--theme-color2); background: var(--theme-color-light);">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images\banner\room1fullsize.JPG" alt="Budget Room at Hotel Ranbirs Lucknow"></figure>
          </div>
          <div class="content-box">
            <h3 class="title" style="color: white !important;"><a href="room-details.html">Budget Room</a></h3>
            <span class="price" style="color: var(--accent-color);">₹5,000 / NIGHT</span>
            <p style="color: white !important;">Affordable yet comfortable, the Budget Room is ideal for short stays. Enjoy a restful bed, clean en-suite, and modern essentials without compromise.</p>
            <div class="room-features mt-3">
              <ul style="color: var(--text-color);">
                <li><i class="fa fa-bed" style="color: var(--accent-color);"></i> Comfortable Twin Beds</li>
                <li><i class="fa fa-bath" style="color: var(--accent-color);"></i> Modern Bathroom</li>
                <li><i class="fa fa-check-circle" style="color: var(--accent-color);"></i> All Essential Amenities</li>
              </ul>
            </div>
          </div>
          <div class="box-caption" style="background: var(--theme-color2);">
            <a href="room-details.html" class="book-btn" style="background: var(--accent-color); color: white;">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-bed" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-bath" style="color: var(--theme-color1);"></i></a></li>
              <li><a href="#"><i class="fa fa-shower" style="color: var(--theme-color1);"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Amenities Section -->
<section class="amenities-section pb-70 pt-70" style="background-color: var(--theme-color2);">
  <div class="auto-container">
    <div class="sec-title text-center mb-4" data-aos="fade-down">
      <h2 style="color: var(--theme-color1);">In-Room Amenities</h2>
      <p class="mt-2" style="color: var(--text-color);">Every room includes these premium amenities for your comfort</p>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-4 mb-4">
        <ul class="amenities-list">
          <li><i class="fa fa-newspaper-o" style="color: var(--accent-color);"></i> Free newspaper</li>
          <li><i class="fa fa-snowflake-o" style="color: var(--accent-color);"></i> Air conditioning</li>
          <li><i class="fa fa-phone" style="color: var(--accent-color);"></i> Phone</li>
          <li><i class="fa fa-coffee" style="color: var(--accent-color);"></i> Coffee/tea maker</li>
          <li><i class="fa fa-glass" style="color: var(--accent-color);"></i> Minibar</li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <ul class="amenities-list">
          <li><i class="fa fa-cut" style="color: var(--accent-color);"></i> Hair dryer</li>
          <li><i class="fa fa-shower" style="color: var(--accent-color);"></i> Shower only</li>
          <li><i class="fa fa-bed" style="color: var(--accent-color);"></i> Sofa bed</li>
          <li><i class="fa fa-refresh" style="color: var(--accent-color);"></i> Daily housekeeping</li>
          <li><i class="fa fa-user" style="color: var(--accent-color);"></i> Private bathroom</li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <ul class="amenities-list">
          <li><i class="fa fa-leaf" style="color: var(--accent-color);"></i> Free toiletries</li>
          <li><i class="fa fa-wifi" style="color: var(--accent-color);"></i> Free WiFi</li>
          <li><i class="fa fa-television" style="color: var(--accent-color);"></i> Flat-panel TV</li>
          <li><i class="fa fa-archive" style="color: var(--accent-color);"></i> Iron/ironing board</li>
          <li><i class="fa fa-lock" style="color: var(--accent-color);"></i> In-room safe</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Facilities Section -->
<section class="facilities-section pb-70 pt-70" style="background-color: var(--theme-color3);">
  <div class="auto-container">
    <div class="sec-title text-center mb-4" data-aos="fade-down">
      <h2 style="color: var(--theme-color1);">In-Hotel Facilities</h2>
      <p class="mt-2" style="color: var(--text-color);">Enjoy these exceptional facilities during your stay</p>
    </div>
    <div class="row">
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in">
        <div class="inner-box text-center py-4" style="background-color: var(--theme-color-light); border: 1px solid var(--theme-color2);">
          <div class="icon-box"><i class="fa fa-wifi fa-2x mb-2" style="color: var(--accent-color);"></i></div>
          <h4 style="color: var(--theme-color1);">Wi-Fi Connectivity</h4>
          <p style="color: var(--text-color);">High-speed internet throughout the hotel</p>
        </div>
      </div>
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="inner-box text-center py-4" style="background-color: var(--theme-color-light); border: 1px solid var(--theme-color2);">
          <div class="icon-box"><i class="fa fa-cutlery fa-2x mb-2" style="color: var(--accent-color);"></i></div>
          <h4 style="color: var(--theme-color1);">Restaurant</h4>
          <p style="color: var(--text-color);">Multi-cuisine dining experience</p>
        </div>
      </div>
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="inner-box text-center py-4" style="background-color: var(--theme-color-light); border: 1px solid var(--theme-color2);">
          <div class="icon-box"><i class="fa fa-heartbeat fa-2x mb-2" style="color: var(--accent-color);"></i></div>
          <h4 style="color: var(--theme-color1);">Gymnasium</h4>
          <p style="color: var(--text-color);">Modern fitness equipment</p>
        </div>
      </div>
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="inner-box text-center py-4" style="background-color: var(--theme-color-light); border: 1px solid var(--theme-color2);">
          <div class="icon-box"><i class="fa fa-glass fa-2x mb-2" style="color: var(--accent-color);"></i></div>
          <h4 style="color: var(--theme-color1);">Open Bar</h4>
          <p style="color: var(--text-color);">Premium beverages & cocktails</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section with Parallax Effect -->
<section class="py-5 position-relative overflow-hidden" style="background: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;">
  <div class="overlay" style="background: rgba(var(--theme-color-black-rgb), 0.7); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
  <div class="auto-container position-relative text-center" style="z-index: 1;" data-aos="zoom-in">
    <h2 class="text-white mb-4 fs-3">Ready to Book Your Stay?</h2>
    <p class="text-white mb-5">Experience the perfect blend of comfort and luxury at Hotel Ranbirs</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="contact.html" class="btn btn-lg pulse-anim" style="background-color: var(--theme-color1); color: white;">Book a Room</a>
      <a href="tel:+919876543210" class="btn btn-lg btn-outline-light">Call Us Now</a>
    </div>
  </div>
  
  <!-- Floating food decoration -->
  <img src="https://cdn-icons-png.flaticon.com/512/5787/5787068.png" class="position-absolute float-anim" style="width: 2rem; top: 20%; left: 10%; animation-delay: 0s;" alt="Hotel decoration">
  <img src="https://cdn-icons-png.flaticon.com/512/3194/3194889.png" class="position-absolute float-anim" style="width: 2rem; bottom: 30%; right: 15%; animation-delay: 1s;" alt="Hotel decoration">
</section>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
  });
</script>

<?php include("layouts/footer.php"); ?>