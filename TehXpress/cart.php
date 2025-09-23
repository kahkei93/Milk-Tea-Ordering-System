<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Cart</title>
  <link rel="stylesheet" href="style/cartstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <?php include('includes/header.php'); ?>

  <div class="cart-container">
    <h2>🛒 Your Cart</h2>
    <table id="cartTable">
      <thead>
        <tr>
          <th>Drink</th>
          <th>Variation</th>
          <th>Toppings</th>
          <th>Qty</th>
          <th>Price (RM)</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- JS insert data -->
      </tbody>
    </table>

    <div class="cart-summary">
      <h3>Total: RM <span id="grandTotal">0.00</span></h3>
      <button onclick="window.location.href='menu.php'">Continue Shopping</button>
      <button id="checkoutBtn">Checkout</button>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>

  <script>
    function loadCart() {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      const tbody = document.querySelector("#cartTable tbody");
      const grandTotalEl = document.getElementById("grandTotal");
      tbody.innerHTML = "";
      let grandTotal = 0;

      cart.forEach((item, index) => {
        let row = document.createElement("tr");

        // product total price
        let price = parseFloat(item.totalPrice);
        grandTotal += price;

        row.innerHTML = `
          <td>${item.name}</td>
          <td>${item.variation}</td>
          <td>${item.toppings.length ? item.toppings.join(", ") : "-"}</td>
          <td>
            <button class="qty-btn" onclick="changeQty(${index}, -1)">-</button>
            <span class="qty">${item.quantity}</span>
            <button class="qty-btn" onclick="changeQty(${index}, 1)">+</button>
          </td>
          <td>${price.toFixed(2)}</td>
          <td><button onclick="removeItem(${index})"><i class="fa fa-trash"></i></button></td>
        `;

        tbody.appendChild(row);
      });

      grandTotalEl.textContent = grandTotal.toFixed(2);
    }

    function changeQty(index, delta) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      if (cart[index]) {
        cart[index].quantity += delta;
        if (cart[index].quantity < 1) cart[index].quantity = 1;

        // recalculate total price
        let basePrice = cart[index].variation === "Large" ? 11.5 : 9.5;
        let toppingCount = cart[index].toppings.length;
        let unitPrice = basePrice + toppingCount * 1.5;
        cart[index].totalPrice = (unitPrice * cart[index].quantity).toFixed(2);

        localStorage.setItem("cart", JSON.stringify(cart));
        loadCart();
      }
    }

    function removeItem(index) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      loadCart();
    }

    // page load
    window.onload = () => {
      loadCart();

      document.getElementById("checkoutBtn").addEventListener("click", () => {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        if (cart.length === 0) {
          alert("Your cart is empty!");
          return;
        }
        window.location.href = "./cart/checkout.php";
      });
    };
  </script>
</body>
</html>
