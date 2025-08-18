@extends('template.layout.master')
@section('body')
@php
    $content = \App\Models\Settings::where('key', 'page_about')->first();
@endphp
@if($content->value)
    <div style="margin: 0 50px">
        {!! $content->value !!}
    </div>
@endif

@endsection
