<?php
session_start();
require_once('config.php');
?>

<div id="message">
    FREE DELIVERY on all orders in Malaysia over RM250!
</div>

<div id="bar1">
    <div class="social-container">
        <a href="contact.php"><button id="cnt-button"><i class="fa-brands fa-wpforms"></i> Contact Us </button></a>
    </div>

    <div class="logo-container">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
    </div>

    <div class="actions-container">
        <?php
        if (!isset($_SESSION['user_role_id'])) { ?>
            <a href="login.php" class="account_btn"><i class="fa-regular fa-circle-user"></i>Login / Sign Up</a>
        <?php
        } else { ?>
            <a href="logout.php" class="account_btn"><i class="fas fa-sign-out"></i>Logout</a>
        <?php
        } ?>
        <div class="vr"></div>
        <a href="cart.php" class='cart-a'>
            <img src="images/cart.svg" alt="">
            <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                if ($count > 0) {
                    echo"<span class='cart-count'>$count</span>";
                }
            }
            ?>
        </a>
    </div>
</div>

<div id="bar2">
    <?php
    //only visible to admin
    if (isset($_SESSION['user_role_id']) && $_SESSION['user_role_id'] == 1) { ?>
        <a href="admin.php" style="color: dodgerblue;">Admin Tools</a>
    <?php
    }
    ?>
    <a href="smartphones.php">Smart Phones</a>
    <a href="gadgets.php">Gadgets</a>
    <a href="consoles.php">Consoles</a>
    <a href="home_appliances.php">Home Appliances</a>
    <a href="about.php">Our Mission</a>
</div>