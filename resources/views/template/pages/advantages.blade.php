@extends('template.layout.master')
@section('body')
<section class="hero">
    <div class="hero-container">
        <h1 class="hero-title">
            <span class="hero-nexus">Our</span><span class="hero-flow">Advantages</span>
        </h1>
        {{--<p class="hero-subtitle">More than just power system studies. Intelligent Studies. Intuitive Results. Eliminate confusing and obfuscated results. Attain clarity and understanding.</p>
        <div class="hero-buttons">
            <a href="#" class="btn-primary">Our Advantages</a>
            <a href="#" class="btn-secondary">Our Services</a>
        </div>--}}
    </div>
</section>
@php
$content = \App\Models\Settings::where('key', 'page_advantages')->first();
@endphp
        @if($content->value)
            <div style="margin: 0 50px">
            {!! $content->value !!}
            </div>
        @endif
@endsection
