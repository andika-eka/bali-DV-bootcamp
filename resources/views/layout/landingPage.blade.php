<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Bali Destination</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#" class="logo">Digital <span>Destination</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="#" class="menu-link active">Home</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Services</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Destination</a></li>
                        <!-- <li class="menu-item"><a href="#" class="menu-link">About us</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Contact</a></li> -->
                    </ul>
                    <a href="#" class="btn-member">Login</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>

        <section class="home" id="home">
            <div class="container home-wrapper">
                <div class="content-left" data-aos="fade-right">
                    <h1 class="heading">Looking for favorite destination in bali with Digital<span>Destination</span></h1>
                    <p class="subheading">We have partners with several destinations that you
                        might feel at home there, we will guide you with our best service.</p>
                    
                </div>
                <div class="content-right" data-aos="fade-left">
                    <div class="img-wrapper">
                        <img src="{{asset('img/hero-tavel.png')}}" alt="">
                    </div>
                </div>

            </div>
        </section>
    </header>

    <!-- Service Start -->
    <section class="service">
        <div class="container service-wrapper">
            <div class="row1">
                <p class="label-service">What we serve</p>
                <h1 class="heading-service">Top Values For You</h1>
                <p class="subheading-service">The best service that will be with you every time</p>
            </div>
            <div class="row2" data-aos="fade-up">
                <div class="box-service">
                    <i class='bx bx-current-location'></i>
                    <h3>Lot of Choises</h3>
                    <p>Total of more than 100 destinations
                        in various palce in bali
                        become partners with us</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-bank'></i>
                    <h3>tourist village</h3>
                    <p>we have tourist village for recomendation place to visit</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bx-food-menu'></i>
                    <h3>Restaurant</h3>
                    <p>We have more than 500 restaurant and traditional food for you</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="box-service">
                    <i class='bx bxs-hotel'></i>
                    <h3>Luxury Hotel</h3>
                    <p>We also provide lodging near the
                        destination where you are visiting.</p>

                    <div class="btn-learn">
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- ini konten utama -->
    <!-- Produk start -->
    <section class="produk">
        <div class="container produk-wrapper">
            <div class="row1">
                <div class="title-produk" data-aos="fade-right">
                    <p class="label-produk">TOP DESTINATION</p>
                    <h1 class="heading-produk">Explore Top Destination</h1>
                </div>
                <div class="toggle-slider" data-aos="fade-left">
                    <i class='bx bxs-chevron-left-circle'></i>
                    <i class='bx bxs-chevron-right-circle'></i>
                </div>
            </div>
            <div class="row2">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-produk">
                            <img src="{{asset('img/produk.png')}}" alt="">
                            <div class="detail-produk">
                                <div class="kategori">
                                    <p class="label-kategori">Beach</p>


                                </div>
                                <div class="title-card">
                                    <h1>Nama tempat, Kabupaten</h1>
                                </div>
                                <div class="review">
                                    <div class="star">
                                        <i class='bx bxs-star'></i> 5.0
                                    </div>
                                    <p>1.6k reviewer</p>
                                </div>
                                <div class="body-card">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci qui
                                        nesciunt
                                        totam
                                        vel nihil id est corporis voluptatum sunt.</p>
                                </div>
                                <div class="btn-produk">
                                    <a href="#">Detail</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk end -->

    <!-- <div class="banner1 container">
        <div class="content">
            <h1 class="heading">SPECIAL OFFER</h1>
            <h3>Family Weeked Package</h3>
            <p>Off up to 30%</p>
        </div>
        <div class="btn-book">
            <a href="#">Book Now</a>
        </div>
    </div> -->

    <!-- Statistk start -->
    <section class="statistik">
        <div class="container statistik-wrapper">
            <div class="content-img" data-aos="fade-right">
                <img src="{{asset('img/statistik.png')}}" alt="">
            </div>
            <div class="content-statis" data-aos="fade-left">
                <p class="label-statis">OUR PERFORMANCE</p>
                <h1 class="heading-statis">Most people are satisfied
                    with our service</h1>
                <p class="subheading-statis">We always provide the best service to customers,
                </p>

                <div class="angka-wrapper">
                    <div class="box-angka">
                        <h1>20</h1>
                        <p>Years
                            Experience</p>
                    </div>
                    <div class="box-angka">
                        <h1>300++</h1>
                        <p>Destination
                            Collaboration</p>
                    </div>
                    <div class="box-angka">
                        <h1>2k++</h1>
                        <p>Customers
                            Happy</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- statistik end -->

    <!-- TESTI START -->
    <section class="testi">
        <div class="container testi-wrapper">
            <div class="col-heading" data-aos="fade-right">
                <p class="label-testi">WHAT THEY SAID ?</p>
                <h1 class="heading-testi">What customers say
                    about their experience with us</h1>
                <p class="subheading-testi">They say what they feel, most of them say they are very satisfied,
                    especially satisfied because they are always guided and directed
                    to between destinations so that they are not confused, and
                    also the provision of comfortable lodging does not have
                    to pay a lot to get it all</p>
            </div>
            <div class="col-slider-testi" data-aos="fade-left">
                <!-- Swiper -->
                <div class="swiper mySwiperTesti">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-testi">
                            <img src="{{asset('img/testi.png')}}" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique esse quia officiis voluptatem. Adipisci odit culpa consectetur iusto vel repudiandae quas, deleniti eius quos ea quasi cupiditate voluptatibus quibusdam totam.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this digital destination, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this digital destination, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this digital destination, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="{{asset('img/testi.png')}}" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this digital destination, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                        <div class="swiper-slide card-testi">
                            <img src="assets/img/testi.png" alt="">
                            <div class="text-testi">
                                <i class='bx bxs-quote-left'></i>
                                <p>I am very helpful with this digital destination, because we
                                    can easily get it all without having to prepare
                                    it from afar, and also the price is affordable,
                                    highly recommended.</p>
                                <i class='bx bxs-quote-right'></i>
                            </div>
                            <p class="username">by tinyleopard720</p>
                            <p class="status">Traveller</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTI END -->

    <!-- Banner2 -->
    <section class="banner2">
        <div class="container banner2-wrapper">
            <div class="content-banner2">
                <h1 class="heading">ARE YOU NEW MEMBER FOR THIS WEBSITE? </h1>
                <p class="subheading">Let's register now and get more feature</p>
                <!-- <p class="disc">UP TO 20%</p> -->
            </div>
            <div class="btn-banner2">
                <a href="#" class="btn-regis">Register</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container footer-wrapper">
            <div class="col-1-footer">
                <h1 class="logo-footer">Digital<span>Destination</span></h1>
                <p class="subheading-footer">The best service to customers is
                    our top priority in building a business</p>
                <div class="sosmed-icon">
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                </div>
                <p class="copy">&copy;Copyright 2021 All Right Reserved </p>
            </div>
            <div class="col-2-footer">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </div>
            <!-- <div class="col-3-footer">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">Why Touravel ?</a></li>
                    <li><a href="#">Partners with us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blogs</a></li>
                </ul>
            </div> -->
            <div class="col-4-footer">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Accessbility</a></li>
                </ul>
            </div>
            <div class="col-5-footer">
                <h3>Get in touch</h3>
                <p>Questions or Feedback</p>
                <div class="form-input">
                    <input type="text" placeholder="Type your email">
                    <a href="#" class="btn-footer">Submit</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>