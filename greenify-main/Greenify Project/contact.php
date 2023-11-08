<?php include('contact-process.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php
  include_once 'header.php';
  require_once('user_auth.php');
  ?>
  <div class="box-contact">
    <div class="contact-container">
      <form id="contact" action="" method="POST">
        <h3>CONTACT US</h3>
        <h4>Send us a message today, and get a reply ASAP!</h4>
        <fieldset>
          <input placeholder=" Enter Your name" type="text" tabindex="1" name="name" autofocus />
          <span class="error"><?= $name_error ?></span>
        </fieldset>
        <fieldset>
          <input placeholder=" Enter Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2" />
          <span class="error"><?= $email_error ?></span>
        </fieldset>
        <fieldset>
          <input placeholder=" Enter Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3" />
          <span class="error"><?= $phone_error ?></span>
        </fieldset>
        <fieldset>
          <textarea placeholder="Type Your Message Here....." type="text" name="message" value="<?= $message ?>" tabindex="4"></textarea>
          <span class="error"><?= $message_error1 ?></span>
        </fieldset>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">
            SUBMIT
          </button>
        </fieldset>
        <div class="success"><?= $success; ?></div>
        <div class="message_error"><?= $message_error; ?></div>
      </form>
    </div>
    <div class="visit-box">
      <h3>VISIT US</h3>
      <h4>Our New Branch is now open! Located in Kuala Lumpur.</h4>
      <img src="images/maps.gif">
    </div>
  </div>
  <?php
  include_once 'footer.php';
  include_once('session_logout.php');
  ?>
</body>

</html>