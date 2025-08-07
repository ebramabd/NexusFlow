<!-- Navigation -->
@php
$logo = \App\Models\Settings::where('key','logo')->first();
@endphp
<nav>
    <div class="nav-container">
        <a href="{{ route('pages.home') }}" class="logo">
            @if($logo->value)
                <img src="{{asset($logo->value)}}" style="height: 60px; width: 60px">
            @else
                ContempusEngineering
            @endif
        </a>
        <ul class="nav-links">
            <li><a href="{{ route('pages.services') }}">Services</a></li>
            <li><a href="{{ route('pages.advantages') }}">Our Advantages</a></li>
            <li><a href="#stats">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        {{--<div class="nav-bottom">
            <a href="#" class="cyber-button">Access Terminal</a>
        </div>--}}
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

<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
        <a href="#top" class="mobile-menu-logo">ContempusEngineering</a>
        <button class="mobile-menu-close" id="mobileMenuClose">✕</button>
    </div>
  {{--  <div class="mobile-menu-cta">
        <a href="#" class="cyber-button">Access Terminal</a>
    </div>--}}
    <nav class="mobile-menu-nav">
        <ul>
            <li><a href="#features">Services</a></li>
            <li><a href="#pricing">Our Advantages</a></li>
            <li><a href="#stats">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</div>
