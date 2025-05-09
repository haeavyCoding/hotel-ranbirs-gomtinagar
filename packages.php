<?php include('layouts/header.php'); ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Custom CSS -->
<style>
  .package-card {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
  }

  .package-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  }

  .package-header {
    padding: 20px;
    color: #fff;
  }

  .package-body {
    padding: 25px;
    text-align: center;
  }

  .package-body h2 {
    font-size: 28px;
    color: #333;
  }

  .package-list {
    padding: 0;
    list-style: none;
    margin: 20px 0;
  }

  .package-list li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    font-size: 16px;
    color: #555;
  }

  .package-footer {
    padding: 20px;
    text-align: center;
    background-color: #f8f9fa;
  }

  .package-footer .btn {
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 500;
  }
</style>

<!-- Page Title Section -->
<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
  <div class="auto-container text-center" data-aos="fade-down">
    <h1 class="title">Careers at Ranbirs</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Careers</li>
    </ul>
  </div>
</section>

<!-- Packages Section -->
<section class="pt-80 pb-80 bg-light">
  <div class="container">
    <div class="sec-title text-center mb-5" data-aos="fade-up">
      <h2>Our Event Packages</h2>
      <p class="text-muted">Explore our diverse offerings tailored to every occasion.</p>
    </div>
    <div class="row">

      <?php
      // Example array for easier generation – replace with your own logic if needed
      $packages = [
        ['title' => 'Kitty Package', 'subtitle' => 'Basic', 'price' => '₹ 650', 'color' => 'info', 'delay' => 100],
        ['title' => 'Conference Package', 'subtitle' => 'Vegetarian', 'price' => '₹ 750', 'color' => 'success', 'delay' => 200],
        ['title' => 'Conference Package', 'subtitle' => 'Mixed Menu', 'price' => '₹ 850', 'color' => 'primary', 'delay' => 300],
        ['title' => 'Banquet Packages', 'subtitle' => 'Vegetarian', 'price' => 'Silver: ₹ 1400<br>Gold: ₹ 1600<br>Platinum: ₹ 1800', 'color' => 'success', 'delay' => 100],
        ['title' => 'Banquet Packages', 'subtitle' => 'Non-Vegetarian', 'price' => 'Silver: ₹ 1600<br>Gold: ₹ 1800<br>Platinum: ₹ 1900', 'color' => 'danger', 'delay' => 200],
        ['title' => 'Wedding Packages', 'subtitle' => 'Vegetarian', 'price' => '₹ 2000<br><small>Min. 250 Guests</small>', 'color' => 'success', 'delay' => 100],
        ['title' => 'Wedding Packages', 'subtitle' => 'Non-Vegetarian', 'price' => '₹ 2200<br><small>Min. 250 Guests</small>', 'color' => 'primary', 'delay' => 200],
      ];

      foreach ($packages as $package) {
        echo '
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="' . $package['delay'] . '">
          <div class="package-card">
            <div class="package-header bg-' . $package['color'] . ' text-center">
              <h4 class="mb-1"><i class="bi bi-gift-fill me-2"></i>' . $package['title'] . '</h4>
              <small>' . $package['subtitle'] . '</small>
            </div>
            <div class="package-body">
              <h2>' . $package['price'] . '</h2>
              <ul class="package-list">
                <li><i class="bi bi-check-circle text-success me-2"></i>Taxes included or applicable</li>
              </ul>
            </div>
            <div class="package-footer">
              <a class="btn btn-outline-' . $package['color'] . '" href="/welcome/explore/contact">Contact Now</a>
            </div>
          </div>
        </div>';
      }
      ?>

    </div>
  </div>
</section>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<?php include("layouts/footer.php"); ?>
