@extends('template.layout.master')
@section('body')

    <div class="hero-container" style="text-align: center">
        <h1 class="hero-title" style="margin-top: 120px">
            <span class="hero-nexus">About</span><span class="hero-flow">US</span>
        </h1>
    </div>
@php
    $content = \App\Models\Settings::where('key', 'page_about')->first();
@endphp
@if($content->value)
    <div style="margin: 0 50px">
        {!! $content->value !!}
    </div>
@endif

@endsection
