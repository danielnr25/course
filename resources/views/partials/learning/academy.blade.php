<div class="academy">
    @guest
    <div class="row">
        <div class="column">
            <h2>Calidad academica con TEACH ME</h2>
            <h3>Encuentra miles de cursos sobre diferentes temáticas según tu preferencia y necesidad, elige tu docente, elige tu modalidad, elige tu horario y comienza tu aprendizaje, esto es Teach Me!</h3>

            <a href="#" id="register-button" class="register-btn regis-btn">{{ __("Registrarse") }}</a>
            @include('partials.learning.modals.register')
        </div>
        <div class="column">
            <img src="img/registrate.png" alt="">
        </div>

    </div>
    @else
    <div class="banner-img">
        <img src="img/banner.png" alt="">
    </div>
    @endguest
</div>


<script>
    @if(session('error-register'))
    $("#register-modal").modal();
    @endif
    jQuery("#register-button").on("click", function(e) {
        e.preventDefault();
        $("#register-modal").modal();
    })
</script>
