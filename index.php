<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Smart Farming Unpad</title>
    <link rel="icon" type="image/png" href="images/logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
</head>

<style>
    .swal2-popup {
        font-size: 1.6rem !important;
    }
</style>

<body>
    <div class="container">
        <header>
            <nav class="header__nav w-120">
                <div class="header__logo">
                    <img src="images/logo.png" alt="Logo">
                </div>
                <div class="header__nav__content">
                    <div class="nav-close-icon"></div>
                    <ul class="header__menu">
                        <li class="menu__item">
                            <a href="index.php" class="menu__link active">Home</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Tentang Penelitian</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Lokasi</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Gambar</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Kontak</a>
                        </li>
                    </ul>
                    <div class="header__signup">
                        <a href="login.php" class="btn btn__signup">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </div>
                </div>

                <div class="hamburger-menu-wrap">
                    <div class="hamburger-menu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="hero w-120">
            <div class="hero__content">
                <div class="hero__text"><br>
                    <h1 class="hero__title">Home</h1>
                    <p class="hero__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <button class="btn btn__hero" type="button" id="tombol">Button</button>
                </div>
                <div class="hero__img">
                    <img src="images/hero.png" alt="">
                </div>
            </div>
        </section>

        <section class="opportunities">
            <div class="opportunities__img">
                <img src="images/leaf.png" alt="">
            </div>
        </section>

        <footer class="footer">
            <div class="footer__bottom">
                <div class="footer__bottom__content w-105">
                    <div class="">
                        <p class="footer_copyright">
                            © Smart Farming Unpad 2021.
                        </p>
                    </div>

                </div>
                <img src="images/mountain.png" alt="Mountain" class="footer_img">
            </div>
        </footer>
    </div>
    <script src="js/main.js" type="module"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script>
        const tombol = document.querySelector('#tombol');
        tombol.addEventListener('click', function() {
            swal.fire({
                title: 'Halo',
                text: 'TES',
                type: 'Warning',
            });
        });
    </script>

</body>

</html>