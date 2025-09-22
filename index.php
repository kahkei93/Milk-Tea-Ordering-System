<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Milk Tea Shop</title>
    <link rel="stylesheet" href="style/stylesheet.css">
    <?php include('./includes/header.php'); ?>
</head>
<body>
    <?php if (isset($_SESSION['user_name'])): ?>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</p>
    <?php else: ?>
       
    <?php endif; ?>
    <main class="main-content">
    <!-- Your page content here -->
    <div class="tea-item">
        <h3>TehXpress Milk Tea Ordering System</h3>

        <div class="video-container">
            <video autoplay>
                <source src="TehXpress.mp4" type="video/mp4">
            </video>
        </div>
        
        <?php if (isset($_SESSION['user_id'])): ?>
        <a href="menu.php" class="order-btn">Order Now</a>
    <?php else: ?>
        <a href="login/index.php" class="order-btn">Login to Order</a>
    <?php endif; ?>
    
    </div>
    
    <!-- More tea items can be added here -->
</main>

   <?php include('./includes/footer.php'); ?>
</body>
</html>


