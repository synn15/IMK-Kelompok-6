<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="assets/bootstrap.min.css"> -->
</head>

<body>
    <?php include 'views/navbar.php'; ?>
    <section class="banner">
        <div class="banner__big">
            <div id="slideshow" class="slideshow">
                <div class="slide__container sld-1">
                    <div class="slide__detail">
                        <h1 class="slide__detail-title">PLAYSTATION 5</h1>
                        <p class="slide__detail-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed purus mi, feugiat sit amet pharetra eu, molestie porttitor odio. Aliquam a mi libero.
                            Proin congue viverra lorem, in scelerisque leo vehicula quis.
                            Integer et eros eu libero ullamcorper tempor.
                        </p>
                        <div class="slide__detail-stars">
                            <div class="star star-full"></div>
                            <div class="star star-full"></div>
                            <div class="star star-full"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                        <button class="slide__detail-button btn">Sewa Sekarang</button>
                    </div>
                    <div class="slide__labels">
                        <span class="barang__label">Trending</span>
                        <span class="barang__label">Kualitas Terjamin</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__medium">
            <div class="banner__medium-labels">
                <div class="barang__label">Kualitas Terjamin</div>
            </div>
            <div class="banner__medium-detail">
                <div class="banner__medium-detail__title">
                    Gaun Kawin
                </div>
                <div class="banner__medium-detail__subtitle">
                    Rias Pengantin Nina
                </div>
            </div>
        </div>
        <div class="banner__small">
            <div class="barang__label">HOT</div>
        </div>
    </section>
    <section class="kategori">
        <h1 class="kategori__judul">Kategori</h1>
        <div class="kategori__pills">
            <a class="kategori__pill">
                <div class="kategori__pils-icon">

                </div>

            </a>
        </div>
    </section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="js/banner.js"></script> -->

</html>