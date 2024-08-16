<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-------------------------navbar-------------------------------->
<?php include "../view/partial/navbar.php" ?>
<div class="heading" style="background: url('/view/src/road.jpg')">
    <h1>about us</h1>
</div>

<!--about section starts-->
<section class="about">
     <div class="image">
        <img src="/view/src/wallpaperflare.com_wallpaper.jpg" alt="">
    </div>

    <div class="content">
        <h3>Why choose us?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis consequuntur deleniti dicta eum exercitationem ipsam laboriosam minus, natus neque obcaecati optio perspiciatis praesentium quos sed tempora tenetur. Deleniti, quis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda blanditiis doloremque eaque eum expedita iure modi quam sed voluptas?</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destination</span>
            </div>

            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>

            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
    </div>
</section>


<!--review section -->

<section class="reviews">
    <h1>clients reviews</h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dicta ea, eum excepturi facere in provident quam qui quis reiciendis, rem suscipit veritatis voluptatibus. Ab at mollitia neque quaerat quos?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="/view/src/Sushant-Singh-rajput.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem dolores enim eveniet exercitationem ipsa, nemo nihil, nulla omnis quisquam quod ratione repellendus reprehenderit? Labore obcaecati odio officiis vel? Aut error et incidunt ipsa itaque, magni minima minus non possimus.</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="/view/src/rose.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem dolores enim eveniet exercitationem ipsa, nemo nihil, nulla omnis quisquam quod ratione repellendus reprehenderit? Labore obcaecati odio officiis vel? Aut error et incidunt ipsa itaque, magni minima minus non possimus.</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="/view/src/allu.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem corporis delectus deserunt facere rerum.</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="/view/src/hansika.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque maxime provident recusandae veritatis. Accusamus, aliquam deleniti doloribus explicabo facere fugiat in praesentium qui sit totam voluptas voluptatibus. A amet consectetur delectus dignissimos, dolorem doloremque enim fuga, maiores minima molestiae nesciunt quidem reprehenderit sequi ullam.</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="/view/src/aravind.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet aperiam dignissimos eaque eius fuga nulla temporibus. Ab, enim, saepe?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="/view/src/revathi.jpeg" alt="">
            </div>
        </div>
    </div>
</section>










<!---------------------------footer--------------------------------------->
<?php include "../view/partial/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../controller/script.js"></script>
</body>
</html>