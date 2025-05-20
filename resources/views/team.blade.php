<x-layouts.app>

    <style>
        .team-carousel-wrapper {
            max-width: 1600px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            margin-bottom: 50px
        }

        .swiper {
            overflow: hidden;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
        }

        .team-item {
            width: 100%;
            max-width: 650px;
        }

        .team-photo {
            width: 100%;
            height: 400px;
            /* Grande taille comme demandé */
            object-fit: cover;
            border-radius: 10px;
            box-shadow: none;
        }

        .custom-swiper-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            z-index: 10;
            display: flex;
            justify-content: space-between;
            padding: 0 15px;
        }

        .custom-prev,
        .custom-next {
            background-color: #0f4229;
            color: white;
            border: none;
            border-radius: 50%;
            width: 42px;
            height: 42px;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-prev:hover,
        .custom-next:hover {
            background-color: #0f4229b5;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Notre Équipe</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Équipe</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="fs-5 fw-bold text-primary border-bottom d-inline-block">Notre Équipe</p> -->
                <h1 class="display-5 mb-5">Des Femmes et Hommes D'Expériences</h1>
            </div>
        </div>
    </div>


    <!-- Team Start -->
    <!-- Swiper Carousel Start -->
    <div class="team-carousel-wrapper">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="team-item">
                        <img class="img-fluid" src="img/image/dg-photo.jpg" alt="">
                        <div class="team-text mt-3">
                            <h4 class="mb-0">Philippe A.A. BOCCO</h4>
                            <p class="text-primary">Président du Directoire ACL</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="team-item">
                        <img class="img-fluid" src="img/image/secretaire-photo.jpg" alt="">
                        <div class="team-text mt-3">
                            <h4 class="mb-0">Madame Bocco HOUNME</h4>
                            <p class="text-primary">Directrice ACL</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="team-item">
                        <img class="img-fluid" src="img/image/technique directeur-photo.jpg" alt="">
                        <div class="team-text mt-3">
                            <h4 class="mb-0">Jules Ahehe HENO</h4>
                            <p class="text-primary">Chef Mission</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-item">
                        <img class="img-fluid" src="img/image/dg-photo.jpg" alt="">
                        <div class="team-text mt-3">
                            <h4 class="mb-0">Philippe A.A. BOCCO</h4>
                            <p class="text-primary">Président du Directoire ACL</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-item">
                        <img class="img-fluid" src="img/image/secretaire-photo.jpg" alt="">
                        <div class="team-text mt-3">
                            <h4 class="mb-0">Madame Bocco HOUNME</h4>
                            <p class="text-primary">Directrice ACL</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-item">
                        <img class="img-fluid" src="img/image/technique directeur-photo.jpg" alt="">
                        <div class="team-text mt-3">
                            <h4 class="mb-0">Jules Ahehe HENO</h4>
                            <p class="text-primary">Chef Mission</p>
                        </div>
                    </div>
                </div>



            

                <!-- Ajouter d'autres slides ici -->

            </div>

            <!-- Custom nav -->
            <div class="custom-swiper-nav">
                <button class="custom-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="custom-next"><i class="fas fa-chevron-right"></i></button>
            </div>

            <div class="swiper-pagination mt-3"></div>
        </div>
    </div>

    <!-- Swiper Carousel End -->


    <!-- Team End -->

    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 3,
            loop: true,
            centeredSlides: false, // pas nécessaire si on gère l'espacement avec le wrapper
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".custom-next",
                prevEl: ".custom-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                },
                1024: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                }
            }
        });
    </script>


</x-layouts.app>
