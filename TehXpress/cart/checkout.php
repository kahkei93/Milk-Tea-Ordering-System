<?php
// Start session for login check
session_start();

// Enable debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>
            alert('⚠ You must log in first before making a payment!');
            window.location.href = '../login/index.php';
          </script>";
    exit();
}


// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "user";  // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// ✅ Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $customer_name = trim($_POST['cardName']);
    $order_items   = trim($_POST['orderItems']);
    $total_amount  = trim($_POST['totalAmount']);
    $user_id       = $_SESSION['user_id']; // Get logged-in user ID

    // ✅ Validation
    if (empty($customer_name) || empty($order_items) || empty($total_amount)) {
        die("⚠ Missing order information!");
    }

    // ✅ Insert order into database
    $sql = "INSERT INTO orders (user_id, customer_name, order_items, total_amount) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("issd", $user_id, $customer_name, $order_items, $total_amount);

    if ($stmt->execute()) {
        echo "<script>
                localStorage.removeItem('cart');
                alert('✅ Payment Successful! Redirecting to confirmation...');
                window.location.href = 'ordersuccessful.php';
              </script>";
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="../style/cartstyle.css">
</head>
<body>
  <?php include('../includes/header.php'); ?>

  <div class="checkout-container">
    <h2>💳 Checkout</h2>

     <!-- Order details table -->
    <h3>Your Order</h3>
    <table id="checkoutTable">
      <thead>
        <tr>
          <th>Drink</th>
          <th>Variation</th>
          <th>Toppings</th>
          <th>Qty</th>
          <th>Price (RM)</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>

    <h3>Total: RM <span id="totalAmount">0.00</span></h3>

     <!-- Payment form -->
    <h3>Payment Information</h3>
    <form id="paymentForm" class="payment-form" action="checkout.php" method="POST">
       <!-- First row: Card number -->
      <div class="form-row">
        <input type="text" id="cardNumber" maxlength="19" placeholder="Card Number" required>
      </div>

       <!-- Second row: Expiry + CVV -->
      <div class="form-row">
        <input type="text" id="cardExpiry" maxlength="5" placeholder="MM/YY" required>
        <input type="text" id="cardCVV" maxlength="3" placeholder="CVV" required>
      </div>

      <!-- Third row: Cardholder name -->
      <div class="form-row">
        <input type="text" id="cardName" name="cardName" placeholder="Cardholder Name" required>
      </div>

      <!-- Hidden inputs for cart data -->
      <input type="hidden" name="orderItems" id="orderItems">
      <input type="hidden" name="totalAmount" id="totalAmountInput">

      <button type="submit">Confirm Payment</button>
    </form>
  </div>
  <?php include('../includes/footer.php'); ?>

  <script>
    // Load cart details
    function loadCheckout() {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      const tbody = document.querySelector("#checkoutTable tbody");
      const totalAmountEl = document.getElementById("totalAmount");
      const totalInput = document.getElementById("totalAmountInput");
      const orderItemsInput = document.getElementById("orderItems");

      tbody.innerHTML = "";
      let grandTotal = 0;

      cart.forEach(item => {
        let row = document.createElement("tr");
        row.innerHTML = `
          <td>${item.name}</td>
          <td>${item.variation}</td>
          <td>${item.toppings.length ? item.toppings.join(", ") : "-"}</td>
          <td>${item.quantity}</td>
          <td>${parseFloat(item.totalPrice).toFixed(2)}</td>
        `;
        tbody.appendChild(row);
        grandTotal += parseFloat(item.totalPrice);
      });

      // Save totals & cart data into hidden inputs for PHP
      totalAmountEl.textContent = grandTotal.toFixed(2);
      totalInput.value = grandTotal.toFixed(2);
      orderItemsInput.value = JSON.stringify(cart);
    }

    // Auto format card number (space every 4 digits)
    document.getElementById("cardNumber").addEventListener("input", function(e){
      let value = e.target.value.replace(/\D/g, "");
      value = value.substring(0,16);
      let formatted = value.match(/.{1,4}/g);
      e.target.value = formatted ? formatted.join(" ") : "";
    });

    // Auto format expiry MM/YY
    document.getElementById("cardExpiry").addEventListener("input", function(e){
      let value = e.target.value.replace(/\D/g, "");
      value = value.substring(0,4);
      if(value.length > 2){
        value = value.substring(0,2) + "/" + value.substring(2);
      }
      e.target.value = value;
    });

    // Restrict CVV input to 3 digits only
    document.getElementById("cardCVV").addEventListener("input", function(e){
      e.target.value = e.target.value.replace(/\D/g, "").substring(0,3);
    });

    window.onload = loadCheckout;
  </script>
</body>
</html>
