<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify Sustainable Shopping Made Simple</title>
    <link rel="stylesheet" href="styles.css" />
    <!-- <script src="index.js"></script> -->
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header pulled from header.php -->
    <?php
    include_once 'header.php';
    require_once('user_auth.php');
    ?>

    <div class="banner">
        <img src="images/banner.jpg" alt="">
    </div>

    <!-- Footer pulled from footer.php -->
    <?php
    include_once 'footer.php';
    include_once('session_logout.php');
    ?>
</body>

</html>