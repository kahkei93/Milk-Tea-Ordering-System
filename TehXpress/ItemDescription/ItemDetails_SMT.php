<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TehXpress Item Description Page</title>
        <link rel="stylesheet" href="Itemstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>

    <body>
        <!--Navigation-->
        <?php include('../includes/header.php'); ?>


        <!--Menu-->
        <div class="Back">
            <button id="back"><i class="fa fa-mail-reply"></i></button>
        </div>

        <div class="container">
            <div class="Details">
                <img src="../image.jpg/SMT.jpg" width="200px">
                <p class="MilkTeaName">Strawberry Milk Tea</p>
                <p class="Description">Refreshing and fruity, Strawberry Milk Tea blends the natural sweetness of ripe strawberries with the 
                    richness of black tea and creamy milk. Its sweet aroma and light, berry-infused taste make it a 
                    playful and cheerful drink, perfect for those who prefer a fruity twist on the classic milk tea.
                </p>

                <div class="Recipe">
                    <h3>🍓 Strawberry Milk Tea</h3>
                    <h4>Ingredient</h4>
                    <ul>
                        <li>🍓 3 tbsp strawberry syrup</li>
                        <li>🥛 150ml milk</li>
                        <li>🍵 50ml black tea</li>
                        <li>🧊 Ice cubes</li>
                    </ul>
                    <h4>Instructions:</h4>
                    <ul>
                        <li>1. Brew black tea and let it cool.</li>
                        <li>2. Mix strawberry syrup with milk and tea.</li>
                        <li>3. Add ice and serve chilled.</li>
                    </ul>
                </div>
            </div>

            <div class="selection">
                 <div class="selection-type">
                    <strong>Variation</strong><br>
                    <input type="radio" name="var"value="Regular"> Regular(16 Oz)
                    <span class="price">RM9.5</span><br>
                    <input type="radio" name="var"value="Large"> Large(22 Oz)
                    <span class="price">RM11.5</span><br>
                    <p id="variation-error" class="error-message">⚠ Please select a variation.</p>
                  
                </div>

                <div class="selection-type">
                    <strong>Sugar Level</strong><br>
                    <input type="radio" name="sugar"> No Sugar(0%)
                    <span class="price">Free</span><br>
                    <input type="radio" name="sugar"> Slight Sugar(30%)
                    <span class="price">Free</span><br>
                    <input type="radio" name="sugar"> Half Sugar(50%)
                    <span class="price">Free</span><br>
                    <input type="radio" name="sugar"> Normal Sugar(100%)
                    <span class="price">Free</span><br>
                    <p id="sugar-error" class="error-message">⚠ Please select a sugar level.</p>
                </div>
                    
                

                <div class="selection-type">
                    <strong>Ice Level</strong><br>
                    <input type="radio" name="ice"> Normal Ice (100%)
                        <span class="price">Free</span><br>
                    <input type="radio" name="ice"> Half Ice (50%)
                        <span class="price">Free</span><br>
                    <input type="radio" name="ice"> No Ice (0%)
                        <span class="price">Free</span>
                        <p id="ice-error" class="error-message">⚠ Please select an ice level.</p>
                </div>

                <div class="selection-type">
                    <strong>Toppings</strong><br>
                    <input type="checkbox" class="topping" value="Pearl"> Pearl <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Grass Jelly"> Grass Jelly <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Coconut Jelly"> Coconut Jelly <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Pudding"> Pudding <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Sago"> Sago <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Cookies Crumbs"> Cookies Crumbs <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Chia Seed"> Chia Seed <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Aloe Vera"> Aloe Vera <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Black Diamond"> Black Diamond <span class="price">+RM1.5</span><br>
                    <input type="checkbox" class="topping" value="Red Bean"> Red Bean <span class="price">+RM1.5</span><br>
                </div> 
                
                <div class="quantity">
                    <button id="decrease"><i class="fa fa-minus"></i></button>
                    <input type="text" id="quantity" value="1" readonly>
                    <button id="increase"><i class="fa fa-plus"></i></button>
                    <button class="add-to-cart">Add To Cart</button>
                    <span class="total-price">Total: RM <span id="totalPrice"></span>
                </div>   
            </div>
        </div>
        <?php include('../includes/footer.php'); ?>
        <script>
            const REGULAR_PRICE = 9.50;
            const LARGE_PRICE = 11.50;
            const TOPPING_PRICE = 1.50;

            const quantityInput = document.getElementById("quantity");
            const totalPriceEl = document.getElementById("totalPrice");
            const addToCartBtn = document.querySelector(".add-to-cart");

            // Error messages
            const variationError = document.getElementById("variation-error");
            const sugarError = document.getElementById("sugar-error");
            const iceError = document.getElementById("ice-error");

            // Hide error messages by default
            variationError.style.display = "none";
            sugarError.style.display = "none";
            iceError.style.display = "none";

            // Calculate total price
            function calculateTotal() {
                let price = 0;

                // Get selected variation price
                const selectedVar = document.querySelector("input[name='var']:checked");
                if (selectedVar) {
                    price = selectedVar.value === "Large" ? LARGE_PRICE : REGULAR_PRICE;
                }

                // Add topping prices
                const toppings = document.querySelectorAll(".topping:checked");
                price += toppings.length * TOPPING_PRICE;

                // Multiply by quantity
                const qty = parseInt(quantityInput.value);
                return (price * qty).toFixed(2);
            }

            // Update total price display
            function updateTotal() {
                totalPriceEl.textContent = calculateTotal();
            }

            // Validate all required selections
            function validateSelections() {
                let valid = true;

                // Variation check
                if (!document.querySelector("input[name='var']:checked")) {
                    variationError.style.display = "block";
                    valid = false;
                } else {
                    variationError.style.display = "none";
                }

                // Sugar check
                if (!document.querySelector("input[name='sugar']:checked")) {
                    sugarError.style.display = "block";
                    valid = false;
                } else {
                    sugarError.style.display = "none";
                }

                // Ice check
                if (!document.querySelector("input[name='ice']:checked")) {
                    iceError.style.display = "block";
                    valid = false;
                } else {
                    iceError.style.display = "none";
                }

                return valid;
            }

            // Bind quantity buttons
            document.getElementById("decrease").addEventListener("click", () => {
                let current = parseInt(quantityInput.value);
                if (current > 1) {
                    quantityInput.value = current - 1;
                    updateTotal();
                }
            });

            document.getElementById("increase").addEventListener("click", () => {
                let current = parseInt(quantityInput.value);
                quantityInput.value = current + 1;
                updateTotal();
            });

            // Update total price when variation or toppings change
            document.querySelectorAll("input[name='var'], .topping").forEach(el => {
                el.addEventListener("change", updateTotal);
            });

            // Also hide error messages when user selects something
            document.querySelectorAll("input[name='var']").forEach(el => {
                el.addEventListener("change", () => variationError.style.display = "none");
            });
            document.querySelectorAll("input[name='sugar']").forEach(el => {
                el.addEventListener("change", () => sugarError.style.display = "none");
            });
            document.querySelectorAll("input[name='ice']").forEach(el => {
                el.addEventListener("change", () => iceError.style.display = "none");
            });

            // Add to cart button
            addToCartBtn.addEventListener("click", () => {
                if (!validateSelections()) return;

                const selectedVar = document.querySelector("input[name='var']:checked");
                const qty = parseInt(quantityInput.value);
                const total = calculateTotal();

                const toppings = [];
                document.querySelectorAll(".topping:checked").forEach(t => toppings.push(t.value));
                const itemName = document.querySelector(".MilkTeaName").textContent;

                const item = {
                    name: itemName,
                    variation: selectedVar.value,
                    quantity: qty,
                    toppings: toppings,
                    totalPrice: total
                };

                let cart = JSON.parse(localStorage.getItem("cart")) || [];
                cart.push(item);
                localStorage.setItem("cart", JSON.stringify(cart));

                window.location.href = "../cart.php";
            });

            // Back button
            document.getElementById("back").addEventListener("click", () => {
                window.history.back();
            });

        </script>
    </body>
</html>