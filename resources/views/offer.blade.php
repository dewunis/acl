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

    <!-- SECTION PRINCIPALE -->
    <div class="container py-5">

        @php
            $jobs = collect([
                (object)[
                    'title' => 'Chargé de Communication',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(1),
                    'description' => "Vous serez responsable de la communication interne et externe, de la gestion des réseaux sociaux, de l'organisation d'événements et des relations presse.",
                ],
                (object)[
                    'title' => 'Assistant Administratif',
                    'location' => 'Cotonou, Bénin',
                    'created_at' => now()->subDays(3),
                    'description' => "Nous recherchons un assistant administratif pour gérer les tâches administratives quotidiennes, la planification des réunions et le support aux équipes.",
                ],
                (object)[
                    'title' => 'Développeur Web Full Stack',
                    'location' => 'Remote',
                    'created_at' => now()->subWeek(),
                    'description' => "Vous serez en charge du développement et de la maintenance de nos applications web, en utilisant les dernières technologies front-end et back-end.",
                ],
                (object)[
                    'title' => 'Responsable RH',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(2),
                    'description' => "Nous recherchons un responsable RH pour gérer le recrutement, la formation et le développement des employés, ainsi que les relations avec les syndicats.",
                ],
                (object)[
                    'title' => 'UX/UI Designer',
                    'location' => 'Cotonou, Bénin',
                    'created_at' => now()->subDays(5),
                    'description' => "Vous serez responsable de la conception d'interfaces utilisateur intuitives et attrayantes, en collaborant étroitement avec les développeurs et les chefs de produit.",
                ],
                (object)[
                    'title' => 'Comptable Senior',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(6),
                    'description' => "Nous recherchons un comptable senior pour superviser les opérations comptables, préparer les états financiers et assurer la conformité fiscale.",
                ],
                (object)[
                    'title' => 'Chef de Projet Digital',
                    'location' => 'Remote',
                    'created_at' => now()->subDays(4),
                    'description' => "Vous serez en charge de la gestion de projets digitaux, de la planification à l'exécution, en veillant à respecter les délais et le budget.",
                ],
                (object)[
                    'title' => 'Community Manager',
                    'location' => 'Cotonou, Bénin',
                    'created_at' => now()->subDays(2),
                    'description' => "Nous recherchons un community manager pour gérer notre présence en ligne, interagir avec notre communauté et créer du contenu engageant.",
                ],
                (object)[
                    'title' => 'Assistant Logistique',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(7),
                    'description' => "Vous serez responsable de la gestion des opérations logistiques, y compris la planification des transports, la gestion des stocks et la coordination avec les fournisseurs.",
                ],
                (object)[
                    'title' => 'Consultant en Stratégie',
                    'location' => 'Remote',
                    'created_at' => now()->subDays(1),
                    'description' => "Nous recherchons un consultant en stratégie pour aider nos clients à développer des plans d'affaires efficaces, à optimiser leurs opérations et à atteindre leurs objectifs de croissance.",
                    ],
            ]);

            // Filtrage simple
            $search = request('search');
            if ($search) {
                $jobs = $jobs->filter(function ($job) use ($search) {
                    return str_contains(strtolower($job->title), strtolower($search))
                        || str_contains(strtolower($job->location), strtolower($search));
                });
            }
        @endphp

        <!-- Barre de recherche -->
        <div class="mb-4">
            <h1 class="display-5 mb-5"> 🔍 Rechercher une offre</h1>
            <form method="GET" action="{{ url()->current() }}">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Rechercher une offre d'emploie..." value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </div>
            </form>
        </div>

        <!-- Liste des Offres -->
        <div class="row">
            <div class="col-12">
                @foreach($jobs as $job)
                <div class="card mb-3">
                    <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <div>
                            <h5 class="card-title mb-1">
                                <a href="#" class="job-title-link"
                                    data-bs-toggle="modal"
                                    data-bs-target="#jobDescriptionModal"
                                    data-title="{{ $job->title }}"
                                    data-location="{{ $job->location }}"
                                    data-date="{{ $job->created_at->format('d M Y') }}"
                                    data-description="{{ $job->description }}">
                                    {{ $job->title }}
                                </a>
                            </h5>
                            <small class="text-muted">📍 {{ $job->location }} – 🗓️ Publié le {{ $job->created_at->format('d M Y') }}</small>
                        </div>
                        <div class="d-flex gap-2">
                            <!-- Postuler classique -->
                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="{{ $job->title }}">
                                Postuler
                            </button>
                
                            <!-- Postuler via LinkedIn (visible) -->
                            <!-- <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($job->title) }}" 
                               target="_blank" class="btn btn-outline-secondary btn-sm">
                                🔗 LinkedIn
                            </a> --> 
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal Postulation -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="applyModalLabel">Postuler à : <span id="jobTitleLabel"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="job_title" id="jobTitleInput">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Votre Nom</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Votre Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Votre Numéro</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomdu poste Poste</label>
                                <input type="text" class="form-control" name="position">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Joindre votre CV</label>
                                <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Motivation / Référence de l'offre</label>
                                <textarea class="form-control" name="message" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS pour injecter le titre du poste dans la modal -->
    <script>
        const applyModal = document.getElementById('applyModal');
        applyModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const jobTitle = button.getAttribute('data-job');
            document.getElementById('jobTitleLabel').textContent = jobTitle;
            document.getElementById('jobTitleInput').value = jobTitle;
        });
    </script>

    <!-- Modal Description du poste -->
    <div class="modal fade" id="jobDescriptionModal" tabindex="-1" aria-labelledby="jobDescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
        <div class="modal-header">
            <h5 class="modal-title" id="jobDescriptionModalLabel">Titre du poste</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>

        <div class="modal-body">
            <p id="jobDescriptionText"></p>
            <ul class="list-unstyled">
            <li>📍 <strong>Lieu :</strong> <span id="jobLocationText"></span></li>
            <li>🗓️ <strong>Publié le :</strong> <span id="jobDateText"></span></li>
            </ul>
        </div>

        </div>
    </div>
    </div>

    <!-- JS pour injecter les détails du poste dans la modal -->
    <script>
        const jobDescriptionModal = document.getElementById('jobDescriptionModal');
        jobDescriptionModal.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget;

            document.getElementById('jobDescriptionModalLabel').textContent = trigger.getAttribute('data-title');
            document.getElementById('jobDescriptionText').textContent = trigger.getAttribute('data-description');
            document.getElementById('jobLocationText').textContent = trigger.getAttribute('data-location');
            document.getElementById('jobDateText').textContent = trigger.getAttribute('data-date');
        });
    </script>


</x-layouts.app>
