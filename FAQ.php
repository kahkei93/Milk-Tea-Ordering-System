<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TehXpress | FAQ</title>
    <link rel="stylesheet" href="/TehXpress/style/faqstylesheet.css">
</head>
<body>
<?php include('./includes/header.php'); ?>
    <div class="faq-container">
        <h1>Frequently Asked Questions</h1>

        <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Are your milk tea lactose intolerant friendly?</span>
            </div>

            <div class="hidden">
              <p>All milk tea are not lactose free.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>How long can you leave your milk tea out?</span>
            </div>

            <div class="hidden">
              <p>Just 3 hours</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Where is your shop located at</span>
            </div>

            <div class="hidden">
              <p>Mysterious place that also born magic.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>How do I place an order?</span>
            </div>

            <div class="hidden">
              <p>Browse our menu, select your drink, 
                customize sugar, ice, and toppings, then click “Add to Cart”. 
                Once done, proceed to checkout.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Can I customize my drink? </span>
            </div>

            <div class="hidden">
              <p>Yes! You can adjust sugar level, ice level, 
                and add toppings like pearls, grass jelly, pudding, 
                and more before adding the drink to your cart. </p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Do you have vegan or lactose-free options?</span>
            </div>

            <div class="hidden">
              <p>Yes! We offer soy milk, oat milk, 
                and almond milk tea for customers who 
                prefer dairy-free options.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span> Can I order multiple drinks at once?</span>
            </div>

            <div class="hidden">
              <p>Absolutely. You can add as many items as 
                you want to your cart and 
                check out together. </p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>What sizes are available?</span>
            </div>

            <div class="hidden">
              <p>Most drinks come in two sizes:</p>
                <ul>
                  <li>Regular (16oz)</li>
                  <li>Large (22oz)</li>
                </ul>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Is my payment secure?</span>
            </div>

            <div class="hidden">
              <p>Yes, all transactions are encrypted and processed 
                through secure payment gateways to ensure your safety.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span> Can I change my payment method after placing an order?</span>
            </div>

            <div class="hidden">
              <p>Unfortunately, no. Once an order is placed, the selected payment method cannot be changed.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>My payment was successful, but I didn’t receive an order confirmation. What should I do?</span>
            </div>

            <div class="hidden">
              <p>Please check your spam folder first. If you still don’t see it, contact our support team with your payment receipt.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>How long does delivery take?</span>
            </div>

            <div class="hidden">
              <p>Typically 15–30 minutes, depending on your location and order size.</p>
            </div>
            <hr/><div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Do you charge for delivery?</span>
            </div>

            <div class="hidden">
              <p>Delivery fees vary based on your distance. You can view the delivery cost during checkout.</p>
            </div>
            <hr/>

            <div class="toggle-header" onclick="toggleSection(this)">
              <span class="arrow">></span>
              <span>Can I change my payment method after placing an order?</span>
            </div>

            <div class="hidden">
              <p>Unfortunately, no. Once an order is placed, the selected payment method cannot be changed.</p>
            </div>
            <hr/>

    </div>

    <script>
        function toggleSection(element) {
            const arrow = element.querySelector(".arrow");
            const answer = element.nextElementSibling;

            // Toggle visibility
            if (answer.style.display === "block") {
                answer.style.display = "none";
                arrow.classList.remove("rotate");
            } else {
                answer.style.display = "block";
                arrow.classList.add("rotate");
            }
        }
    </script>
<?php include('./includes/footer.php'); ?>
</body>
</html>
