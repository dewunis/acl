<header>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                {{-- <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+228 90 04 54 94</span>
                </div> --}}
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>contact@africaconsultingleaders.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Suivez-nous :</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://x.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="https://www.linkedin.com/"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-1 px-lg-2">
            <img src="/img/logo/logo.png" alt="Icon" style="width: 60px; height: 60px;objet-fit: cover;margin-left: 20px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto px-4">
                <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">ACCUEIL</a>
                <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">A PROPOS</a>
                <a href="/service" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">NOS SERVICES</a>
                <a href="/project" class="nav-item nav-link {{ Request::is('project') ? 'active' : '' }}">NOS PROJETS</a>
                {{-- <a href="/team" class="nav-item nav-link {{ Request::is('team') ? 'active' : '' }}">NOTRE EQUIPE</a> --}}
                

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PLUS</a>
                    <div class="dropdown-menu bg-light m-0">
                        {{-- <a href="/reference" class="dropdown-item">REFERENCES</a> --}}
                        <a href="/offer" class="dropdown-item">OFFRES D'EMPLOI</a>
                        <a href="/actus" class="dropdown-item">ACTUALITES</a>
                        {{-- <a href="/team" class="dropdown-item">NOTRE EQUIPE</a> --}}
                        <!--<a href="404.html" class="dropdown-item">404 Page</a>-->
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">CONTACT</a>
            </div>
            {{-- <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block"
                style="font-weight: bold">SECRETARIAT<i class="fa fa-arrow-right ms-3"></i></a> --}}
        </div>
    </nav>
    <!-- Navbar End -->
</header>
