<!-- Hero section -->
<section class="hero-section set-bg">
    <div class="container">
        <div class="hero-banner">
            <img src="/img/banner.jpg" alt="" width="1340" height="400">
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Lo ultimo en Aprendizaje</h1>
            @guest
                <p class="hero-subtitle">
                    {{ __("Inicia sesión para obtener ofertas en cursos y mantener al día las habilidades que necesitas. Las rebajas terminan mañana.") }}
                </p>
            @else
                <p class="hero-subtitle">
                    {{ __("Bienvenido a la mejor plataforma de aprendizaje en linea, disfruta de los cursos que tenemos para ti, con los mejores docentes.") }}
                </p>
            @endguest
        </div>
        @guest

        @else
            <h2 class="welcome">
                {{ __("Empecemos a aprender; :user", ['user' => auth()->user()->name]) }}
            </h2>
        @endguest
    </div>
</section>
<!-- Hero section end -->
