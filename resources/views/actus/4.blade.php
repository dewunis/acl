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
                <h1 class="article-title">Une date historique pour le Port autonome de Lomé</h1>
                <div class="article-meta">
                    <span><i>📅</i> Publié le 6 Mai 2025</span>
                    <span><i>👤</i> Par ACL Communications</span>
                    <span><i>🏷️</i> Port autonome de Lomé, Transformation digitale, Logistique</span>
                </div>
                <img src="/img/actus/actus14.jpg" alt="Accostage du plus grand porte-conteneurs en Afrique" class="article-image-actus">
            </header>

            <div class="article-content">
                <p>Le 6 mai 2025 marque un tournant majeur pour le Port autonome de Lomé (PAL) et Africa Consulting Leaders (ACL), acteur clé de la transformation digitale du port. Ce jour-là, le plus grand navire porte-conteneurs jamais accueilli en Afrique a accosté sur les quais togolais : un géant de 400 mètres de long capable de transporter jusqu’à 24 000 EVP (équivalents vingt pieds).</p>

                <h2>Présence symbolique du Président d’ACL</h2>
                <p>Le Président d’ACL a honoré l’événement en assistant à la cérémonie officielle d’accostage. Ce geste souligne l’importance de cet exploit pour le PAL, qui confirme son positionnement comme hub logistique stratégique en Afrique de l’Ouest.</p>

                <!-- Galerie photos avec lightbox -->
                <div class="article-gallery" style="display: flex; gap: 10px; flex-wrap: wrap; margin: 20px 0;">
                    <a href="/img/actus/actus18.jpg" class="glightbox" data-gallery="article-photos" data-title="Le géant des mers accosté à Lomé">
                        <img src="/img/actus/actus18.jpg" alt="Navire géant" style="width: 120px; border-radius: 6px; cursor: pointer;">
                    </a>
                </div>

                <h2>Contribution technologique d’ACL</h2>
                <p>Grâce à ses solutions numériques innovantes, ACL joue un rôle essentiel dans l’optimisation des opérations portuaires, facilitant l’accueil de navires de cette envergure dans des conditions fluides et sécurisées.</p>

                <div class="article-gallery" style="display: flex; gap: 10px; flex-wrap: wrap; margin: 20px 0;">
                    <a href="/img/actus/actus19.jpg" class="glightbox" data-gallery="article-photos" data-title="Cérémonie officielle d’accostage">
                        <img src="/img/actus/actus19.jpg" alt="Cérémonie officielle" style="width: 120px; border-radius: 6px; cursor: pointer;">
                    </a>
                </div>

                <h2>Une avancée pour la compétitivité du Togo</h2>
                <p>Cet accostage historique illustre la réussite de la stratégie numérique portée par ACL et ses partenaires, renforçant la compétitivité du port de Lomé et son rayonnement sur la scène continentale et internationale.</p>

                <div class="article-gallery" style="display: flex; gap: 10px; flex-wrap: wrap; margin: 20px 0;">
                    <a href="/img/actus/actus20.jpg" class="glightbox" data-gallery="article-photos" data-title="Présence du Président d’ACL">
                        <img src="/img/actus/actus20.jpg" alt="Président ACL" style="width: 120px; border-radius: 6px; cursor: pointer;">
                    </a>
                </div>

                <h2>ACL, pilier de la digitalisation portuaire africaine</h2>
                <p>Avec cette nouvelle étape franchie, ACL confirme son rôle central dans la modernisation et la performance des infrastructures portuaires africaines, accompagnant le Togo vers un avenir logistique digitalisé et performant.</p>
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
