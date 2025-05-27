<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">CONTACTEZ-NOUS</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texte d'introduction -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Contactez-nous</p>
                    <h1 class="display-5 mb-4">Nous sommes là pour répondre à vos questions</h1>
                    <p class="mb-4">N'hésitez pas à nous contacter pour toute question ou demande d'information. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                    
                    <div class="row">
                        <!-- Contact Togo -->
                        <div class="col-md-6 mb-4">
                            <h6 class="fw-bold">📍 ACL Togo</h6>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Zone portuaire</li>
                                <li class="mb-2"><i class="fa fa-phone-alt text-primary me-2"></i>+228 90 47 67 17</li>
                                {{-- <li><i class="fa fa-envelope text-primary me-2"></i>contact@africaconsultingleaders.com</li> --}}
                            </ul>
                        </div>
                
                        <!-- Contact Bénin -->
                        <div class="col-md-6 mb-4">
                            <h6 class="fw-bold">📍 ACL Bénin</h6>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Cotonou, Aibatin 1</li>
                                <li class="mb-2"><i class="fa fa-phone-alt text-primary me-2"></i>+229 01 65 50 02 56</li> <!-- Exemple de numéro béninois -->
                                {{-- <li><i class="fa fa-envelope text-primary me-2"></i>benin@africaconsultingleaders.com</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
                                    <label for="name">Votre nom</label>
                                    <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                                    <label for="email">Votre email</label>
                                    <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Sujet" required>
                                    <label for="subject">Sujet</label>
                                    <div class="invalid-feedback">Veuillez entrer un sujet.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Votre message" id="message" style="height: 150px" required></textarea>
                                    <label for="message">Votre message</label>
                                    <div class="invalid-feedback">Veuillez entrer votre message.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4 w-100" type="submit">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>


                <!-- Présentation vidéo des bureaux -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="fw-bold">Découvrez nos bureaux</h2>
                            <p class="text-muted">Un aperçu de nos espaces de travail à Cotonou et Lomé</p>
                        </div>
                        <div class="row g-4">
                            <!-- ACL Bénin -->
                            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="ratio ratio-16x9 rounded shadow">
                                    <iframe src="https://www.youtube.com/embed/GZplf_Ri18do" title="ACL Bénin" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                                <h5 class="mt-3 text-center">📍 Bureau ACL – Bénin (Cotonou)</h5>
                            </div>
                
                            <!-- ACL Togo -->
                            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                                <div class="ratio ratio-16x9 rounded shadow">
                                    <iframe src="https://www.youtube.com/embed/GZplf_Ri18od" title="ACL Togo" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                                <h5 class="mt-3 text-center">📍 Bureau ACL – Togo (Zone portuaire)</h5>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Carte Google Maps -->
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4657.908467163153!2d1.2703341546402986!3d6.142736234308809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e1aaf428088b%3A0x8f5853a10ee60186!2sAFRICA%20CONSULTING%20LEADERS%20(ACL)!5e0!3m2!1sfr!2stg!4v1742839283606!5m2!1sfr!2stg"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layouts.app>