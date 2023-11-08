<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify Admin Control</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="jquery-3.6.1.min.js"></script>
    <script src="index.js"></script>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include_once('session_logout.php');
    require_once('user_auth.php');

    function display_items($table) {
        include 'db_connection.php';
        $query = mysqli_query($conn, "SELECT * FROM $table;");
        $checkQuery = mysqli_num_rows($query); // Checks number of rows returned in the query.

        if ($checkQuery && $checkQuery > 0) {
            echo "
            <table rules='all'>
                <thead>
                    <tr>
                        <td>Serial (PK)</td>
                        <td>Image</td>
                        <td>Brand</td>
                        <td>Title</td>
                        <td>Price (RM)</td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
            ";
            while ($row = mysqli_fetch_assoc($query)) {
                $serial = $row['serial'];
                $image_path = $row['image_path'];
                $brand = $row['brand'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                echo "
                    <tr>
                        <td class='serial'>$serial</td>
                        <td class='image-td'>
                            <details class='image'>
                                <summary><span>$image_path</span><input hidden type='text'></summary>
                                <div><img src='$image_path'></div>
                            </details>
                        </td>
                        <td class='brand'><span>$brand</span><input hidden type='text'></td>
                        <td class='title'><span>$title</span><input hidden type='text'></td>
                        <td class='price' type='number'><span>$price</span><input hidden type='text'></td>
                        <td class='description'>
                            <details>
                                <summary>Show / Hide</summary>
                                <p><span>$description</span><textarea hidden></textarea></p>
                            </details>
                        </td>
                        <td class='button-td'>
                            <div>
                                <button type='button' form='admin_form' name='edit' class='edit'><i class='fa-solid fa-pen-to-square'></i></button>
                                
                                <button type='button' form='admin_form' name='tick' class='tick'><i class='fa-regular fa-circle-check'></i></button>

                                <button type='button' form='admin_form' name='delete' class='delete'><i class='fa-solid fa-trash-can'></i></button>
                            </div>
                        </td>
                    </tr>
                ";
            }
            echo "
                </tbody>
            </table>
            ";
        } else {
            echo "<p class='empty' style='font-family: unset; font-size: 1.2rem; margin: 3rem auto;'><i class='fa-solid fa-ban'></i> No items in this category ://</p>";
        }
    }
    ?>


    <div id="admin_content">
        <!-- <h1>Add, Modify & Delete Products<a href="index.php"><button type="button" id="back_to_home"><i class="fa-solid fa-house"></i> Back to Home</button></a></h1> -->
        <div class="admin-heading">
            <h1>Admin Controls</h1>
            <a href="index.php"><button type="button" id="back_to_home"><i class="fa-solid fa-house"></i> Back to Home</button></a>
        </div>
        <hr class="first-hr">

        <div class="tbl-select">
            <button id="product-button">Products</button>
            <button id="customer-button">Customer Information</button>
        </div>

        <div class="tbl-items">
            <h2 id="smart_phones">Smart Phones</h2>
            <?php display_items('smart_phones'); ?>

            <hr>
            <h2 id="gadgets">Gadgets</h2>
            <?php display_items('gadgets'); ?>

            <hr>
            <h2 id="consoles">Consoles</h2>
            <?php display_items('consoles'); ?>

            <hr>
            <h2 id="home_appliances">Home Appliances</h2>
            <?php display_items('home_appliances'); ?>
        </div>

        <div class="tbl-customers">
            <h2 id="tbl_users">Customers</h2>
                    <?php
                    include 'db_connection.php';
                    $query = mysqli_query($conn, "SELECT id, name, email, phone FROM tbl_users WHERE user_role_id='2';");
                    $checkQuery = mysqli_num_rows($query);
            
                    if ($checkQuery && $checkQuery > 0) {
                        echo "
                        <table rules='all'>
                            <thead>
                                <tr>
                                    <td>User ID</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Phone Number (MY)</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                            ";
                            while ($row = mysqli_fetch_assoc($query)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                            
                            echo "
                                <tr>
                                    <td class='id-td'>$id</td>

                                    <td class='name-td'>
                                        <span>$name</span>
                                        <input hidden type='text'>
                                    </td>

                                    <td class='email-td'>
                                        <span>$email</span>
                                        <input hidden type='text'>
                                    </td>

                                    <td class='phone-td'>
                                        <span>$phone</span>
                                        <input hidden type='text'>
                                    </td>

                                    <td class='button-td'>
                                        <div>
                                            <button type='button' class='edit'><i class='fa-solid fa-pen-to-square'></i></button>
                                            
                                            <button type='button' class='tick'><i class='fa-regular fa-circle-check'></i></button>
        
                                            <button type='button' class='delete'><i class='fa-solid fa-trash-can'></i></button>
                                        </div>
                                    </td>
                                </tr>
                            ";
                            }
                        echo "
                            </tbody>
                        </table>
                    ";
                    }   
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>