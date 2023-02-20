<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3 mt-0">
            <h2>{{ __("Tus cursos inscritos") }}</h2>
        </div>
    </div>
    <div class="course-warp">
        <div class="row course-items-area">
            @forelse($courses as $course)
            <!-- course -->
            <div class="mix col-lg-3 col-md-6 col-sm-6">
                <div class="course-item">
                    <div class="course-info">
                        <div class="img">
                            <img src="{{ $course->picture }}" alt="">
                        </div>
                        <div class="course-text">
                            <h5>{{ $course->title }}</h5>
                            <div class="students">{{ __(":count Estudiantes", ['count' => $course->students_count]) }}</div>
                        </div>
                        <div class="course-author">
                            <a href="{{ route("courses.show", ["course" => $course]) }}">
                                {{ __("Ir al curso") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course end -->
            @empty
            <div class="container">
                <div class="empty-results">
                    {!! __("No tienes ningún curso todavía: :link", ["link" => "<a href='".route('courses.index')."'>Ver cursos</a>"]) !!}
                </div>
            </div>
            @endforelse
        </div>

        <div class="row">
            @if(count($courses))
            {{ $courses->links() }}
            @endif
        </div>
    </div>
</section>
<!-- course section end -->
