<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="jquery-3.6.1.min.js"></script>
    <script src="index.js"></script>
</head>

<body>
    <?php
    include_once('header.php');
    require_once('user_auth.php');
    ?>

    <div class='whole'>
        <div class='products'>
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {

                    // removing 'RM' & converting to float
                    $price = number_format((substr($value['price'], 2)), 2, '.', '');
                    $total = number_format($total + $price, 2, '.', '');
                    $imagepath = $value['imagepath'];
                    $brand = $value['brand'];
                    $title = $value['title'];

                    echo "
                    <div class='cart_line'>
                        <div class='img_part'>
                            <img src='$imagepath'>
                        </div>
                        <div class='text_part'>
                            <p class='brand'>$brand</p>
                            <h1 class='title'>$title</h1>
                        </div>
                        <div class='price_part'>
                            <p class='price'>RM$price</p>
                            <form action='' method='POST'>
                                <button type='button' name='remove_item' id='remove_item'><i class='fa-solid fa-trash-can'></i> Remove</button>
                            </form>
                        </div>
                    </div>
                    ";
                }
            }
            ?>
        </div>

        <?php
        // $total = number_format(250, 2, '.', '');
        if ($total) {

            if ($total < 250) {
                $grand_total = number_format($total + 6.50, 2, '.', '');
                $add_more = number_format(250 - $total, 2, '.', '');
                echo "
                <div class='checkout'>
                    <h2>Subtotal (Items): <span>RM$total</span></h2>
                    <h2>Delivery Fee: <span>RM6.50</span></h2>
                    <h2 class='add_more'>* Add RM$add_more more to enjoy free delivery!</h2>
                    <h1>Total: <span>RM$grand_total</span></h1>
                    <button><i class='fa-solid fa-forward-fast'></i> Pay Now</button>
                </div>
                ";
            } else {
                echo "
                <div class='checkout'>
                    <h2>Subtotal (Items): <span>RM$total</span></h2>
                    <h2>Delivery Fee: <span><s>RM6.50</s> Free</span></h2>
                    <h1>Total: <span>RM$total</span></h1>
                    <button><i class='fa-solid fa-forward-fast'></i> Pay Now</button>
                </div>
                ";
            }
        }

        ?>
    </div>
    <a href=""></a>

    <?php
    if (!$total) {
        echo "
        <h1 class='empty'><i class='fa-solid fa-ban'></i> No Items in the cart ://</h1>
        ";
    }

    include('footer.php');
    include_once('session_logout.php');
    ?>
</body>

</html>