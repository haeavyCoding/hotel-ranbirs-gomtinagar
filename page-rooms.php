<?php include("layouts/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rooms at Hotel Ranbirs – Deluxe, Executive & Budget Stays</title>
  <meta name="description" content="Stay in comfort at Hotel Ranbirs, Gomti Nagar. Book deluxe, executive, and budget rooms with modern amenities.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<!-- Page Title -->
<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
  <div class="auto-container">
    <div class="title-outer text-center" data-aos="fade-down">
      <h1 class="title">Comfort & Elegance in Every Room</h1>
      <ul class="page-breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Rooms</li>
      </ul>
    </div>
  </div>
</section>

<!-- Rooms Section -->
<section class="rooms-section pb-100 pt-70">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Room Categories at Hotel Ranbirs</h2>
    </div>
    <div class="row">
      <!-- Room 1 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images/resource/room-1.jpg" alt="Deluxe Room"></figure>
          </div>
          <div class="content-box">
            <h6 class="title"><a href="room-details.html">Deluxe Room</a></h6>
            <span class="price">₹7,000 / NIGHT</span>
            <p>Elegantly styled and spacious, the Deluxe Room features modern furnishings, plush bedding, and all essential comforts for both business and leisure travelers.</p>
          </div>
          <div class="box-caption">
            <a href="room-details.html" class="book-btn">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi"></i></a></li>
              <li><a href="#"><i class="fa fa-bed"></i></a></li>
              <li><a href="#"><i class="fa fa-bath"></i></a></li>
              <li><a href="#"><i class="fa fa-shower"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Room 2 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images/resource/room-2.jpg" alt="Executive Room"></figure>
          </div>
          <div class="content-box">
            <h6 class="title"><a href="room-details.html">Executive Room</a></h6>
            <span class="price">₹8,000 / NIGHT</span>
            <p>Designed for luxury and convenience, the Executive Room features a workstation, complimentary high-speed internet, and enhanced in-room amenities.</p>
          </div>
          <div class="box-caption">
            <a href="room-details.html" class="book-btn">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi"></i></a></li>
              <li><a href="#"><i class="fa fa-bed"></i></a></li>
              <li><a href="#"><i class="fa fa-bath"></i></a></li>
              <li><a href="#"><i class="fa fa-shower"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Room 3 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images/resource/room-3.jpg" alt="Suite Room"></figure>
          </div>
          <div class="content-box">
            <h6 class="title"><a href="room-details.html">The Suite</a></h6>
            <span class="price">₹12,000 / NIGHT</span>
            <p>The luxurious Suite offers a separate living area, king-size bed, premium bath essentials, and a beautiful city view to elevate your stay experience.</p>
          </div>
          <div class="box-caption">
            <a href="room-details.html" class="book-btn">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi"></i></a></li>
              <li><a href="#"><i class="fa fa-bed"></i></a></li>
              <li><a href="#"><i class="fa fa-bath"></i></a></li>
              <li><a href="#"><i class="fa fa-shower"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Room 4 -->
      <div class="room-block col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image-2 overlay-anim"><img src="images/resource/room-4.jpg" alt="Budget Room"></figure>
          </div>
          <div class="content-box">
            <h6 class="title"><a href="room-details.html">Budget Room</a></h6>
            <span class="price">₹5,000 / NIGHT</span>
            <p>Affordable yet comfortable, the Budget Room is ideal for short stays. Enjoy a restful bed, clean en-suite, and modern essentials without compromise.</p>
          </div>
          <div class="box-caption">
            <a href="room-details.html" class="book-btn">Book Now</a>
            <ul class="bx-links">
              <li><a href="#"><i class="fa fa-wifi"></i></a></li>
              <li><a href="#"><i class="fa fa-bed"></i></a></li>
              <li><a href="#"><i class="fa fa-bath"></i></a></li>
              <li><a href="#"><i class="fa fa-shower"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Styles (Add to your <head> or main CSS) -->
<style>

  .sec-title h2 {
    color: #b34700; /* warning-orange */
    font-weight: 700;
  }
  .amenities-list {
    list-style: none;
    padding-left: 0;
  }
  .amenities-list li {
    padding: 10px 0;
    font-size: 16px;
    color: #333;
    display: flex;
    align-items: center;
  }
  .amenities-list li i {
    color: #ff8800;
    margin-right: 10px;
    font-size: 18px;
  }
  .facility-block .inner-box {
    background: #fff3e6;
    border-radius: 12px;
    padding: 25px 15px;
    transition: 0.3s ease;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
  }
  .facility-block .inner-box:hover {
    background-color: #ffe0cc;
    transform: translateY(-5px);
  }
  .facility-block h4 {
    margin-top: 10px;
    color: #b34700;
  }
  .facility-block i {
    color: #ff6600;
  }
  .description-section p {
    font-size: 18px;
    line-height: 1.7;
    color: #444;
    text-align: center;
  }
</style>

<!-- Amenities Section -->
<section class="amenities-section pb-70 pt-70" style="background-color: #fff9f4;">
  <div class="auto-container">
    <div class="sec-title text-center mb-4" data-aos="fade-down">
      <h2>In-Room Amenities</h2>
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-4 mb-4">
        <ul class="amenities-list">
          <li><i class="fa fa-newspaper-o"></i> Free newspaper</li>
          <li><i class="fa fa-snowflake-o"></i> Air conditioning</li>
          <li><i class="fa fa-phone"></i> Phone</li>
          <li><i class="fa fa-coffee"></i> Coffee/tea maker</li>
          <li><i class="fa fa-glass"></i> Minibar</li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <ul class="amenities-list">
          <li><i class="fa fa-cut"></i> Hair dryer</li>
          <li><i class="fa fa-shower"></i> Shower only</li>
          <li><i class="fa fa-bed"></i> Sofa bed</li>
          <li><i class="fa fa-refresh"></i> Daily housekeeping</li>
          <li><i class="fa fa-user"></i> Private bathroom</li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <ul class="amenities-list">
          <li><i class="fa fa-leaf"></i> Free toiletries</li>
          <li><i class="fa fa-wifi"></i> Free WiFi</li>
          <li><i class="fa fa-television"></i> Flat-panel TV</li>
          <li><i class="fa fa-archive"></i> Iron/ironing board</li>
          <li><i class="fa fa-lock"></i> In-room safe</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Facilities Section -->
<section class="facilities-section pb-70 pt-70" style="background-color: #fff4e6;">
  <div class="auto-container">
    <div class="sec-title text-center mb-4" data-aos="fade-down">
      <h2>In-Hotel Facilities</h2>
    </div>
    <div class="row">
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in">
        <div class="inner-box text-center">
          <div class="icon-box"><i class="fa fa-wifi fa-2x mb-2"></i></div>
          <h4>Wi-Fi Connectivity</h4>
        </div>
      </div>
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="inner-box text-center">
          <div class="icon-box"><i class="fa fa-cutlery fa-2x mb-2"></i></div>
          <h4>Restaurant</h4>
        </div>
      </div>
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="inner-box text-center">
          <div class="icon-box"><i class="fa fa-heartbeat fa-2x mb-2"></i></div>
          <h4>Gymnasium</h4>
        </div>
      </div>
      <div class="facility-block col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="inner-box text-center">
          <div class="icon-box"><i class="fa fa-glass fa-2x mb-2"></i></div>
          <h4>Open Bar</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Description Section -->
<section class="description-section pt-50 pb-70" style="background-color: #fffaf3;">
  <div class="auto-container">
    <div class="text-content" data-aos="fade-up">
      <p>
        Hotel Ranbirs offers well-appointed Deluxe, Executive, Suite, and Budget Rooms for every kind of traveler. Whether you seek affordable comfort or lavish indulgence, each room features elegant interiors, top-notch amenities, and thoughtful touches to make your stay memorable. Enjoy personalized service, modern bathrooms, in-room dining, and a peaceful night’s sleep in the heart of Gomti Nagar, Lucknow.
      </p>
    </div>
  </div>
</section>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 1000,
    easing: 'ease-in-out',
  });
</script>

<?php include("layouts/footer.php"); ?>
