<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">NOS PROJETS</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projets</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
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
            <h1 class="display-5 mb-5">Nos Projets Récents</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">Tout</li>
                    <li class="mx-2" data-filter=".first">Projets Terminés</li>
                    <li class="mx-2" data-filter=".second">Projets En Cours</li>
                </ul>
            </div>
        </div>
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
                               data-title="NSC Nigéria"
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

</x-layouts.app>