<x-layouts.app>
    <!-- Page Header Start -->
    <div class="container-fluid page-header pt-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">VIDÉOTHÈQUE</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vidéothèque</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Video Start -->
    <section id="videotheque" style="padding: 60px 20px; background-color: #f4f4f4;">
        <div style="max-width: 1200px; margin: auto;">
            <h2 style="text-align: center; font-size: 2.5rem; color: #003f2d; margin-bottom: 40px;">Notre Vidéothèque</h2>
            
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            <!-- Vidéo 1 -->
            <div style="flex: 1 1 300px; background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                <video controls style="width: 100%; border-radius: 6px;">
                <source src="video1.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
                </video>
                <p style="margin-top: 10px; text-align: center;">Présentation bureau Togo</p>
            </div>

            <!-- Vidéo 2 -->
            <div style="flex: 1 1 300px; background: #fff; border-radius: 8px; padding: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                <video controls style="width: 100%; border-radius: 6px;">
                <source src="video2.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
                </video>
                <p style="margin-top: 10px; text-align: center;">Présentation bureau Bénin</p>
            </div>
            </div>
        </div>
    </section>
    <!-- Video End -->
</x-layouts.app>