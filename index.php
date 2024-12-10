
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Narendra Kurnia</title>
    <!-- icon -->
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">
    <!-- css custom -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="script.js" defer></script>

</head>
<body style="
        background-image: url('images/BG.png'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        margin: 0; 
        height: auto;"
    id="top"
        <!-- Preloader Area Start -->
        <!-- <div class="preloader">
            <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
                <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
            </svg>
            <div class="preloader-heading">
                <div class="load-text">
                    <span data-translate="preload-w">W</span>
                    <span data-translate="preload-e">E</span>
                    <span data-translate="preload-l1">L</span>
                    <span data-translate="preload-l2">L</span>
                    <span data-translate="preload-c">C</span>
                    <span data-translate="preload-o">O</span>
                    <span data-translate="preload-m">M</span>
                    <span data-translate="preload-e">E</span>
                </div>
            </div>
        </div>  -->

<!-- Navbar 1 (Stay) -->
        <nav id="navbar1" class="navbar navbar-expand-lg navbar-color">
    <div class="container-fluid">
        <!-- Logo dan Brand -->
        <a class="navbar-brand-navbar1" href="mailto:narendrakurnia18e@gmail.com" style="text-decoration: none; margin-top: 1%;">
            <img class="my-logo" src="images/icon.png" alt="Logo">
            rendra Kurnia
        </a>
        
        <!-- Toggler untuk menu responsif -->
        <input id="navbar-toggler1" type="checkbox">
        <label class="toggle toggle2" for="navbar-toggler1" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <div id="bar4" class="bars"></div>
            <div id="bar5" class="bars"></div>
            <div id="bar6" class="bars"></div>
        </label>
        
        <!-- Navigasi dan Switch Lang -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#about" data-translate="navlink-about">Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects" data-translate="navlink-projects">Projek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#exp-edu" data-translate="navlink-exp&edu">Pengalaman & Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills" data-translate="navlink-skills&contact">Keahlian & kontak</a>
                </li>
                <!-- Switch Language -->
                 <li class="nav-item">
                    <div class="switch-lang">
                        <input id="language-toggle2" class="check-toggle check-toggle-round-flat language-toggle" type="checkbox">
                            <label for="language-toggle2"></label>
                                <span class="on">EN</span>
                                <span class="off">ID</span>
                            </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <!-- Navbar 2 (Sticky) -->
        <nav id="navbar2" class="navbar navbar-expand-lg sticky-top navbar-color2 animate__animated animate__fadeIn" style="display: none;">
            <div class="container-fluid">
                <a class="navbar-brand-navbar2">
                    <img src="images/icon.png" alt="Logo" style="width: 60px; height: 60px; margin-right: -6%;">
                </a>
                <input id="navbar-toggler2" type="checkbox">
                <label class="toggle toggle2" for="navbar-toggler2" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                    <div id="bar4" class="bars"></div>
                    <div id="bar5" class="bars"></div>
                    <div id="bar6" class="bars"></div>
                </label>
                <div class="collapse navbar-collapse navbarkedua" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about" data-translate="navlink-about">Tentang Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects" data-translate="navlink-projects">Projek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#exp-edu" data-translate="navlink-exp&edu">Pengalaman & Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills" data-translate="navlink-skills&contact">Keahlian & kontak</a>
                        </li>
                        <li class="nav-item">
                            <div class="switch-lang">
                                <input id="language-toggle2" class="check-toggle check-toggle-round-flat language-toggle" type="checkbox">
                                        <label for="language-toggle2"></label>
                                        <span class="on">EN</span>
                                        <span class="off">ID</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <main>
        <section id="about">
         <header id="header">
            <div class="container-me">
                <div class="container-desc">
                    <div class="name" data-translate="name">Saya Narendra</div>
                    <div class="skill" data-translate="skill-header">Sebagai UI/UX design<br>dan Front End developer</div>
                    <div class="desc" data-translate="desc-header">Perkenalkan saya Narendra Kurnia Hernanto dari UPN"VETERAN" Jawa Timur jurusan Informatika angkatan 2022<br class="hide-me"> Saya memiliki pengalaman dalam merancang dan mengembangkan website. Saya menguasai tentang HTML, CSS, JavaScript, Bootstrap, PHP, dan Laravel, yang telah membantu untuk menciptakan website yang fungsional dan menarik. Selain itu, saya juga memiliki keahlian dalam desain grafis, khususnya dalam pembuatan poster dan konten media sosial, dengan menggunakan platform seperti Canva dan Photoshop.</div>
                    <ul class="social-media-btn">
                        <li class="icon-content">
                            <a href="https://github.com/gevanno654" aria-label="GitHub" data-social="github">
                                <div class="filled"></div>
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-github"
                                viewBox="0 0 16 16"
                                xml:space="preserve"
                                >
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                    fill="currentColor"
                                ></path>
                                </svg>
                            </a>
                            <div class="tooltip">GitHub gevanno654</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://www.instagram.com/narendrakrn/" aria-label="Instagram" data-social="instagram">
                                <div class="filled"></div>
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-instagram"
                                viewBox="0 0 16 16"
                                xml:space="preserve"
                                >
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                    fill="currentColor"
                                ></path>
                                </svg>
                            </a>
                            <div class="tooltip">Instagram narendrakrn</div>
                        </li>
                        <button class="download-btn" onclick="downloadCV()">
                            <span class="download-btn-content" data-translate="download-btn">Download My CV</span>
                        </button>

                    </ul>
                </div>
                <!-- Card Foto-->
                <div class="card-photo">
                    <div class="card-photo-content">
                        <img class="my-photo" style="margin-left: 120px;" src="images/fotodiri.png">
                    </div>
                </div>
            </div>
            <!-- PROJECT -->
            <section id="projects">
            <div class="container-projects">
                <h2 class="title-projects animate-on-scroll" data-animation="animate__zoomIn" data-translate="title-projects">Proyek Saya</h2>
                <p class="desc-projects animate-on-scroll" data-animation="animate__zoomIn" data-translate="desc-projects">Proyek yang telah saya buat dan pelajari</p>
                <div class="container-card">
                    <div class="container-left-projects">
                        <div class="image-container animate-on-scroll" data-animation="animate__fadeInLeft">
                            <img class="hover-image" id="desktop-mode" src="images/login-jwm.png" data-bs-toggle="modal" data-bs-target="#modal-pro1" data-translate-title="project1-title" data-translate-subtitle="project1-subtitle">
                            <div class="image-projects-responsive">
                                <img class="hover-image" src="images/login-jwm.png" data-bs-toggle="modal" data-bs-target="#modal-pro1" data-translate-title="project1-title" data-translate-subtitle="project1-subtitle">
                                <div class="title-image-projects" data-bs-toggle="modal" data-bs-target="#modal-pro1">Baca Selengkapnya</div>
                            </div>
                        </div>
                        <div class="image-container animate-on-scroll" data-animation="animate__fadeInLeft">
                            <img class="hover-image" id="desktop-mode" src="images/dasborcbt.png" data-bs-toggle="modal" data-bs-target="#modal-pro2" data-translate-title="project2-title" data-translate-subtitle="project2-subtitle">
                            <div class="image-projects-responsive">
                                <img class="hover-image" src="images/dasborcbt.png" data-bs-toggle="modal" data-bs-target="#modal-pro2" data-translate-title="project2-title" data-translate-subtitle="project2-subtitle">
                                <div class="title-image-projects" data-bs-toggle="modal" data-bs-target="#modal-pro2">Baca Selengkapnya</div>
                            </div>
                        </div>
                    </div>
                    <div class="container-right-projects">
                        <div class="image-container animate-on-scroll" data-animation="animate__fadeInRight">
                            <img class="hover-image" id="desktop-mode" src="images/index-POS.png" data-bs-toggle="modal" data-bs-target="#modal-pro3" data-translate-title="project3-title" data-translate-subtitle="project3-subtitle">
                            <div class="image-projects-responsive">
                                <img class="hover-image" src="images/index-POS.png" data-bs-toggle="modal" data-bs-target="#modal-pro3" data-translate-title="project3-title" data-translate-subtitle="project3-subtitle">
                                <div class="title-image-projects" data-bs-toggle="modal" data-bs-target="#modal-pro3">Baca Selengkapnya</div>
                            </div>
                        </div>
                        <div class="image-container animate-on-scroll" data-animation="animate__fadeInRight">
                            <img class="hover-image" id="desktop-mode" src="images/project-goberkah.png" data-bs-toggle="modal" data-bs-target="#modal-pro4" data-translate-title="project4-title" data-translate-subtitle="project4-subtitle">
                            <div class="image-projects-responsive">
                                <img class="hover-image" src="images/project-goberkah.png" data-bs-toggle="modal" data-bs-target="#modal-pro4" data-translate-title="project4-title" data-translate-subtitle="project4-subtitle">
                                <div class="title-image-projects" data-bs-toggle="modal" data-bs-target="#modal-pro4">Baca Selengkapnya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tooltip Hover -->
        <div id="tooltip-caption" >
            <div class="tooltip-inner">
                <span class="tooltip-subtitle"></span>
                <h4 class="tooltip-title"></h4>
            </div>
        </div>

        <!-- Modals Project 1-->
        <div class="modal fade" id="modal-pro1" tabindex="-1" aria-labelledby="modal-pro1-label" aria-hidden="true" data-lenis-prevent="">
            <div type="button" class="close-button" data-bs-dismiss="modal">×</div>
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-modal-pro">
                            <div class="thumbnail"><img src="images/login-jwm.png" alt="Image Projects"></div>
                        </div>
                        <div class="header-modal-pro">
                            <h5 class="title-modal-pro" data-translate="title-modal-pro1">Pendaftaran & Login Java Web Media</h5>
                            <div class="time-modal-pro" data-translate="time-modal-pro1">15th - 22th November 2024</div>
                            <div class="desc-modal-pro" data-translate="desc-modal-pro1">Project ini membuat rancangan desain UI/UX untuk registrasi dan login pada platform Figma untuk website perusahaan Java Web Media serta mengimplementasikan ke HTML, CSS, Bootstrap</div>
                        </div>
                        <div class="container-preview-btn">
                            <button class="preview-btn" onclick="redirectToProject('projects/WEBJWM/index.php')">
                                <span class="preview-btn-content" data-translate="live-preview">Live Preview</span>
                            </button>
                            <button class="preview-btn" onclick="redirectToProject('https://github.com/gevanno654/university-database')">
                                <span class="preview-btn-content" data-translate="code-preview">View Codes</span>
                            </button>
                        </div>
                        <div class="subtitle-modal-pro" data-translate="subtitle-modal-pro1">Yang saya lakukan dalam project ini:</div>
                        <div class="myjob-modal-pro" data-translate="myjob-modal-pro1">• Merancang dengan figma untuk dikembangkan with HTML5, CSS3, JavaScript, Bootstrap.<br>
                            • Desain UI/UX.<br>
                            • Menerapkan ke dalam website.<br>
                            • Mengaplikasikan tampilan website desktop menjadi website responsive<br>
                            • Meningkatkan pengalaman pengguna dengan mengoptimalkan tampilan, struktur situs, dan navigasi. <br>
                            • Sedang mengembangkan desain ulang tampilan website Javaweb</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals Project 2-->
        <div class="modal fade" id="modal-pro2" tabindex="-1" aria-labelledby="modal-pro2-label" aria-hidden="true" data-lenis-prevent="">
            <div type="button" class="close-button" data-bs-dismiss="modal">×</div>
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-modal-pro">
                            <div class="thumbnail"><img src="images/dasborcbt.png" alt="Image Projects"></div>
                        </div>
                        <div class="header-modal-pro">
                            <h5 class="title-modal-pro" data-translate="title-modal-pro2">Admin Web</h5>
                            <div class="time-modal-pro" data-translate="time-modal-pro2">September 2024 - Desember 2024</div>
                            <div class="desc-modal-pro" data-translate="desc-modal-pro2">Project untuk membuat website login admin </div>
                        </div>
                        <div class="container-preview-btn">
                            <button class="preview-btn" onclick="redirectToProject('projects/cbt/admin/dasbor')">
                                <span class="preview-btn-content" data-translate="live-preview">Live Preview</span>
                            </button>
                        </div>
                        <div class="subtitle-modal-pro" data-translate="subtitle-modal-pro2">Yang saya lakukan dalam project ini:</div>
                        <div class="myjob-modal-pro" data-translate="myjob-modal-pro2">• Built website with HTML5, CSS3, PHP, JavaScript, Laravel, Bootstrap.<br>
                            • Membuat desain database<br>
                            • Mengaplikasikan tampilan website desktop menjadi website responsive<br>
                            • Membuat kategori admin seperti admin, user, staff<br>
                            • Web admin akan digabungkan ke dalam project POS</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals Project 3-->
        <div class="modal fade" id="modal-pro3" tabindex="-1" aria-labelledby="modal-pro3-label" aria-hidden="true" data-lenis-prevent="">
            <div type="button" class="close-button" data-bs-dismiss="modal">×</div>
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-modal-pro">
                            <div class="thumbnail"><img src="images/index-POS.png" alt="Image Projects"></div>
                        </div>
                        <div class="header-modal-pro">
                            <h5 class="title-modal-pro" data-translate="title-modal-pro3">Website POS(kasir) </h5>
                            <div class="time-modal-pro" data-translate="time-modal-pro3">2 Desember 2024-31 Desember 2024</div>
                            <div class="desc-modal-pro" data-translate="desc-modal-pro3">Project ini merupakan website POS untuk sebuah perusahaan kue namun saat ini project masih pembangunan</div>
                        </div>
                        <div class="container-preview-btn">
                            <button class="preview-btn" onclick="redirectToProject('projects/pos_JWM/login.php')">
                                <span class="preview-btn-content" data-translate="live-preview">Live Preview</span>
                            </button>
                        </div>
                        <div class="subtitle-modal-pro" data-translate="subtitle-modal-pro3">Yang saya lakukan dalam project ini:</div>
                        <div class="myjob-modal-pro" data-translate="myjob-modal-pro3">
                            • Membuat tampilan website POS.<br>
                            • Membuat database untuk login, registrasi dan transaksi.<br>
                            • Menguhubungkan database ke dalam website.<br>
                            • Membuat website desktop ke website responsive.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals Project 4-->
        <div class="modal fade" id="modal-pro4" tabindex="-1" aria-labelledby="modal-pro4-label" aria-hidden="true" data-lenis-prevent="">
            <div type="button" class="close-button" data-bs-dismiss="modal">×</div>
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="image-modal-pro">
                            <div class="thumbnail"><img src="images/project-goberkah.png" alt="Image Projects"></div>
                        </div>
                        <div class="header-modal-pro">
                            <h5 class="title-modal-pro" data-translate="title-modal-pro4">Website Restoran</h5>
                            <div class="time-modal-pro" data-translate="time-modal-pro4">April 2024-Juli 2024</div>
                            <div class="desc-modal-pro" data-translate="desc-modal-pro4">Sebuah project website restoran yang dikerjakan berkelompok</div>
                        </div>
                        <div class="container-preview-btn">
                            <button class="preview-btn" onclick="redirectToProject('projects/go-berkah-resto/home.php')">
                                <span class="preview-btn-content" data-translate="live-preview">Live Preview</span>
                            </button>
                        </div>
                        <div class="subtitle-modal-pro" data-translate="subtitle-modal-pro4">Yang saya lakukan dalam project ini:</div>
                        <div class="myjob-modal-pro" data-translate="myjob-modal-pro4">• Membuat rancangan website.<br>
                            • Membuat UI/UX di Figma.<br>
                            • Membuat tampilan website.<br>
                            • Merevisi website yang dirasa kurang.</div>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <!-- Experience & Education -->
        <section id="exp-edu">
            <div class="container-exp-edu">
                <div class="container-experience">
                    <h2 class="title-experience animate-on-scroll" data-animation="animate__zoomIn" data-translate="title-experience">Pengalaman Saya</h2>
                    <div class="card-exp animate-on-scroll" data-animation="animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#modal-exp1">
                        <div class="card-exp-content">
                            <h4 class="title-card-exp" data-translate="title-card-exp1">September 2024-Desember 2024</h4>
                            <h3 class="job-card-exp" data-translate="job-card-exp1">UI/UX Desain & Front-End</h3>
                            <p class="name-card-exp" data-translate="name-card-exp1">PT. Java Web Media Edukasi</p>
                        </div>
                    </div>
                    <div class="card-exp animate-on-scroll" data-animation="animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#modal-exp2">
                        <div class="card-exp-content">
                            <h4 class="title-card-exp" data-translate="title-card-exp2">Agustus 2022-Sekarang</h4>
                            <h3 class="job-card-exp" data-translate="job-card-exp2">Konten Creator & Project Manager</h3>
                            <p class="name-card-exp" data-translate="name-card-exp2">CV. Kenongo Cipta Kirana Production</p>
                        </div>
                    </div>
                    <div class="card-exp animate-on-scroll" data-animation="animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#modal-exp3">
                        <div class="card-exp-content">
                            <h4 class="title-card-exp" data-translate="title-card-exp3">Maret 2021-Maret 2022</h4>
                            <h3 class="job-card-exp" data-translate="job-card-exp3">Konten Kreator & Duta Generasi Berencana</h3>
                            <p class="name-card-exp" data-translate="name-card-exp3">Dinas Pengendalian Penduduk & KB Kab. Nganjuk</p>
                        </div>
                    </div>
                    <div class="card-exp animate-on-scroll" data-animation="animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#modal-exp4">
                        <div class="card-exp-content">
                            <h4 class="title-card-exp" data-translate="title-card-exp4">June 2019-September 2021</h4>
                            <h3 class="job-card-exp" data-translate="job-card-exp4">Kepala Divisi PDD</h3>
                            <p class="name-card-exp" data-translate="name-card-exp4">OSIS SMA Negeri 3 Nganjuk</p>
                        </div>
                    </div>
                </div>

                <div class="container-education">
                    <h2 class="title-education animate-on-scroll" data-animation="animate__zoomIn" data-translate="title-education">Pendidikan Saya</h2>
                    <div class="card-exp animate-on-scroll" data-animation="animate__fadeInRight" data-bs-toggle="modal" data-bs-target="#modal-edu1">
                        <div class="card-exp-content">
                            <h4 class="title-card-exp" data-translate="title-card-edu1">2019-2022</h4>
                            <h3 class="job-card-exp" data-translate="job-card-edu1">Ilmu Pengetahuan Alam</h3>
                            <p class="name-card-exp" data-translate="name-card-edu1">SMA Negeri 3 Nganjuk</p>
                        </div>
                    </div>
                    <div class="card-exp animate-on-scroll" data-animation="animate__fadeInRight" data-bs-toggle="modal" data-bs-target="#modal-edu3">
                        <div class="card-exp-content">
                            <h4 class="title-card-exp" data-translate="title-card-edu3">2022-Sekarang</h4>
                            <h3 class="job-card-exp" data-translate="job-card-edu3">Informatika</h3>
                            <p class="name-card-exp" data-translate="name-card-edu3">Universitas Pembangunan Nasional “Veteran” Jatim</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- Skills -->
        <section id="skills">
            <div class="container-skills">
                <h2 class="title-skills animate-on-scroll" data-animation="animate__zoomIn" data-translate="title-skills">Skill saya</h2>
                <p class="desc-skills animate-on-scroll" data-animation="animate__zoomIn" data-translate="desc-skills">Ini adalah keterampilan yang saat ini saya kuasai dan akan terus saya tingkatkan seiring berjalannya waktu.</p>
            </div>
            <div class="skills-grid">
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/html-5.png" alt="">
                        </svg>
                    </div>
                    <span class="skill-text">HTML</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/css-3.png" alt="">
                    </div>
                    <span class="skill-text">CSS</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/js.png" alt="">
                        </svg>
                    </div>
                    <span class="skill-text">JavaScript</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                           <img src="images/php.png" alt="">
                        </svg>
                    </div>
                    <span class="skill-text">PHP</span>
                </div>
                 <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                           <img src="images/c-sharp.png" alt="">
                        </svg>
                    </div>
                    <span class="skill-text">C</span>
                </div>               
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/mysql.png" alt="">
                        </svg>    
                    </div>
                    <span class="skill-text">MySQL</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" />
                    </div>
                    <span class="skill-text">Bootstrap</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/j-query.png" alt="">
                    </div>
                    <span class="skill-text">jQuery</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/figma.png" alt="">
                    </div>
                    <span class="skill-text">Figma</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.76 498.97"><defs><style>.a{fill:#001e36;}.b{fill:#31a8ff;}</style></defs><title>adobe-photoshop</title><rect class="a" width="511.76" height="498.97" rx="90.62"/><path class="b" d="M115.24,349.91V130.53c0-1.59.68-2.4,2.06-2.4,3.65,0,7,0,12-.17s10.47-.23,16.31-.34l18.54-.35q9.78-.17,19.39-.17,26.09,0,44,6.52a76.4,76.4,0,0,1,28.66,17.51,67.06,67.06,0,0,1,15.62,24.21A80.31,80.31,0,0,1,276.61,203q0,27.48-12.7,45.32a71.82,71.82,0,0,1-34.33,25.92c-14.42,5.38-30.45,7.2-48.07,7.2-5,0-8.58-.05-10.64-.17s-5.15-.17-9.27-.17v68.49a2.72,2.72,0,0,1-2.32,3.09,2.49,2.49,0,0,1-.77,0H117.64C116,352.65,115.24,351.74,115.24,349.91ZM161.6,169.33v71.55q4.46.35,8.24.34h11.33a80.56,80.56,0,0,0,24.55-3.92A37,37,0,0,0,223.23,226q6.69-7.89,6.69-22a34.74,34.74,0,0,0-5-18.88A32,32,0,0,0,210,172.93,63.68,63.68,0,0,0,185,168.64q-8.25,0-14.59.17t-8.76.52Z"/><path class="b" d="M409.35,227.87a80,80,0,0,0-20.43-7.21,108.28,108.28,0,0,0-23.86-2.75,44.38,44.38,0,0,0-12.87,1.55,11.55,11.55,0,0,0-6.7,4.29,10.79,10.79,0,0,0-1.71,5.84,9.08,9.08,0,0,0,2.06,5.49,23.25,23.25,0,0,0,7.21,5.66,141.8,141.8,0,0,0,15.1,7,150,150,0,0,1,32.79,15.62,50,50,0,0,1,16.82,17.68,47.17,47.17,0,0,1,5,22,49.41,49.41,0,0,1-8.24,28.33,54.23,54.23,0,0,1-23.86,19.05Q375,357.3,352,357.3a140.51,140.51,0,0,1-29-2.75,92.44,92.44,0,0,1-21.8-6.87,4.44,4.44,0,0,1-2.41-4.12V306.49a2,2,0,0,1,.86-1.89,1.66,1.66,0,0,1,1.89.17A91.62,91.62,0,0,0,328,315.24a108.66,108.66,0,0,0,25.07,3.26q12,0,17.68-3.09a9.7,9.7,0,0,0,5.66-8.92q0-4.47-5.15-8.59T350.3,288a126.06,126.06,0,0,1-30.38-15.45,52.42,52.42,0,0,1-16.14-18,47.35,47.35,0,0,1-5-21.8A49.21,49.21,0,0,1,306,206.93a52.37,52.37,0,0,1,22.32-19.57q15.1-7.55,37.76-7.55a167.13,167.13,0,0,1,26.44,1.88,69.58,69.58,0,0,1,18.4,5,3.13,3.13,0,0,1,2.06,1.89,9.31,9.31,0,0,1,.34,2.57v34.68a2.3,2.3,0,0,1-1,2.06A3.33,3.33,0,0,1,409.35,227.87Z"/></svg>
                    </div>
                    <span class="skill-text">Photoshop</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.84 500.01"><defs><style>.a{fill:#00005b;}.b{fill:#99f;}</style></defs><title>adobe-premiere-pro</title><path class="a" d="M90.81,0H422a90.74,90.74,0,0,1,90.82,90.81V409.2A90.73,90.73,0,0,1,422,500H90.81A90.73,90.73,0,0,1,0,409.2V90.81A90.74,90.74,0,0,1,90.81,0Z"/><path class="b" d="M121.8,350.65V130.77c0-1.49.64-2.35,2.14-2.35,3.63,0,7.05,0,12-.21,5.13-.21,10.47-.21,16.24-.43s12-.21,18.59-.43,13-.21,19.45-.21c17.52,0,32,2.14,44,6.62a76.35,76.35,0,0,1,28.64,17.53,67.94,67.94,0,0,1,15.6,24.36,81.86,81.86,0,0,1,4.91,27.77q0,27.57-12.82,45.52A73.2,73.2,0,0,1,236.12,275c-14.53,5.34-30.56,7.26-48.08,7.26-5.13,0-8.55,0-10.68-.21s-5.13-.21-9.19-.21v68.59a2.66,2.66,0,0,1-2.35,3H124.36C122.65,353.43,121.8,352.57,121.8,350.65Zm46.58-181v71.8c3,.21,5.77.43,8.33.43H188A79.61,79.61,0,0,0,212.61,238a36.71,36.71,0,0,0,17.52-11.32c4.49-5.35,6.63-12.61,6.63-22a35.19,35.19,0,0,0-4.92-19,31,31,0,0,0-15-12.18,62.55,62.55,0,0,0-25.22-4.27c-5.55,0-10.47,0-14.53.21a49.8,49.8,0,0,0-8.76.21Z"/><path class="b" d="M313.26,182.06h37.39a4.8,4.8,0,0,1,4.49,3.42,21.39,21.39,0,0,1,1.28,5.34c.43,2.13.86,4.48,1.07,6.62.21,2.35.43,4.92.43,7.69a79.63,79.63,0,0,1,22.86-18.37,66.17,66.17,0,0,1,32.48-8.34,2.66,2.66,0,0,1,3,2.35V223.3c0,1.71-1.07,2.35-3.42,2.35a92.62,92.62,0,0,0-23.08,2.13,88.75,88.75,0,0,0-17.94,5.77,33.3,33.3,0,0,0-10.9,7.91v109c0,2.13-.86,3-2.78,3H316a3,3,0,0,1-3.41-2.57V231.63c0-5.13,0-10.47-.22-16s-.21-11.11-.43-16.66c0-4.92-.42-9.62-.85-14.53a2,2,0,0,1,1.5-2.35c0-.22.42-.22.64,0Z"/></svg>
                    </div>
                    <span class="skill-text">PremierePro</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 508 508" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g transform="matrix(.26718 0 0 .26718 0 0)"><circle cx="950" cy="950" r="950" fill="#7d2ae7"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial1)"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial2)"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial3)"/><circle cx="950" cy="950" r="950" fill="url(#prefix___Radial4)"/></g><path d="M446.744 276.845c-.665 0-1.271.43-1.584 1.33-4.011 11.446-9.43 18.254-13.891 18.254-2.563 0-3.6-2.856-3.6-7.336 0-11.21 6.71-34.982 10.095-45.82.392-1.312.646-2.485.646-3.483 0-3.15-1.722-4.696-5.987-4.696-4.598 0-9.547 1.8-14.36 10.233-1.663-7.435-6.691-10.683-13.715-10.683-8.12 0-15.965 5.224-22.421 13.696-6.456 8.471-14.048 11.25-19.76 9.88 4.108-10.057 5.634-17.57 5.634-23.145 0-8.746-4.324-14.028-11.308-14.028-10.624 0-16.747 10.134-16.747 20.797 0 8.237 3.736 16.708 11.954 20.817-6.887 15.573-16.943 29.66-20.758 29.66-4.93 0-6.379-24.123-6.105-41.38.176-9.9.998-10.408.998-13.401 0-1.722-1.115-2.896-5.595-2.896-10.448 0-13.676 8.844-14.165 18.998a50.052 50.052 0 01-1.8 11.406c-4.363 15.573-13.363 27.39-19.232 27.39-2.72 0-3.463-2.72-3.463-6.28 0-11.21 6.28-25.219 6.28-37.173 0-8.784-3.854-14.34-11.112-14.34-8.55 0-19.858 10.173-30.56 29.229 3.521-14.595 4.97-28.721-5.459-28.721a14.115 14.115 0 00-6.476 1.683 3.689 3.689 0 00-2.113 3.56c.998 15.535-12.521 55.329-25.336 55.329-2.328 0-3.463-2.524-3.463-6.593 0-11.23 6.691-34.943 10.056-45.801.43-1.409.666-2.622.666-3.678 0-2.974-1.84-4.5-6.007-4.5-4.578 0-9.547 1.741-14.34 10.174-1.683-7.435-6.711-10.683-13.735-10.683-11.523 0-24.397 12.19-30.051 28.076-7.572 21.208-22.832 41.692-43.375 41.692-18.645 0-28.486-15.515-28.486-40.03 0-35.392 25.982-64.308 45.253-64.308 9.215 0 13.617 5.869 13.617 14.869 0 10.897-6.085 15.964-6.085 20.112 0 1.272 1.057 2.524 3.15 2.524 8.374 0 18.234-9.841 18.234-23.262 0-13.422-10.897-23.243-30.168-23.243-31.851 0-63.898 32.047-63.898 73.113 0 32.673 16.121 52.374 44 52.374 19.017 0 35.628-14.79 44.588-32.047 1.018 14.302 7.513 21.776 17.413 21.776 8.804 0 15.925-5.243 21.364-14.458 2.094 9.645 7.65 14.36 14.87 14.36 8.275 0 15.201-5.243 21.794-14.986-.097 7.65 1.644 14.85 8.276 14.85 3.13 0 6.867-.725 7.533-3.464 6.984-28.877 24.24-52.453 29.523-52.453 1.565 0 1.995 1.507 1.995 3.287 0 7.846-5.537 23.928-5.537 34.2 0 11.092 4.716 18.43 14.459 18.43 10.8 0 21.775-13.227 29.092-32.556 2.29 18.058 7.24 32.633 14.987 32.633 9.508 0 26.392-20.014 36.625-41.203 4.01.509 10.036.372 15.827-3.717-2.465 6.241-3.912 13.07-3.912 19.897 0 19.663 9.39 25.18 17.47 25.18 8.785 0 15.907-5.243 21.365-14.458 1.8 8.315 6.398 14.34 14.85 14.34 13.225 0 24.71-13.519 24.71-24.612 0-2.934-1.252-4.715-2.72-4.715zm-274.51 18.547c-5.342 0-7.435-5.38-7.435-13.401 0-13.93 9.528-37.193 19.604-37.193 4.402 0 6.065 5.185 6.065 11.524 0 14.145-9.059 39.07-18.235 39.07zm182.948-41.574c-3.189-3.796-4.343-8.961-4.343-13.559 0-5.673 2.074-10.467 4.558-10.467 2.485 0 3.248 2.446 3.248 5.85 0 5.693-2.035 14.008-3.463 18.176zm41.418 41.574c-5.34 0-7.434-6.182-7.434-13.401 0-13.441 9.528-37.193 19.682-37.193 4.402 0 5.967 5.146 5.967 11.524 0 14.145-8.902 39.07-18.215 39.07z" fill="#fff" fill-rule="nonzero"/><defs><radialGradient id="prefix___Radial1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="scale(1469.491) rotate(-49.416 1.37 .302)"><stop offset="0" stop-color="#6420ff"/><stop offset="1" stop-color="#6420ff" stop-opacity="0"/></radialGradient><radialGradient id="prefix___Radial2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(54.703 42.717 594.194) scale(1657.122)"><stop offset="0" stop-color="#00c4cc"/><stop offset="1" stop-color="#00c4cc" stop-opacity="0"/></radialGradient><radialGradient id="prefix___Radial3" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1023 -1030 473.711 470.491 367 1684)"><stop offset="0" stop-color="#6420ff"/><stop offset="1" stop-color="#6420ff" stop-opacity="0"/></radialGradient><radialGradient id="prefix___Radial4" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(595.999 1372 -2298.41 998.431 777 256)"><stop offset="0" stop-color="#00c4cc" stop-opacity=".73"/><stop offset="0" stop-color="#00c4cc"/><stop offset="1" stop-color="#00c4cc" stop-opacity="0"/></radialGradient></defs></svg>
                    </div>
                    <span class="skill-text">Canva</span>
                </div>
                <div class="card-skills animate-on-scroll" data-animation="animate__flipInX">
                    <div class="card-skills-content">
                        <svg viewBox="0 0 128 10">
                            <img src="images/capcut-icon.png" alt="">
                    </div>
                    <span class="skill-text">Capcut</span>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container-contact">
                <h2 class="title-contact animate-on-scroll" data-animation="animate__backInUp" data-translate="title-contact">Kontak saya</h2>
                <div class="content-contact animate-on-scroll"  data-animation="animate__backInUp">
                    <div class="contact-info">
                        <button class="social-btn" onclick="window.open('https://wa.me/6282228353983', '_blank')">
                            <i class="fab fa-whatsapp"></i>
                        </button>
                        <div class="contact-text">
                            <div class="head-contact" data-translate="head-contact-phone">Phone/Whatsapp</div>
                            <div class="subhead-contact">
                                <a href="https://wa.me/6282228353983" target="_blank" style="text-decoration: none; color: inherit;">+6282228353983</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <button class="social-btn" onclick="window.location.href='mailto:narendrakurnia18@gmail.com'">
                            <i class="fa-regular fa-envelope"></i>
                        </button>
                        <div class="contact-text">
                            <div class="head-contact" data-translate="head-contact-email">Email</div>
                            <div class="subhead-contact">
                                <a href="mailto:narendrakurnia18@gmail.com" style="text-decoration: none; color: inherit;">narendrakurnia18@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
<!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>

<!-- CUSTOM JS -->
 <script src="js/scripts.js"></script>
 <script src="js/language.js"></script>
  <script>
        // Download button
        function downloadCV() {
            const link = document.createElement('a');
            link.href = 'document/CV.pdf';
            link.download = 'Narendra Kurnia CV.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        //Animasi nav link
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop - sectionHeight / 3) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active-link', 'inactive-link');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.add('active-link');
                    } else {
                        link.classList.add('inactive-link');
                    }
                });
            });

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>