<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/stylev1.css"></link>
        
    </head>
    <body> 
        <?php include('../includes/header.php'); ?>
        <main>
        <div class="login-container">
        
        <h2>Welcome Back</h2>
        <form method="post" action="loginForm.php">

        <label>Email</label>
        <input type="email" placeholder="Email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Password" name="current_password" required>
        <br>
        <button type="submit">Submit</button>
        <div class="extra">
        No registered account? <a href="../register/index.php">Register here</a>
        </div>
        </div>
        </main>
        <br>
        <?php include('../includes/footer.php'); ?>
    </body>
</html>