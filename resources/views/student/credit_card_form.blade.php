@extends('layouts.student')

@section('content')
    <div class="container py-5">
        <!---- Title --->
        <div class="row mb-4">
            <div class="col-lg-12">
                <h3 class="display-4" style="color:#000; font-size:2.4rem; font-weight:700">{{ __("Recordatorios de aprendizaje") }}</h3>
            </div>
        </div>
        <!----END Title --->
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white rounded-lg shadow-sm p-5">
                    <!---- END CREDIT CARD FORM TABS --->
                    <div class="content">
                        <div id="nav-tab-card" class="tab-pane fade show active">
                            <h3 style="color:#000; font-size:1.2rem; font-weight:700">{{ __("Eventos del calendario") }}</h3>
                            <p class="d-cred">
                            Aprender un poco cada día marca la diferencia. Hay estudios que muestran que los estudiantes que hacen del aprendizaje un hábito tienen una mayor probabilidad de alcanzar sus objetivos. Reserva tiempo para aprender y recibe recordatorios con la herramienta de planificación del aprendizaje.
                            </p>
                            <div class="ud-text-xs learning-tools--subtext--1OQeA">Se requiere Google Calendar, el Calendario de Apple o Outlook</div>
                            <button type="button" data-purpose="create-reminder-button" class="ud-btn ud-btn-large ud-btn-brand ud-heading-md learning-tools--create-button---KU8H"><span>Programa un tiempo de aprendizaje</span><svg aria-hidden="true" focusable="false" class="ud-icon ud-icon-small">+</svg></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
