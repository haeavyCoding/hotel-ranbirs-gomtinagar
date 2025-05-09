<?php include("layouts/secondary-header.php"); ?>

<!-- Page Title -->
<section class="page-title">
  <div class="container">
    <div class="title-outer text-center">
      <h1>Our Rooms</h1>
      <ul class="page-breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Rooms</li>
      </ul>
    </div>
  </div>
</section>

<!-- Rooms Section -->
<section class="rooms-section py-5">
  <div class="container">
    <div class="row">
      <?php
      $rooms = [
        [
          'img' => 'room-1.jpg',
          'title' => 'Deluxe Room',
          'price' => '₹7,000',
          'size' => '350 sq.ft',
          'desc' => 'Elegantly styled with premium furnishings for comfort.'
        ],
        [
          'img' => 'room-2.jpg',
          'title' => 'Executive Room',
          'price' => '₹8,000',
          'size' => '400 sq.ft',
          'desc' => 'Designed for enhanced comfort with premium amenities.'
        ],
        [
          'img' => 'room-3.jpg',
          'title' => 'Luxury Suite',
          'price' => '₹12,000',
          'size' => '600 sq.ft',
          'desc' => 'Spacious living with separate bedroom and lounge areas.'
        ]
      ];

      foreach ($rooms as $room) {
        echo '
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="room-card">
            <div class="room-img">
              <img src="images/resource/'.$room['img'].'" alt="'.$room['title'].'" class="img-fluid">
              <div class="room-price">'.$room['price'].'<span>/night</span></div>
            </div>
            <div class="room-content">
              <h3>'.$room['title'].'</h3>
              <div class="room-size">'.$room['size'].'</div>
              <p>'.$room['desc'].'</p>
              <div class="room-meta">
                <span><i class="fa fa-user"></i> 2 Adults</span>
                <span><i class="fa fa-bed"></i> King Bed</span>
              </div>
              <a href="room-details.html" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- Amenities Section -->
<section class="amenities-section py-5 bg-light">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Room Amenities</h2>
      <p>All our rooms include these premium amenities</p>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <ul class="amenities-list">
          <li><i class="fa fa-wifi"></i> Free WiFi</li>
          <li><i class="fa fa-snowflake-o"></i> Air Conditioning</li>
          <li><i class="fa fa-television"></i> Smart TV</li>
          <li><i class="fa fa-coffee"></i> Tea/Coffee Maker</li>
        </ul>
      </div>
      
      <div class="col-md-4">
        <ul class="amenities-list">
          <li><i class="fa fa-shower"></i> Rain Shower</li>
          <li><i class="fa fa-bath"></i> Premium Toiletries</li>
          <li><i class="fa fa-phone"></i> Direct Dial Phone</li>
          <li><i class="fa fa-lock"></i> In-room Safe</li>
        </ul>
      </div>
      
      <div class="col-md-4">
        <ul class="amenities-list">
          <li><i class="fa fa-bed"></i> Hypnos Mattress</li>
          <li><i class="fa fa-glass"></i> Minibar</li>
          <li><i class="fa fa-newspaper-o"></i> Daily Newspaper</li>
          <li><i class="fa fa-bolt"></i> USB Charging</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Facilities Section -->
<section class="facilities-section py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Hotel Facilities</h2>
    </div>
    
    <div class="row text-center">
      <div class="col-md-3 col-6 mb-4">
        <div class="facility-icon">
          <i class="fa fa-cutlery"></i>
          <h5>Restaurant</h5>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="facility-icon">
          <i class="fa fa-heartbeat"></i>
          <h5>Fitness Center</h5>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="facility-icon">
          <i class="fa fa-car"></i>
          <h5>Valet Parking</h5>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="facility-icon">
          <i class="fa fa-wifi"></i>
          <h5>Free WiFi</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Description Section -->
<section class="description-section py-5 bg-light">
  <div class="container">
    <div class="text-content">
      <h3 class="mb-3">Comfortable Stay Guaranteed</h3>
      <p>
        Our rooms are designed for your complete comfort with premium bedding, modern amenities, 
        and thoughtful services. Let our staff know your preferences and we'll ensure you have 
        a perfect stay.
      </p>
    </div>
  </div>
</section>

<?php include("layouts/footer.php"); ?>

<style>
/* Basic Responsive Styles */
.page-title {
  padding: 80px 0;
  background: #f5f5f5;
  text-align: center;
}

.room-card {
  background: #fff;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}
.room-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.room-img {
  position: relative;
}
.room-img img {
  width: 100%;
  height: 250px;
  object-fit: cover;
}
.room-price {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background: rgba(0,0,0,0.7);
  color: #fff;
  padding: 5px 15px;
  border-radius: 3px;
  font-weight: bold;
}
.room-price span {
  font-size: 14px;
  font-weight: normal;
}
.room-content {
  padding: 20px;
}
.room-content h3 {
  margin-bottom: 5px;
}
.room-size {
  color: #777;
  margin-bottom: 10px;
}
.room-meta {
  margin: 15px 0;
  display: flex;
  justify-content: space-between;
}
.room-meta span {
  color: #555;
}

.amenities-list {
  list-style: none;
  padding: 0;
}
.amenities-list li {
  padding: 8px 0;
  border-bottom: 1px solid #eee;
  display: flex;
  align-items: center;
}
.amenities-list i {
  width: 25px;
  color: #c8a97e;
}

.facility-icon i {
  font-size: 40px;
  color: #c8a97e;
  margin-bottom: 10px;
}

@media (max-width: 767px) {
  .page-title {
    padding: 60px 0;
  }
  .room-img img {
    height: 200px;
  }
}
</style>