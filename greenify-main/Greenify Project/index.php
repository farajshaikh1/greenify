<?php
require_once('config.php');
include_once('session_logout.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Greenify Sustainable Shopping Made Simple</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="index.js"></script>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="jquery-3.6.1.min.js"></script>
    <script src="index.js"></script>
</head>

<body>
    <!-- Header pulled from header.php -->
    <?php
    include_once 'header.php';
    require_once('user_auth.php');
    ?>

    <main>
        <!-- ----------------------------- -->
        <?php
        function card($table, $serial)
        {
            include 'db_connection.php';
            $card = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM $table WHERE serial='$serial';"));
            // $rawtitle = rawurlencode($card['title']); // To avoid errors.

            echo "
            <a href='product-details.php?serial=$serial&table=$table'>
                <div class='card'>
                    <div class='img-container'><img src='{$card['image_path']}' alt=''></div>
                    <p class='brand'>{$card['brand']}</p>
                    <p class='title'>{$card['title']}</p>
                    <span class='price'>RM{$card['price']}</span>
                </div>
            </a>
            ";
        }

        include_once 'carousel.php';
        ?>

        <p class="p1">NEWEST ARRIVALS</p>


        <div class='cards-container'>
            <?php
            card("smart_phones", "1");
            card("smart_phones", "2");
            card("smart_phones", "6");
            card("smart_phones", "8");
            ?>
        </div>
        <!-- ----------------------------- -->

        <div class="ad">
            <div class="ad-img-container">
                <img src="images/repair.jpeg" alt="">
            </div>
            <div class="ad-text-container">
                <p>Certified Refurbished Products</p>
                <p>You can buy our products with confidence, knowing that they are in pristine condition and covered by a two-year warranty.<br><br> Our products are thoroughly inspected, cleaned, and refurbished to factory standards by the original equipment manufacturer or an authorized service provider. The product will come with all of its original or brand-new accessories and be wrapped in new packaging.</p>
            </div>
        </div>

        <div class="ad">
            <div class="ad-text-container">
                <p>E-Waste Collection & Recycling Program</p>
                <p>Greenify has deployed more than 550 E-Bins across Malaysia, dedicated to collecting a wide variety of e-waste, from smartphones to home appliances.<br><br>If a product cannot be refurbished, we recycle and dismantle the products and extract resources to maximize the recycled e-waste. Greenify is committed to waste recycling, reduction, and reutilization.</p>
            </div>
            <div class="ad-img-container">
                <img src="images/e-waste-bins.jpg" alt="">
            </div>
        </div>
    </main>

    <!-- Footer pulled from footer.php -->
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>