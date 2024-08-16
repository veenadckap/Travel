<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide  slide" style="background:url('/view/src/antoine-therizols-alkChvKEpYk-unsplash.jpg') no-repeat ">
             <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world </h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
            </div>

            <div class="swiper-slide  slide" style="background:url('/view/src/mariam-g-4--MPb21Ecw-unsplash.jpg') no-repeat">
               <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places </h3>
                <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide  slide" style="background:url('/view/src/cloudy-nature-landscape-by-lake.jpg') no-repeat ">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile </h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="/view/src/adventure.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
             <img src="/view/src/location.png" alt="">
            <h3>our guide</h3>
        </div>

        <div class="box">
            <img src="/view/src/backpacking.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="/view/src/campfire.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="/view/src/direction-sign.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="/view/src/tent.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>

<!--home about section start-->

<section class="home-about" >
    <div class="image">
        <img src="/view/src/wallpaperflare.com_wallpaper.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Cupiditate dolorem eius harum ipsam, iste itaque nesciunt odio
            perferendis ratione, saepe sequi veniam! Culpa et omnis rerum. Delectus deserunt facere inventore?</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>


<!--home packages section start-->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
       <div class="box-container">
              <div class="box">
                  <div class="image">
                      <img src="/view/src/chris-leipelt-44Q19JsipxI-unsplash.jpg" alt="">
                  </div>

                  <div class="content">
                      <h3>Adventure & tour</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                      <a href="about.php" class="btn">read more</a>
                  </div>
               </div>

           <div class="box">
               <div class="image">
                   <img src="/view/src/arun-prakash-f9I5YmphVZU-unsplash.jpg" alt="">
               </div>

               <div class="content">
                   <h3>Adventure & tour</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                   <a href="about.php" class="btn">read more</a>
               </div>
           </div>

           <div class="box">
               <div class="image">
                   <img src="/view/src/clouds-seen-from-mountain.jpg" alt="">
               </div>

               <div class="content">
                   <h3>Adventure & tour</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>

                   <a href="about.php" class="btn">read more</a>
               </div>
           </div>
    </div>
    
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>



<!--home offer section start-->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Cumque exercitationem, ipsum nemo quia rem sequi.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!---------------------------footer--------------------------------------->
<?php include "../view/partial/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../controller/script.js"></script>
</body>
</html>