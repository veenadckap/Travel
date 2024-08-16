<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
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
<div class="heading" style="background: url('/view/src/b4.jpg') no-repeat center center; background-size: cover;">
    <h1>book</h1>
</div>


<section class="booking">
<h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="text" placeholder="enter your phone" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of  guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date"  name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date"  name="leaving">
            </div>

                <input type="submit" value="submit" class="btn" name="send">

        </div>
    </form>
</section>

<!---------------------------footer--------------------------------------->
<?php include "../view/partial/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../controller/script.js"></script>
</body>
</html>