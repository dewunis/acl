<x-layouts.app>

    <!-- Fil d'Actualité -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Actualités</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active"><a href="#">Actualités</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Détail de l'article</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Inclure GLightbox CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    <main class="main-content">
        <article>
            <header class="article-header">
                <h1 class="article-title">Africa Consulting Leaders célèbre la fête du travail avec esprit d’équipe et convivialité à Aného</h1>
                <div class="article-meta">
                    <span><i>📅</i> Publié le 1er Mai 2025</span>
                    <span><i>👤</i> Par ACL Communications</span>
                    <span><i>🏷️</i> ACL, Fête du travail, Cohésion d’équipe</span>
                </div>
                <img src="/img/actus/actus13.jpg" alt="Fête du travail ACL Aného" class="article-image-actus">
            </header>

            <div class="article-content">
                <p>Le 1er mai 2025, Africa Consulting Leaders (ACL) a réuni ses collaborateurs pour une journée mémorable placée sous le signe du travail, de la solidarité et du partage. L’événement s’est déroulé à l’hôtel Régina, à Aného, offrant un cadre idéal pour renforcer les liens au sein de cette entreprise togolaise innovante.</p>

                <p>La matinée a été lancée avec un match de football animé, véritable catalyseur de cohésion et d’esprit d’équipe. Ce moment sportif a permis aux membres de l’équipe ACL de se dépasser ensemble, tout en partageant des instants de joie et de camaraderie loin du cadre professionnel habituel.</p>

                <!-- Galerie photos avec lightbox -->
                <div class="article-gallery" style="display: flex; gap: 10px; flex-wrap: wrap; margin: 20px 0;">
                    <a href="/img/actus/actus15.jpg" class="glightbox" data-gallery="article-photos" data-title="Match de football ACL">
                        <img src="/img/actus/actus15.jpg" alt="Match de football ACL" style="width: 120px; border-radius: 6px; cursor: pointer;">
                    </a>
                </div>

                <p>Au déjeuner, le Président du directoire d’ACL a pris la parole pour un discours inspirant, rappelant les valeurs fondamentales qui guident l’entreprise : le travail rigoureux, l’engagement sans faille et la solidarité entre collaborateurs. Il a souligné combien ces principes sont essentiels pour continuer à porter la vision d’ACL en tant que leader de la transformation digitale au Togo et en Afrique de l’Ouest.</p>

                <!-- Galerie photos avec lightbox -->
                <div class="article-gallery" style="display: flex; gap: 10px; flex-wrap: wrap; margin: 20px 0;">
                    <a href="/img/actus/actus17.jpg" class="glightbox" data-gallery="article-photos" data-title="Match de football ACL">
                        <img src="/img/actus/actus17.jpg" alt="Match de football ACL" style="width: 120px; border-radius: 6px; cursor: pointer;">
                    </a>
                </div>

                <p>Cette sortie conviviale a ainsi marqué un temps fort dans la vie d’ACL, renforçant la cohésion interne et l’esprit communautaire. Plus qu’une simple fête, cette célébration du 1er mai a rappelé l’importance du collectif pour relever les défis et bâtir un avenir innovant.</p>

                <p>Africa Consulting Leaders confirme ainsi son engagement à valoriser son capital humain et à cultiver un environnement de travail harmonieux, où la performance rime avec bien-être et solidarité.</p>
 
                <!-- Galerie photos avec lightbox -->
                <div class="article-gallery" style="display: flex; gap: 10px; flex-wrap: wrap; margin: 20px 0;">
                    <a href="/img/actus/actus16.jpg" class="glightbox" data-gallery="article-photos" data-title="Match de football ACL">
                        <img src="/img/actus/actus16.jpg" alt="Match de football ACL" style="width: 120px; border-radius: 6px; cursor: pointer;">
                    </a>
                </div>

            </div>

            <div class="share-article">
                <h3 class="share-title">Partager cet article</h3>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/" class="share-button facebook rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/" class="share-button twitter rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/" class="share-button linkedin rounded-circle me-2"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="share-button whatsapp"><i class="fab fa-whatsapp rounded-circle me-2"></i></a>
                </div>
            </div>
            

            <a href="/actus" class="back-to-news">← Retour aux actualités</a>
        </article>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            GLightbox({
                selector: '.glightbox',
            });
        });
    </script>

</x-layouts.app>
