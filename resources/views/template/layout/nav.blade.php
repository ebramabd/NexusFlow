<!-- Navigation -->
@php
$logo = \App\Models\Settings::where('key','logo')->first();
@endphp
<nav>
    <div class="nav-container">
        <a href="{{ route('pages.home') }}" class="logo">
{{--            @if($logo->value)--}}
{{--                <img src="{{asset($logo->value)}}" style="height: 100px; width: 100px; border-radius: 10px" >--}}
{{--            @else--}}
                ContempusEngineering
{{--            @endif--}}
        </a>
        {{--<div class="nav-links" style="position: absolute; right: 0; top: 20px;">
            <a href="tel:4802274105">(480)227-4105</a>
        </div>--}}

        <ul class="nav-links">
            <li><a href="{{ route('pages.services') }}">Services</a></li>
            <li><a href="{{ route('pages.advantages') }}">Our Advantages</a></li>
            <li><a href="{{ route('pages.about') }}">About Us</a></li>
            <li><a href="{{ route('pages.contact') }}">Contact</a></li>
            <li><a href="tel:4802274105">(480)227-4105</a></li>
        </ul>
        <button class="mobile-menu-button" id="mobileMenuBtn">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

<div class="mobile-menu" id="mobileMenu" style="margin-top: 70px">
    <div class="mobile-menu-header">
        <a href="#top" class="mobile-menu-logo">ContempusEngineering</a>
        <button class="mobile-menu-close" id="mobileMenuClose">✕</button>
    </div>
    <nav class="mobile-menu-nav">
        <ul>
            <li><a href="{{ route('pages.services') }}">Services</a></li>
            <li><a href="{{ route('pages.advantages') }}">Our Advantages</a></li>
            <li><a href="{{ route('pages.about') }}">About Us</a></li>
            <li><a href="{{ route('pages.contact') }}">Contact</a></li>
            <li><a href="tel:4802274105">(480) 227-4105</a></li>
        </ul>
    </nav>
</div>
