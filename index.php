<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CDN  -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&family=Satisfy&display=swap"
        rel="stylesheet" />
    <!-- mycss -->
    <link rel="stylesheet" href="CSS/index.css" />
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- Navbar-Start -->
        <nav class="navbar bg-dark navbar-expand fixed-bottom rounded-top-4 border-top p-0 " id="navbar-menu">
            <ul class="navbar-nav nav-justified w-100 align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#home">
                        <i class="fa-solid fa-house"></i>
                        <span class="d-block" style="font-size: 0.7rem;">Home</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#bride">
                        <i class="fa-solid fa-user-group"></i>
                        <span class="d-block" style="font-size: 0.7rem;">Mempelai</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#wedding-date">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span class="d-block" style="font-size: 0.7rem;">Tanggal</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#gallery">
                        <i class="fa-solid fa-images"></i>
                        <span class="d-block" style="font-size: 0.7rem;">Galeri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#comment">
                        <i class="fa-solid fa-comments"></i>
                        <span class="d-block" style="font-size: 0.7rem;">Ucapan</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Navbar-end -->
    </header>
    <!-- Header End -->


    <!-- Welcome Page - Start -->
    <section class="header-landing-page position-relative d-none">
        <section id="landingPage" class="d-flex justify-content-center align-items-center position-relative">
            <section class="content-page text-center text-white position-relative">
                <h1 class="title sacramento-regular fs-1" style="position: relative; margin-bottom: -10px">
                    The Wedding Of
                </h1>
                <img src="Asset/image3.png" alt="" width="300px" class="rounded-pill img-fluid" />
                <h1 class="title sacramento-regular fs-1" style="margin-top: -25px">
                    Lilis Nuryati & Nandi
                </h1>
                <h4 class="fs-6 poppins-regular">Kepada Yth Bapak/Ibu/Saudara/i</h4>
                <h2 class="fs-2 josefin-sans mt-3">Teman Teman Semua</h2>

                <a href="#" class="btn btn-light rounded-pill poppins-medium" id="open-undangan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                        class="bi bi-envelope-heart-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555l-4.2 2.568-.051-.105c-.666-1.3-2.363-1.917-3.699-1.25-1.336-.667-3.033-.05-3.699 1.25l-.05.105zM11.584 8.91l-.073.139L16 11.8V4.697l-4.003 2.447c.027.562-.107 1.163-.413 1.767Zm-4.135 3.05c-1.048-.693-1.84-1.39-2.398-2.082L.19 12.856A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144L10.95 9.878c-.559.692-1.35 1.389-2.398 2.081L8 12.324l-.551-.365ZM4.416 8.91c-.306-.603-.44-1.204-.413-1.766L0 4.697v7.104l4.49-2.752z" />
                        <path d="M8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                    </svg>
                    Open Invitation</a>
            </section>
        </section>
    </section>
    <!-- Welcome Page End -->

    <!-- CDN BOOSTRAP -->
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CDN tsparticles -->
    <script src="node_modules/@tsparticles/confetti/tsparticles.confetti.bundle.min.js"></script>

    <!-- Myjs -->
    <script src="JS/App.js" type="module"></script>

</body>

</html>