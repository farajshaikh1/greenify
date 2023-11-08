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
  <script>

  </script>
</head>

<body>
  <!-- Header pulled from header.php -->
  <?php
  include_once 'header.php';
  require_once('user_auth.php');
  include_once 'db_connection.php';
  ?>

  <main>

    <div class="cards-container">
      <?php
      $table = 'home_appliances';
      $query = mysqli_query($conn, "SELECT * FROM $table;");
      $checkQuery = mysqli_num_rows($query); // Checks number of rows returned in the query.

      if ($checkQuery && $checkQuery > 0) {
        while ($row = mysqli_fetch_assoc($query)) {

          $serial = $row['serial'];
          $image_path = $row['image_path'];
          $brand = $row['brand'];
          $title = $row['title'];
          $price = $row['price'];

          echo "
                <a href='product-details.php?serial=$serial&table=$table'>
                  <div class='card'>
                    <div class='img-container'><img src='$image_path' alt='Image Could Not be Loaded ://'></div>
                    <p class='brand'>$brand</p>
                    <p class='title'>$title</p>
                    <span class='price'>RM$price</span>
                  </div>
                </a>
                ";
        }
      } else {
        echo "<p class='empty'><i class='fa-solid fa-ban'></i> No items in this category ://</p>";
      }
      ?>

    </div>


  </main>


  <!-- Footer pulled from footer.php -->
  <?php
  include_once 'footer.php';
  include_once('session_logout.php');
  ?>
</body>

</html>