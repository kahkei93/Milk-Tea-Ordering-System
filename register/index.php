<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Register Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/stylev1.css"></link>
         <?php include('../includes/header.php'); ?>
        
    </head>
    <body>
        
        <main>
        <div class="login-container">
        <h2>Register Account</h2>
        <form method="post" action="registerForm.php">
        <label>Name</label>
        <input type="text" name="name">

        <label>Mobile number</label>
        <input type="text" name="mobile" >

        <label>Email</label>
        <input type="email" name="email" >
        <div class="verified">Is verified: </div>

        <label>Address</label>
        <input type="text" name="address">

        <label>Enter password</label>
        <input type="password" name="current_password">

        <label>Confirm password</label>
        <input type="password" name="new_password">

        <button type="submit">Submit</button>
        </div>
        </main>

    </form>
     <?php include('../includes/footer.php'); ?>
    </body>
</html>