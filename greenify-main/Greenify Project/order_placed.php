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
</head>

<body>
    <!-- Header pulled from header.php -->
    <?php
    include_once 'header.php';
    require_once('user_auth.php');
    ?>

    <p id="order_placed"><i class="fa-regular fa-square-check"></i> Your order has been successfully placed!</p>

    <!-- Footer pulled from footer.php -->
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>