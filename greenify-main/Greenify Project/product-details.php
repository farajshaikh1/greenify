<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 12 128GB - Blue</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="jquery-3.6.1.min.js"></script>
    <script src="index.js"></script>
</head>

<body>
    <?php
    include_once('header.php');
    include_once('db_connection.php');
    require_once('user_auth.php');
    // session_start();

    $serial = $_GET['serial'];
    $table = $_GET['table'];
    
    $query = mysqli_query($conn, "SELECT * FROM $table WHERE serial='$serial';");
    $result = mysqli_fetch_assoc($query);

    $image_path = $result['image_path'];
    $brand = $result['brand'];
    $title = $result['title'];
    $price = $result['price'];
    $description = $result['description'];

    echo "
    <div id='main-div'>
        <div class='img-section'>
            <img src='$image_path' alt='Image Could Not be Loaded ://'>
            <input type='hidden' form='main-div' name='imagepath' value='$image_path'>

            <input type='hidden' form='main-div' name='filename' id='filename' value='product-details.php?serial=$serial&table=$table'>
            <!-- -->
        </div>
        
        <div class='body-section'>
            <p class='brand'>$brand</p>
            <input type='hidden' form='main-div' name='brand' value='$brand'>

            <h1 class='title'>$title</h1>
            <input type='hidden' form='main-div' name='title' value='$title'>

            <p class='price'>RM$price</p>
            <input type='hidden' form='main-div' name='price' value='RM$price'>
        ";
        ?>
            <ul>
                <li><i class='fa-solid fa-circle-check'></i></i>Greenify Warranty (30 Days).</li>
                <li><i class='fa-solid fa-circle-check'></i></i>Delivery within 1-2 days.</li>
                <li><i class='fa-solid fa-circle-check'></i></i>Free return within 48 hours (T&C Apply*).</li>
            </ul>
            
            <div class='btn-container'>        
                <button type='button' id='add_to_cart'>
                    <i class='fa-solid fa-cart-plus'></i> Add to Cart
                </button>
                <button type='button' id='buy_now'>
                    <i class='fa-solid fa-forward-fast'></i> Buy Now
                </button>
            </div>
        </div>
    </div>

    <div class='info-div'>
        <div class='shipping'>
            <div class='lines'>
                <div class='icon'>
                    <i class='fa-solid fa-user-shield'></i>
                </div>
                <div class='text'>
                    <h3>Secure Shopping</h3>
                    <p>Your data is always protected.</p>
                </div>
            </div>

            <div class='lines'>
                <div class='icon'>
                    <i class='fa-solid fa-building-circle-arrow-right'></i>
                </div>
                <div class='text'>
                    <h3>Free Returns</h3>
                    <p>Get free returns on eligible items.</p>
                </div>
            </div>            

            <div class='lines'>
                <div class='icon'>
                    <i class='fa-solid fa-truck'></i>
                </div>
                <div class='text'>
                    <h3>Free & Trusted Shipping</h3>
                    <p>Enjoy free shipping when you spend RM250 and above.</p>
                </div>
            </div>
        </div>

        <div class='specs'>
            <h3>About This Item</h3>
            <ul>
                <?php
                $explode = explode('. ', $description);
                foreach ($explode as $line) {
                    $line = rtrim($line, "."); // remove dot if present - so it's added in echo li.
                    echo "
                        <li>$line.</li>
                        ";
                }
                ?>
            </ul>
        </div>

    </div>

    <?php
    include('footer.php');
    include_once('session_logout.php');
    ?>
</body>

</html>