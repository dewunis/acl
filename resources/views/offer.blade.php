<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Offres d'Emploi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Offres d'emploi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


  <!-- Quote Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Rejoignez Notre Équipe de passionnés</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s" enctype="multipart/form-data" method="POST" action="#">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="gname" placeholder="Votre Nom" name="name" required>
                                <label for="gname">Votre Nom</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" id="gmail" placeholder="Votre Email" name="email" required>
                                <label for="gmail">Votre Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="cname" placeholder="Votre Numéro" name="phone">
                                <label for="cname">Votre Numéro de Téléphone</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="cage" placeholder="Type de Poste" name="position">
                                <label for="cage">Type de Poste</label>
                            </div>
                        </div>

                        <style>
                            .custom-file-upload {
                                display: inline-block;
                                padding: 12px 20px;
                                cursor: pointer;
                                background-color: #ffff;
                                color: #555;
                                border-radius: 5px;
                                width: 100%;
                            }
                            #cv {
                                display: none;
                            }
                            .file-name {
                                margin-top: 10px;
                                color: #555;
                            }
                        </style>

                        <!-- Nouveau champ pour le CV -->
                        <div class="col-12">
                            <label for="cv" class="custom-file-upload">📎 Joindre mon CV</label>
                            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                            <p id="file-name" class="file-name">Aucun fichier sélectionné</p>
                        </div>

                        <script>
                            const fileInput = document.getElementById("cv");
                            const fileNameDisplay = document.getElementById("file-name");
                        
                            fileInput.addEventListener("change", function () {
                                const fileName = this.files[0] ? this.files[0].name : "Aucun fichier sélectionné";
                                fileNameDisplay.textContent = fileName;
                            });
                        </script>

                        <!-- Champ message mis à jour -->
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0" placeholder="Décrivez le poste recherché ou la motivation de votre candidature" id="message" name="message" style="height: 120px"></textarea>
                                <label for="message">Motivation ou référence de l’offre</label>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn btn-primary py-3 px-4" type="submit">Soumettre maintenant</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

</x-layouts.app>