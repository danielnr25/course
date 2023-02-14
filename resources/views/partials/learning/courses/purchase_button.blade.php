@guest
    <a href="{{ route("welcome") }}"
       class="btn btn-info btn-lg btn-block" style="background:#0a0739">
        {{ __("Crear una cuenta") }}
    </a>
@else
    @can("purchaseCourse", $course)
        <a href="{{ route("add_course_to_cart", ["course" => $course]) }}"
            class="site-btn btn-block">
            {{ __("Inscribirse") }}
        </a>
    @else
        <a href="{{ route('courses.learn', ["course" => $course]) }}"
           class="site-btn btn-block">
            {{ __("Ir al curso") }}
        </a>
    @endcan
@endguest
