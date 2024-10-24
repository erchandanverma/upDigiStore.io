    <!-- Header -->
    <?php 
include_once "includes/header.php";
?>
    <!-- main-navbar -->
    <?php 
include_once "includes/nav.php";
?>

    <!-- Header Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <h1 class="display-4 text-white">Contact</h1>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="container py-5">
        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info p-5">
                <span style="color: #FF6F00;">// Contact Details</span>
                <h3>Contact Us</h3>
                <p>Give us a call or drop by anytime; we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contact@updigistore.com">contact@updigistore.com</a></p>
                <p><i class="fas fa-phone"></i>Phone: <a href="tel:+919918443373">+91 99184 43373</a></p>
                <p><i class="fas fa-map-marker-alt"></i>Address: <a href="https://maps.app.goo.gl/YdKWQohZb7EmASBm7">Predulive Labs, Plot No. 3B, Kapeesh Vihar Colony, Uattardhona, near Tiwariganj Chouraha, Lucknow, Uttar Pradesh 226010</a></p>
                
                <!-- Social Media Links -->
                <div class="social-icons">
                    <a href="https://www.facebook.com/predulive/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/predulive/reels/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/predulive-edutech-foundation/posts/?feedView=all"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Form Section -->
            <div class="form-section">
                <h2>Ready to Get Started?</h2>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form id="contactForm" method="POST">
    <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
    </div>
    <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone *</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required>
    </div>
    <div class="form-group">
        <label for="subject">Subject *</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
            </div>
        </div>
    </div>

    <!-- Google Map Section -->
    <div class="container-fluid py-5">
        <div class="map-section">
            <iframe src="https://maps.google.com/maps?q=26.8467,80.9462&z=15&output=embed" allowfullscreen></iframe>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


        <!-- Footer -->
        <?php include_once "includes/footer.php" ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get form data
            var formData = $(this).serialize();

            // Send form data using AJAX
            $.ajax({
                type: "POST",
                url: "db/insert_data.php", // The PHP file handling the insertion
                data: formData,
                success: function(response) {
                    // Show success message in alert
                    alert("Data inserted successfully!");
                },
                error: function() {
                    // Show error message in alert
                    alert("Error occurred while inserting data.");
                }
            });
        });
    });
</script>
