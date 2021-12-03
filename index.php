<!DOCTYPE html>
<html lang="en">

<?php include 'php/header.php'; ?>

<body>
    <?php include 'php/navbar.php'; ?>
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
        <h1 class="judul">Kategori</h1>
        <div class="kategori__pills">
            <a href="#" class="kategori__pill-link">
                <div class="kategori__pill">
                    <div class="kategori__pill-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <div class="kategori__pill-label">
                        Elektronik
                    </div>
                </div>
            </a>
            <a href="#" class="kategori__pill-link">
                <div class="kategori__pill">
                    <div class="kategori__pill-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <div class="kategori__pill-label">
                        Pakaian
                    </div>
                </div>
            </a>
            <a href="#" class="kategori__pill-link">
                <div class="kategori__pill">
                    <div class="kategori__pill-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <div class="kategori__pill-label">
                        Kendaraan
                    </div>
                </div>
            </a>
            <a href="#" class="kategori__pill-link">
                <div class="kategori__pill">
                    <div class="kategori__pill-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <div class="kategori__pill-label">
                        Buku
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="promo">
        <h1 class="judul">Promo</h1>
        <div class="row">
            <a href="#" class="product-card__link">
                <div class="product-card">
                    <img class="product-card__img" src="https://media.gq.com/photos/56e71c0b14cbe0637b261d7f/4:3/w_2260,h_1695,c_limit/horseinsuit2.jpg" alt="" srcset="">
                    <div class="product-card__labels">
                        <span class="barang__label">Wow</span>
                    </div>
                    <h2 class="product-card__title">Kuda</h2>
                </div>
            </a>
        </div>
    </section>
</body>
<?php include 'php/footer.php'; ?>


</html>