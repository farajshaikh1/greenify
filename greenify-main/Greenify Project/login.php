<?php

require_once('config.php');
include_once('header.php');


if (isset($_POST['login'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password = md5(trim($_POST['password']));

        // $sql = "select * from tbl_users where email = '" . $email . "' and password = '" . $password . "'";
        $sql = "select * from tbl_users where email = '" . $email . "' and password = '" . $password . "'";
        $rs = $pdo->query($sql);
        $getNumRows = $rs->rowCount();

        if ($getNumRows > 0) {

            $getUserRow = $rs->fetch();

            unset($getUserRow['password']);

            $_SESSION = $getUserRow;

            $_SESSION['LAST_ACTIVE_TIME'] = time();
            $_SESSION['IS_LOGIN'] = 'yes';
            header('location:index.php');

            exit;
        } else {
            $errorMsg = "Wrong email or password";
        }
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="form-container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <h3>Login</h3>
            <?php
            if (isset($errorMsg)) {
                echo '<div class="error-msg">';
                echo $errorMsg;
                echo '</div>';
                unset($errorMsg);
            }
            ?>
            <input name="email" type="email" placeholder="Enter your email" required>
            <input name="password" type="password" placeholder="Enter your password" required>
            <button class="form-btn" type="submit" name="login">SIGN IN</button>
            <p>Don't have an Account? <a href="registration.php">Sign Up now</a></p>
        </form>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>