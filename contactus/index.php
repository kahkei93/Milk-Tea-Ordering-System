<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="validate.js" defer></script>
    <title>Contact Us</title>
    <link rel="stylesheet" href="../style/stylesheet.css">
    <link rel="stylesheet" href="../style/styleContactUs.css">
</head>

<body>
    <?php include('../includes/header.php'); ?>

    <section class="contact-form">
        <div class="form-container">
            <!-- ✅ Only ONE form -->
            <form class="form-box" action="contact_process.php" method="POST">
                <div class="form-wrapper">
                    <h2 class="form-title">CONTACT US</h2>
                    <p class="form-subtitle">We’d love to hear from you! Here’s how you can reach us.</p>

                    <div class="form-row">
                        <div class="form-col">
                            <label class="input-label">First Name</label>
                            <input class="input" type="text" name="firstName" placeholder="Enter your first name..." required>
                        </div>

                        <div class="form-col">
                            <label class="input-label">Last Name</label>
                            <input class="input" type="text" name="lastName" placeholder="Enter your last name..." required>
                        </div>

                        <div class="form-col">
                            <label class="input-label">Email</label>
                            <input class="input" type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-col">
                            <label class="input-label">Phone Number</label>
                            <input class="input" type="tel" name="phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-col full">
                            <label class="input-label">Message</label>
                            <textarea class="textarea" name="message" placeholder="Write something" required></textarea>
                        </div>
                    </div>

                    <!-- ✅ Make sure this submits the form -->
                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </form>

            <div class="contact-info">
                <p>For inquiries, technical issues, or support, please contact our customer service team.</p>
                <a href="tel:+60123456789" class="phone">+60 12-345 6789</a>
            </div>
        </div>
    </section>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
