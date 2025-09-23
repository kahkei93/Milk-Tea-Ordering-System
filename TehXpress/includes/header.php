<link rel="stylesheet" href="/TehXpress/style/stylesheet.css">

<nav class="main-nav">
    <div class="nav-container">
        <h1 class="logo">TehXpress</h1>
        <ul class="nav-menu">
            <li><a href="/TehXpress/index.php">Home</a></li>
            <li><a href="/TehXpress/menu.php">Menu</a></li>
            <li><a href="/TehXpress/cart.php">Cart</a></li>
            <li><a href="/TehXpress/contactus/index.php">Contact Us</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="#" onclick="openLogoutModal()">Logout</a></li>
            <?php else: ?>
                <li><a href="/TehXpress/login/index.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<!--  Logout Confirmation Modal -->
<div id="logoutModal" class="modal">
    <div class="modal-content">
        <h3>Are you sure you want to log out?</h3>
        <div class="modal-buttons">
            <button class="btn-confirm" onclick="confirmLogout()">Yes, Logout</button>
            <button class="btn-cancel" onclick="closeLogoutModal()">Cancel</button>
        </div>
    </div>
</div>

<script>
function openLogoutModal() {
    document.getElementById("logoutModal").style.display = "flex";
}
function closeLogoutModal() {
    document.getElementById("logoutModal").style.display = "none";
}
function confirmLogout() {
    window.location.href = "/TehXpress/logout.php";
}
</script>