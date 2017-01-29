@extends('api-search:layout')

@section('content')

<h1>Laravel API</h1>

<div class="pure-menu custom-restricted-width">
    <span class="pure-menu-heading">Helper Functions</span>

    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="/api/laravel42/helpers" class="pure-menu-link">Laravel 4.2</a></li>
        <li class="pure-menu-item"><a href="/api/laravel50/helpers" class="pure-menu-link">Laravel 5.0</a></li>
        <li class="pure-menu-item"><a href="/api/lumen50/helpers" class="pure-menu-link">Lumen 5.0</a></li>
    </ul>
</div>

@stop
