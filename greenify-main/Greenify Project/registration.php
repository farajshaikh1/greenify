<?php
include 'header.php';
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $name = sanitise($pdo, $_POST['name']);
    $email = sanitise($pdo, $_POST['email']);
    $phone = sanitise($pdo, $_POST['phone']);
    $password = sanitise($pdo, (md5($_POST['password'])));


    $error = data_validation($_POST['name'], "/.+/", "name");
    $error .= data_validation($_POST['email'],  "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/", "email");
    $error .= data_validation($_POST['phone'], "/^01(?!5)\d\d{7,8}$/", "number");
    $error .= data_validation($_POST['password'], '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', "password - must have at least one number, and 6-12 characters");

    if ($error == "") {
        $sql = " SELECT * FROM tbl_users WHERE email = $email";
        $result = $pdo->query($sql);
        $getNumRows = $result->rowCount();

        if ($getNumRows > 0) {
            $getNumRows = $result->fetch();
            $error = "User already exists!";
        } else {
            $query = "INSERT INTO tbl_users (name, email, phone, password) 
    		VALUES($name, $email, $phone, $password)";

            $result = $pdo->query($query);

            if (!$result) {
                die('Error: ' . mysqli_error($con));
            } else {
                header("location:login.php");
            }
        }
    }
}


function sanitise($pdo, $str)
{
    $str = htmlentities($str);
    return $pdo->quote($str);
}

function data_validation($data, $data_pattern, $data_type)
{
    if (preg_match($data_pattern, $data)) {
        return "";
    } else {
        return " Invalid " .  $data_type . "!<br>";
    }
}


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

    <div class="form-container">

        <form action="" method="post">
            <h3>SIGN UP</h3>
            <?php
            if (isset($error)) {
                echo '<div class="error-msg">';
                echo $error;
                echo '</div>';
                unset($error);
            }
            ?>
            <input type="text" name="name" placeholder="Enter your Name">
            <input type="text" name="email" placeholder="Enter your Email">
            <input type="phone" name="phone" placeholder="Enter your Phone Number">
            <input type="password" name="password" placeholder="Enter your Password">
            <input type="submit" name="submit" value="REGISTER" class="form-btn">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>

    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>