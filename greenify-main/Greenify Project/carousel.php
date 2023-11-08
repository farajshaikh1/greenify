<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Image Carousel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

</head>

<body>
  <div class="carousel">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/smartphones.jpeg" alt="phone" />
        </div>
        <div class="swiper-slide">
          <img src="images/consoless.jpeg" alt="console" />
        </div>
        <div class="swiper-slide">
          <img src="images/homeapp.jpeg" alt="home-app" />
        </div>
        <div class="swiper-slide">
          <img src="images/gadget.jpeg" alt="gadgets" />
        </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".swiper", {
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>