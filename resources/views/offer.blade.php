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
                ],
                (object)[
                    'title' => 'Assistant Administratif',
                    'location' => 'Cotonou, Bénin',
                    'created_at' => now()->subDays(3),
                ],
                (object)[
                    'title' => 'Développeur Web Full Stack',
                    'location' => 'Remote',
                    'created_at' => now()->subWeek(),
                ],
                (object)[
                    'title' => 'Responsable RH',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(2),
                ],
                (object)[
                    'title' => 'UX/UI Designer',
                    'location' => 'Cotonou, Bénin',
                    'created_at' => now()->subDays(5),
                ],
                (object)[
                    'title' => 'Comptable Senior',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(6),
                ],
                (object)[
                    'title' => 'Chef de Projet Digital',
                    'location' => 'Remote',
                    'created_at' => now()->subDays(4),
                ],
                (object)[
                    'title' => 'Community Manager',
                    'location' => 'Cotonou, Bénin',
                    'created_at' => now()->subDays(2),
                ],
                (object)[
                    'title' => 'Assistant Logistique',
                    'location' => 'Lomé, Togo',
                    'created_at' => now()->subDays(7),
                ],
                (object)[
                    'title' => 'Consultant en Stratégie',
                    'location' => 'Remote',
                    'created_at' => now()->subDays(1),
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
                            <h5 class="card-title mb-1">{{ $job->title }}</h5>
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

</x-layouts.app>
