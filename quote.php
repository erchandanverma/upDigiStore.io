
    <!-- Header -->
    <?php 
include_once "includes/header.php";
?>
    <!-- style -->
<style>
    /* Section background */
#get-a-quote {
  background-color: #F5F5F5;
}

/* Heading */
#get-a-quote h2 {
  font-family: 'Montserrat', sans-serif;
  color: #002244;
  font-weight: 700;
}

/* Description */
#get-a-quote .description {
  font-family: 'Roboto', sans-serif;
  color: #666;
  font-size: 18px;
}

/* Form fields styling */
.quote-form .form-control, .quote-form .form-select {
  border-radius: 5px;
  padding: 12px;
  font-family: 'Roboto', sans-serif;
  border: 1px solid #ccc;
}

/* Form field focus effect */
.quote-form .form-control:focus, .quote-form .form-select:focus {
  border-color: #FF6F00;
  box-shadow: none;
}

/* Button styling */
.btn-orange {
  background-color: #FF6F00;
  color: #fff;
  border-radius: 5px;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: background-color 0.3s ease;
}

/* Button hover effect */
.btn-orange:hover {
  background-color: #e65c00;
}

</style>
    <!-- main-navbar -->
    <?php 
include_once "includes/nav.php";
?>
<section id="get-a-quote" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Get a Quote</h2>
    <p class="text-center mb-5 description">Tell us about your project, and we'll get back to you with a tailored solution.</p>
    
    <form action="#" method="post" class="quote-form">
      <div class="row g-3">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Name" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="col-md-6">
          <input type="tel" class="form-control" placeholder="Phone" required>
        </div>
        <div class="col-md-6">
          <select class="form-select" required>
            <option value="" disabled selected>Project Type</option>
            <option value="web-development">Web Development</option>
            <option value="social-media">Social Media</option>
            <option value="video-marketing">Video Marketing</option>
          </select>
        </div>
        <div class="col-md-6">
          <select class="form-select" required>
            <option value="" disabled selected>Budget Range</option>
            <option value="less-than-1000">&lt;$1,000</option>
            <option value="1000-5000">$1,000 - $5,000</option>
            <option value="5000-more">$5,000+</option>
            <option value="custom">Custom</option>
          </select>
        </div>
        <div class="col-md-12">
          <textarea class="form-control" rows="5" placeholder="Describe your project" required></textarea>
        </div>
      </div>
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-orange px-5 py-2">Request a Quote</button>
      </div>
    </form>
  </div>
</section>


        <!-- Footer -->
        <?php include_once "includes/footer.php" ?>
