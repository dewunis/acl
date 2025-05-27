<x-layouts.app>

    <!-- Carousel Start -->
    <div class="container-fluid wow fadeIn carousel-container" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Vidéo en arrière-plan -->
                    <video class="nectar-video-bg nectar-lazy-video loaded" autoplay muted loop playsinline
                        loading="lazy">
                        <source src="https://gorgeous-crisp-7e7328.netlify.app/acl01.mp4"
                            type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>

                    <!-- Contenu superposé -->
                    <div class="carousel-caption">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h6 class="display-1 text-white mb-5 animated slideInDown">
                                        <span>VOTRE PARTENAIRE <br></span>
                                        <span style="font-size:20px" class="small-text">POUR LA</span>
                                        <span style="color:#92ae57" class="small-text">TRANSFORMATION</span> <br>
                                        <span style="color: #92ae57;" class="small-text">DIGITALE </span>
                                        <span class="small-text">DE VOS PORTS</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bouton de volume -->
            <div id="btn_sound" onclick="btnsound();" aria-label="Activer/Désactiver le son">
                <svg id="svg_unmute" style="color: rgb(146, 174, 87);" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-volume-down" viewBox="0 0 16 16">
                    <path
                        d="M9 4a.5.5 0 0 0-.812-.39L5.825 5.5H3.5A.5.5 0 0 0 3 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 9 12V4zM6.312 6.39 8 5.04v5.92L6.312 9.61A.5.5 0 0 0 6 9.5H4v-3h2a.5.5 0 0 0 .312-.11zM12.025 8a4.486 4.486 0 0 1-1.318 3.182L10 10.475A3.489 3.489 0 0 0 11.025 8 3.49 3.49 0 0 0 10 5.525l.707-.707A4.486 4.486 0 0 1 12.025 8z"
                        fill="#92ae57"></path>
                </svg>
                <svg id="svg_mute" style="color: rgb(146, 174, 87); display: none;" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-volume-mute" viewBox="0 0 16 16">
                    <path
                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04 4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04zm7.854.606a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z"
                        fill="#92ae57"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4 style="font-size: 18px;">DISPONIBLE 24H/24 7J/7</h4>
                                <!--<span>Clita erat ipsum lorem sit sed stet duo justo</span>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-times text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4 style="font-size: 20px;">FORMATION</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4 style="font-size: 22px;">SYSTÈME D'INFORMATION PORTUAIRE ÉTENDU SIPE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4 style="font-size: 18px;">RENFORCEMENT DE CAPACITÉS TECHNIQUES ET COMPÉTENCES MÉTIERS
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4 style="font-size: 20px;">PLATEFORME FINTEC SYSTEME DE PAIEMENT EN LIGNE OSIPAYE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/image/dg-photo.jpg"
                        style="height: 430px;">
                </div>
                <div class="col-lg-5 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">+40</h1>
                    <h4 class="text-primary mb-4 border-bottom d-inline-block">Années d'Expériences</h4>
                    <h2 class="display-8 mb-4">NOUS CUMULONS PLUS DE 40 ANS D'EXPÉRIENCES</h2>
                    <p class="mb-4">Africa Consulting Leaders (ACL) fournit aux ports et aux acteurs de la chaine
                        logistique de transport des solutions digitales des platefomes métiers en environnement web
                        associés à des outils FINTEC pour des services de paiement en ligne via des canaux de banque et
                        mobile money.</p>
                    <a class="btn btn-primary py-3 px-4" href="/project">Nos Projets</a>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">+ DE 100 PROJETS</h4>
                                <span>Nous avons réalisé avec succès plus de 100 projets innovants, apportant des
                                    solutions digitales.</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">CAPACITY BUILDING</h4>
                                <h6 class="text-primary mb-4 border-bottom d-inline-block">Concession Centre Formation Professionnelle : 
                                    <br>AGPAOC Septembre 2018</h6>
                                    <br>
                                <span>Co-Fondateur de l'Institut des Métiers de la Mer (I2M) - Décembre 2015 - Université de Lomé et Port de Lomé.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Animation de fond logo -->
    <div class="digital-wall" data-parallax="scroll"
    data-image-src="img/image/port-de-lome.jpg">
        <div class="logos-container">
            <!-- Logo Port (haut gauche) -->
            <div class="logo-wrapper port">
                <img src="img/logo/logo-port-lome.jpg" alt="Port" class="logo">
            </div>
            
            <!-- Logo Université de Lomé (haut droit) -->
            <div class="logo-wrapper ul">
                <img src="img/logo/utl-lome.jpg" alt="Université de Lomé" class="logo">
            </div>
            
            <!-- Logo I2M (centre) -->
            <div class="logo-wrapper i2m">
                <img src="img/logo/logo-i2m.jpg" alt="I2M" class="logo">
            </div>
            
            <!-- Logo ACL (bas centre) -->
            <div class="logo-wrapper acl">
                <img src="img/icon/logo-ACL.png" alt="ACL" class="logo">
            </div>
            
            <!-- Lignes de connexion -->
            <svg class="connection-lines" viewBox="0 0 100 100" preserveAspectRatio="none">
                <!-- Ligne Port vers I2M -->
                <path class="line port-i2m" d="M10,20 Q50,30 50,50" />
                
                <!-- Ligne UL vers I2M -->
                <path class="line ul-i2m" d="M90,20 Q50,30 50,50" />
                
                <!-- Ligne I2M vers ACL -->
                <path class="line i2m-acl" d="M50,50 Q50,70 50,80" />

                <defs>
                    <linearGradient id="line-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#00f2ff" />
                        <stop offset="100%" stop-color="#0066ff" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
    <!-- Animation de fond logo End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll"
        data-image-src="img/image/acl-groupe-photo.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">50</h1>
                    <span class="fs-5 fw-semi-bold text-light">Clients Satisfaits</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">100</h1>
                    <span class="fs-5 fw-semi-bold text-light">Entreprises</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">80</h1>
                    <span class="fs-5 fw-semi-bold text-light">Partenaires</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">115</h1>
                    <span class="fs-5 fw-semi-bold text-light">Projets</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <p class="fs-5 fw-bold text-primary border-bottom d-inline-block">Pourquoi Nous Choisir ?</p> --}}
                    <h1 class="display-10 mb-4">Pourquoi Choisir ACL ?</h1>
                    <p class="mb-4">Nos équipes d’experts nationaux et internationaux sont mobilisables en fonction
                        de
                        vos besoins. Nous vous accompagnons dans vos activités en vous garantissant la permanence des
                        services et la proximité du partenaire que nous sommes à travers notre présence dans toute la
                        sous-région.</p>
                    {{-- <a class="btn btn-primary py-3 px-4" href="">Voir Plus</a> --}}
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4"
                                        style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                            style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">100% de Satisfaction</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4"
                                        style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                            style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Équipe Dévouée</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                    style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Équipments Modernes</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

        <!-- Projects Start -->
    <!-- Style pour agrandir la modal -->
    <style>
        /* Agrandir la taille de la modal */
        .modal-dialog {
            max-width: 90%; /* Laisse la modale occuper 90% de la largeur de l'écran */
            width: 80%; /* 80% de la largeur totale */
        }

        .modal-content {
            height: 75vh; /* Limite la hauteur à 75% de la hauteur de la fenêtre */
            max-height: 100%; /* Empêche la modale de dépasser la taille de l'écran */
            display: flex;
            flex-direction: column;
        }

        /* Pour éviter que la vidéo dépasse de la modale */
        #projectVideo {
            height: 100%; /* Remplir la hauteur de la modale */
            width: 100%;  /* Remplir la largeur de la modale */
            object-fit: contain; /* Assure que la vidéo s'ajuste à la taille sans la déformer */
        }

        /* Assure que le contenu de la modale s'adapte à la taille de la vidéo */
        .modal-body {
            padding: 0;
        }
    </style>

 <!-- Projects Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Nos Projets</h1>
        </div>
        {{-- <div class="row">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Tout</li>
                    <li class="mx-2" data-filter=".first">Projets Terminés</li>
                    <li class="mx-2" data-filter=".second">Projets En Cours</li>
                </ul>
            </div>
        </div> --}}
        <div class="row g-4 portfolio-container">
            <!-- Projet GUFORD -->
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="/img/projects/guford001.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">GUFORD</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2 video-btn" 
                               data-bs-toggle="modal" 
                               data-bs-target="#videoModal"
                               data-title="GUFORD"
                               data-video="https://gorgeous-crisp-7e7328.netlify.app/guford01.mp4">
                                <i class="fa fa-eye"></i>
                            </a>
                            {{-- <a class="btn btn-lg-square rounded-circle mx-2" href="#"><i class="fa fa-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projet NSC Nigéria -->
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="/img/projects/nsc001.jpeg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Formation CFP</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2 video-btn" 
                               data-bs-toggle="modal" 
                               data-bs-target="#videoModal"
                               data-title="Formation(s) CFP"
                               data-video="https://gorgeous-crisp-7e7328.netlify.app/formation%20cfp%20acl01.mp4">
                                <i class="fa fa-eye"></i>
                            </a>
                            {{-- <a class="btn btn-lg-square rounded-circle mx-2" href="#"><i class="fa fa-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projet BUSHRAN -->
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="/img/projects/bushran001.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">BUSHRAN</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2 video-btn" 
                               data-bs-toggle="modal" 
                               data-bs-target="#videoModal"
                               data-title="BUSHRAN"
                               data-video="https://gorgeous-crisp-7e7328.netlify.app/bushran01.mp4">
                                <i class="fa fa-eye"></i>
                            </a>
                            {{-- <a class="btn btn-lg-square rounded-circle mx-2" href="#"><i class="fa fa-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="text-center mt-5">
        <a class="btn btn-primary py-3 px-4" href="/project">Voir Plus</a>
    </div>
</div>
<!-- Projects End -->

<!-- Modale pour afficher la vidéo -->
<div id="videoModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoTitle">Titre du projet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <video id="projectVideo" controls class="w-100">
                    <source src="" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture vidéo.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const videoButtons = document.querySelectorAll(".video-btn");
        const modalTitle = document.getElementById("videoTitle");
        const videoElement = document.getElementById("projectVideo");
        const videoSource = videoElement.querySelector("source");
        const videoModal = document.getElementById("videoModal");

        videoButtons.forEach(button => {
            button.addEventListener("click", function () {
                const videoSrc = this.getAttribute("data-video");
                const title = this.getAttribute("data-title");

                modalTitle.innerText = title; // Met à jour le titre
                videoSource.src = videoSrc;  // Change la vidéo
                videoElement.load();         // Recharge la vidéo
                videoElement.play();         // Joue automatiquement
            });
        });

        // Arrêter la vidéo quand on ferme la modale
        videoModal.addEventListener("hidden.bs.modal", function () {
            videoElement.pause();
            videoElement.currentTime = 0; // Remet la vidéo au début
        });
    });
</script>
        <!-- Projects End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                {{-- <p class="fs-5 fw-bold text-primary border-bottom d-inline-block">Nos Services</p> --}}
                <h1 class="display-5 mb-5">Nos Services</h1>
            </div>
            <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="/img/services/service001.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="d-flex justify-content-center align-items-center rounded-circle bg-white shadow mx-auto mb-3" style="width: 80px; height: 80px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#348E38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-cog-icon lucide-user-cog">
                                    <circle cx="18" cy="15" r="3"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M10 15H6a4 4 0 0 0-4 4v2"/>
                                    <path d="m21.7 16.4-.9-.3"/>
                                    <path d="m15.2 13.9-.9-.3"/>
                                    <path d="m16.6 18.7.3-.9"/>
                                    <path d="m19.1 12.2.3-.9"/>
                                    <path d="m19.6 18.7-.4-1"/>
                                    <path d="m16.8 12.3-.4-1"/>
                                    <path d="m14.3 16.6 1-.4"/>
                                    <path d="m20.7 13.8 1-.4"/>
                                </svg>
                            </div>
                            <h4 class="mb-3">Accompagnement</h4>
                            <p class="mb-4">
                                Nous sommes à vos côtés à chaque étape de votre projet. Conseil, stratégie, pilotage : nous transformons vos idées en résultats concrets.
                            </p>
                            <a class="btn btn-sm" href="/service/1"><i class="fa fa-plus text-primary me-2"></i>Voir Plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="/img/services/service002.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="d-flex justify-content-center align-items-center rounded-circle bg-white shadow mx-auto mb-3" style="width: 80px; height: 80px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#348E38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="16" y="16" width="6" height="6" rx="1"/>
                                    <rect x="2" y="16" width="6" height="6" rx="1"/>
                                    <rect x="9" y="2" width="6" height="6" rx="1"/>
                                    <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/>
                                    <path d="M12 12V8"/>
                                </svg>
                            </div>
                            <h4 class="mb-3">Digitalisation</h4>
                            <p class="mb-4">
                                Boostez votre performance avec des outils digitaux puissants et innovants. Gagnez en efficacité, fluidifiez vos opérations et optimisez vos processus.
                            </p>
                            <a class="btn btn-sm" href="/service/2"><i class="fa fa-plus text-primary me-2"></i>Voir Plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="/img/services/service003.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="d-flex justify-content-center align-items-center rounded-circle bg-white shadow mx-auto mb-3" style="width: 80px; height: 80px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#348E38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-platter-icon lucide-hand-platter">
                                    <path d="M12 3V2"/>
                                    <path d="m15.4 17.4 3.2-2.8a2 2 0 1 1 2.8 2.9l-3.6 3.3c-.7.8-1.7 1.2-2.8 1.2h-4c-1.1 0-2.1-.4-2.8-1.2l-1.302-1.464A1 1 0 0 0 6.151 19H5"/>
                                    <path d="M2 14h12a2 2 0 0 1 0 4h-2"/>
                                    <path d="M4 10h16"/>
                                    <path d="M5 10a7 7 0 0 1 14 0"/>
                                    <path d="M5 14v6a1 1 0 0 1-1 1H2"/>
                                </svg>
                            </div>
                            <h4 class="mb-3">Service Après Vente</h4>
                            <p class="mb-4">
                                Notre engagement ne s’arrête pas après le déploiement. Nous restons disponibles pour assurer la continuité, la maintenance et le bon fonctionnement de vos solutions.
                            </p>
                            <a class="btn btn-sm" href="/service/3"><i class="fa fa-plus text-primary me-2"></i>Voir Plus</a>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/image/maitenance.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Maintenance </h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/image/platedigi.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-8.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Plateforme Digitale</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/image/travail.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Atelier De Travail</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read
                                More</a>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
        
        <div class="text-center mt-5">
            <a class="btn btn-primary py-3 px-4" href="/service">Voir Plus</a>
        </div>

    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary border-bottom d-inline-block">Nos Projets</p>
                <h1 class="display-5 mb-5">Certains De Nos Meilleurs Projets</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Tout</li>
                        <li class="mx-2" data-filter=".first">Projets Terminés</li>
                        <li class="mx-2" data-filter=".second">Projets En Cours</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/image/systeminformation.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">SYSTÈME D'INFORMATION</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="img/image/systeminformation.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/image/port-de-barcelona-night.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">MONITORING</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="img/image/port-de-barcelona-night.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/image/payement-en-ligne.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">PAIEMENT EN LIGNE</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="img/image/payement-en-ligne.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/image/plateforme-service.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">PLATEFORME DE SERVICES</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="img/image/plateforme-service.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/image/service-formation.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">SERVICES DE FORMATION</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="img/image/service-formation.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/image/renforcement-capacite.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">RENFORCEMENT DE CAPACITÉS</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2"
                                    href="img/image/renforcement-capacite.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Projects End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary border-bottom d-inline-block">Témoignage</p>
                    <h1 class="display-5 mb-5">Ce Que Nos Clients Disent De Nous!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                    <a class="btn btn-primary py-3 px-4" href="">Voir Plus</a>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="img/image/client-1.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                            <h4>Afi LAWSON</h4>
                            <span>Transitère</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="img/image/client-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                            <h4>Jean-Marie DUPONT</h4>
                            <span>Informaticien Réseau</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="/js/micro.js"></script>
</x-layouts.app>
