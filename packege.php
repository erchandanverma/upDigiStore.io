<!-- Header -->
<?php
include_once "includes/header.php";
?>
<style>
  .bg-dark-blue {
    background-color: #002244;
  }

  .text-color {
    color: #fff;
  }

  .btn-orange {
    background-color: #FF6F00;
    color: #fff;
  }

  .bg-light-orange {
    background-color: #FFA500;
  }
</style>

<!-- main-navbar -->

<?php
include_once "includes/nav.php";
?>

<!-- Header Section -->
<div class="container-fluid text-white py-5">
  <div class="container">
    <h1 class="display-4 text-white">Packages</h1>
  </div>
</div>

<div class="container py-5">
  <div class="row">
    <div>
      <span style="color: #FF6F00;">// Our Digital Media Packages</span>
      <h2>Your answer to everything digital</h2>
      <p>We offer flexible and customizable packages to cater to your unique digital media needs, from content creation
        to strategic brand development. Whether you’re a startup, established business, or individual, we have a
        solution for you.</p>
    </div>
  </div>
</div>


<!-- Package section -->

<section id="packages" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Choose the Right Package for Your Business</h2>
    <p class="text-center mb-5">Whether you're looking to build a new website, enhance your social media presence, or
      run an ad campaign, we offer packages that fit every need and budget.</p>

    <div class="row g-4">

      <!-- Package 1: Basic Digital Presence -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-header text-white bg-dark-blue text-center py-3">
            <h3 class="text-color">Basic Digital Presence</h3>
            <p class="text-color">₹15,000 - ₹30,000</p>
          </div>
          <div class="card-body">
            <p>Get started with a strong digital foundation. Our Basic Digital Presence package is designed for small
              businesses looking to establish themselves online.</p>
            <ul class="list-unstyled">
              <li>✔️ 5-Page Website</li>
              <li>✔️ Basic SEO</li>
              <li>✔️ Google Business Profile Setup</li>
              <li>✔️ Social Media Integration</li>
              <li>✔️ 1-Month Post-launch Support</li>
            </ul>
            <div class="d-grid">
              <a href="https://forms.gle/4cjGax9be9aZKXtB9" class="btn btn-orange" target="_blank">Get Started</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Package 2: Advanced Growth Package -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-header text-white bg-light-orange text-center py-3">
            <h3>Advanced Growth Package</h3>
            <p>₹30,000 - ₹50,000</p>
          </div>
          <div class="card-body">
            <p>For businesses ready to grow their online presence, this package includes everything you need to increase
              visibility and engagement across digital platforms.</p>
            <ul class="list-unstyled">
              <li>✔️ Custom 10-Page Website</li>
              <li>✔️ Advanced SEO</li>
              <li>✔️ Google My Business Optimization</li>
              <li>✔️ Social Media Setup & Strategy</li>
              <li>✔️ Google Analytics Integration</li>
              <li>✔️ 3-Month Support & Maintenance</li>
            </ul>
            <div class="d-grid">
              <a href="https://forms.gle/4cjGax9be9aZKXtB9" class="btn btn-orange" target="_blank">Get Started</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Package 3: Premium Business Accelerator -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-header text-white bg-dark-blue text-center py-3">
            <h3 class="text-color">Premium Business Accelerator</h3>
            <p class="text-color">₹50,000 - 90,000</p>
          </div>
          <div class="card-body">
            <p>Perfect for businesses ready to accelerate their growth with a full suite of digital services, including
              website, social media, and ad campaigns.</p>
            <ul class="list-unstyled">
              <li>✔️ Custom 15+ Page Website</li>
              <li>✔️ Full SEO Audit & Strategy</li>
              <li>✔️ Google My Business Management</li>
              <li>✔️ Social Media Management</li>
              <li>✔️ Ads Campaign Setup & Management</li>
              <li>✔️ Video Editing & Graphics</li>
              <li>✔️ 6-Month Support & Marketing Consultation</li>
            </ul>
            <div class="d-grid">
              <a href="https://forms.gle/4cjGax9be9aZKXtB9" class="btn btn-orange" target="_blank">Get Started</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ section -->

<section id="faq" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item mb-3">
        <h3 class="accordion-header" id="faqHeading1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
            How long does it take to build a website?
          </button>
        </h3>
        <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The time varies depending on the complexity of the project. On average, a basic website takes 3-4 weeks to
            complete, while advanced and premium projects may take 6-8 weeks.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item mb-3">
        <h3 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
            What if I need more than 5 pages in the Basic Package?
          </button>
        </h3>
        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            You can easily add extra pages for ₹5,000 per page. Just let us know your requirements.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item mb-3">
        <h3 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
            What is included in post-launch support?
          </button>
        </h3>
        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Our support includes basic website updates, minor content changes, and troubleshooting for up to 3-6 months,
            depending on the package.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item mb-3">
        <h3 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
            How do ad campaigns work?
          </button>
        </h3>
        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We set up and optimize campaigns on platforms like Google and Facebook. You provide the budget, and we
            create the ads, monitor performance, and make adjustments to ensure you're getting the best results.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item mb-3">
        <h3 class="accordion-header" id="faqHeading5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
            Do you provide custom solutions?
          </button>
        </h3>
        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Absolutely! If our packages don’t exactly meet your needs, we’re happy to create a custom package tailored
            to your business.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- Why Choose Us Section -->
<section class="py-5 unique-why-choose-us">
      <div class="container text-center">
        <h2 class="header-title unique-header-title">
          Why Partner with UpDigiStore?
        </h2>
        <p class="lead unique-description">
          Our expertise and passion for digital innovation set us apart. Here’s
          why our clients trust us.
        </p>
        <div class="row mt-4">
          <div class="col-md-3 mb-4">
            <div class="card shadow border-0 hover-effect unique-card">
              <div class="card-body">
                <div class="service-icon mb-3 unique-icon">
                  <i class="fas fa-user-tie fa-3x"></i>
                  <!-- Experienced Team Icon -->
                </div>
                <h5 class="card-title unique-card-title">Experienced Team</h5>
                <p class="card-text unique-card-text">
                  Over 15 years of combined experience.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card shadow border-0 hover-effect unique-card">
              <div class="card-body">
                <div class="service-icon mb-3 unique-icon">
                  <i class="fas fa-cogs fa-3x"></i>
                  <!-- Tailored Solutions Icon -->
                </div>
                <h5 class="card-title unique-card-title">Tailored Solutions</h5>
                <p class="card-text unique-card-text">
                  Custom strategies for your specific needs.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card shadow border-0 hover-effect unique-card">
              <div class="card-body">
                <div class="service-icon mb-3 unique-icon">
                  <i class="fas fa-chart-line fa-3x"></i>
                  <!-- Data-Driven Icon -->
                </div>
                <h5 class="card-title unique-card-title">Data-Driven</h5>
                <p class="card-text unique-card-text">
                  We use data and analytics to ensure optimal performance.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card shadow border-0 hover-effect unique-card">
              <div class="card-body">
                <div class="service-icon mb-3 unique-icon">
                  <i class="fas fa-headset fa-3x"></i>
                  <!-- Support Icon -->
                </div>
                <h5 class="card-title unique-card-title">Support</h5>
                <p class="card-text unique-card-text">
                  Ongoing support to help you grow.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-center"><a href="contact" class="btn btn-primary mr-3">Contact Us</a>
      </div>
    </section>
<!-- footer -->
<?php
include_once "includes/footer.php";
?>