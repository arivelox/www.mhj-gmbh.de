@extends('layout.master')
@section('head')
    <title>@yield('blog-title') - {{config('app.name')}}</title>
@endsection
@section('content')
    @yield('blog-content')
    <div class="text-center">
        <time>
            <small>@yield('blog-date')</small>
        </time>
    </div>
@endsection