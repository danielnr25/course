<div class="contenido">
    <div class="row prom-ct">
        <div class="columan shadow">
            <div class="row">
                <a href="" class="virtual" onclick="alerta()">
                    <img width="30" heigth="46" style="margin-top: auto" src="https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/courses/icon-modality.svg" loading="lazy">
                    <h3>Modalidad 100% virtual</h3>
                </a>
            </div>
            <h4>El contenido está disponible las 24 horas del día para que puedas estudiar en tu propio horario.</h4>
        </div>
        <div class="columan shadow">
            <div class="row">
                <a href="" onclick="alerta2()">
                    <img width="30" heigth="46" style="margin-top: auto" src="https://d3puay5pkxu9s4.cloudfront.net/academy/iconos/courses/icon-modality.svg" loading="lazy">
                    <h3>Modalidad 100% presencial</h3>
                </a>
            </div>
            <h4>El contenido del curso lo gestionas tú, con tu grupo y el docente, mantente en contacto a través de sus medios personales!</h4>
        </div>
    </div>
</div>

@push("js")
<script>
    /* crear onclick para una alerta en el id virtual con una funcion*/

    function alerta() {
        alert("El contenido está disponible las 24 horas del día para que puedas estudiar en tu propio horario.");
    }

    function alerta2() {
        alert("El contenido del curso lo gestionas tú, con tu grupo y el docente, mantente en contacto a través de sus medios personales!");
    }
</script>
