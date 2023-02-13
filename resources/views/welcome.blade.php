@extends('layouts.learning')

@section('hero')
    @include('partials.learning.hero')
@endsection

@section('content')

    @include('partials.learning.function')

    @include('partials.learning.academy')

    @include('partials.learning.categories')

@endsection
