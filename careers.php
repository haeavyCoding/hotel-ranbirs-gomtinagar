<?php include('layouts/header.php'); ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Page Title Section -->
<section class="page-title" style="background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1400&q=80'); background-size: cover;">
  <div class="auto-container text-center text-white py-5" data-aos="fade-down">
    <h1 class="title">Careers at Ranbirs</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html" class="text-white">Home</a></li>
      <li>Careers</li>
    </ul>
  </div>
</section>

<!-- Careers Section -->
<section class="pt-80 pb-60 bg-light">
  <div class="auto-container text-center" data-aos="fade-up">
    <div class="sec-title mb-5">
      <h2>Career Opportunities</h2>
      <p class="text-muted">Join our dynamic team and be part of something special.</p>
    </div>

    <!-- Online Image -->
    <img src="https://images.pexels.com/photos/3184325/pexels-photo-3184325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=600&w=1000" 
         alt="Careers at Ranbirs" 
         class="img-fluid mb-4 shadow rounded">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="job-list bg-white p-4 rounded shadow-sm">
          <h5 class="mb-3"><i class="fas fa-briefcase text-primary me-2"></i>We’re hiring soon!</h5>
          <p class="mb-4">We have a number of posts coming up. Please be patient and stay tuned for further announcements.</p>
          <button class="btn btn-secondary" disabled>Apply Now</button>
        </div>

        <div class="mt-4">
          <p class="text-muted">You can also send us your resume in advance.</p>
          <p><strong>Email:</strong> <a href="mailto:hr@hotelranbirs.com">hr@hotelranbirs.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-white pt-80 pb-80">
  <div class="auto-container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <span class="sub-title">CUSTOMERS VIEW</span>
      <h2>What Our Guests Say</h2>
    </div>
    <div class="row justify-content-center">
      <!-- Testimonial 1 -->
      <div class="col-md-5 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="testimonial-box bg-light p-4 shadow-sm rounded d-flex flex-column h-100">
          <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Guest 1" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px;">
          <p class="mb-2"><i class="fas fa-quote-left text-secondary me-2"></i>Best hotel I have seen in Lucknow, staff is very helpful and food is awesome...</p>
          <h6 class="mt-3 mb-0 text-end">– Ramanpreet Chopra</h6>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-5 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="testimonial-box bg-light p-4 shadow-sm rounded d-flex flex-column h-100">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Guest 2" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px;">
          <p class="mb-2"><i class="fas fa-quote-left text-secondary me-2"></i>Beautiful hotel with luxurious room, I enjoyed my stay here at Hotel Ranbirs.</p>
          <h6 class="mt-3 mb-0 text-end">– Ashish Tiwari</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800
  });
</script>

<?php include("layouts/footer.php"); ?>
