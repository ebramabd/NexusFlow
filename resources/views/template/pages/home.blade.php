@extends('template.layout.master')
@section('body')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-container">
        <h1 class="hero-title">
            <span class="hero-nexus">Contempus</span><span class="hero-flow">Engineering</span>
        </h1>
        <p class="hero-subtitle">More than just power system studies. Intelligent Studies. Intuitive Results. Eliminate confusing and obfuscated results. Attain clarity and understanding.</p>
        <div class="hero-buttons">
            <a href="{{ route('pages.advantages') }}" class="btn-primary">Our Advantages</a>
            <a href="{{ route('pages.services') }}" class="btn-secondary">Our Services</a>
        </div>
    </div>
</section>


<!-- Features Section -->
<section class="features fade-up" id="features">
    <div class="features-container">
        <div class="section-header">
            <h2 class="section-title">Power System Studies and Services</h2>
            <p class="section-subtitle">Explore our helpful services, and let us help you make clarity of mandated studies</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <a href="{{ route('pages.services') }}#short_circuit_studies" style="text-decoration: none;">
                    <div class="feature-icon">
                        <img src="{{ asset('template/home-img/1-Short Circuit Studies.png') }}">
                    </div>
                    <h3>Short Circuit Studies</h3>
                    <p>We perform short circuit studies in accordance with ANSI or IEC standards. We use proprietary AI tools to clarify data instead of pages of undistinguishable numbers. All data is reviewed by our Professional Engineers.</p>
                </a>
            </div>
            <div class="feature-card">
                <a href="{{ route('pages.services') }}#protective_device_coordination_studies" style="text-decoration: none;">
                    <div class="feature-icon">
                        <img src="{{ asset('template/home-img/2-Protective Device Coordination Studies.png') }}">
                    </div>
                    <h3>Protective Device Coordination Studies</h3>
                    <p>Let our experts evaluate your system and make recommendations for protective devices (fuses, circuit breakers, relays) to achieve maximum protection of your valuable equipment, and increase uptime by reducing nuisance trips.</p>
                </a>
            </div>
            <div class="feature-card">
                <a href="{{ route('pages.services') }}#arc_flash_studies" style="text-decoration: none;">
                    <div class="feature-icon">
                        <img src="{{ asset('template/home-img/3-Arc Flash Studies.png') }}">
                    </div>
                    <h3>Arc Flash Studies</h3>
                    <p>In Arc Flash Studies, maximizing safety is paramount. Let our AI tools and Professional Engineer reviewed results maximize safety and ease of testing or working on energized equipment.</p>
                </a>
            </div>
            <div class="feature-card">
                <a href="{{ route('pages.services') }}#harmonic_studies" style="text-decoration: none;">
                    <div class="feature-icon">
                        <img src="{{ asset('template/home-img/4-Harmonic Studies.png') }}">
                    </div>
                    <h3>Harmonic Studies</h3>
                    <p>High levels of harmonic distortion in power delivery can cause overheating of electrical systems and affect computer and motor loads. Let our AI powered analysis pinpoint problems and identify solutions without having you page through thousands of pages of data.</p>
                </a>
            </div>

            <div class="feature-card">
                <a href="{{ route('pages.services') }}#reliability_studies" style="text-decoration: none;">
                    <div class="feature-icon">
                        <img src="{{ asset('template/home-img/5-Reliability Studies.png') }}">
                    </div>
                    <h3>Reliability Studies</h3>
                    <p>A chain is only as strong as its weakest link. Let us perform a reliability study of your electrical system to pinpoint areas of concern, and maximize uptime of your plant or campus&rsquo; lifeblood &ndash; the electrical system!</p>
                </a>
            </div>

            <div class="feature-card">
                <a href="{{ route('pages.services') }}#Voltage_and_Motor_Starting_Studies" style="text-decoration: none;">
                    <div class="feature-icon">
                        <img src="{{ asset('template/home-img/6-Voltage and Motor Starting Studies.png') }}">
                    </div>
                    <h3>Voltage and Motor Starting Studies</h3>
                    <p>Whenever a motor starts, a voltage drop is experienced on the system. Let us mitigate problems occurring on your electrical system from the impacts of starting motors necessary to your processes.</p>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section class="contact fade-up" id="contact">
    <div class="contact-container">
        <div class="section-header">
            <h2 class="section-title">Contact Us Today</h2>
            <p class="section-subtitle">We &rsquo;re here to help you make sense of your electrical system and maximize your investment, not to submit thousands of pages of data and walk away. Let us help bring clarity, understanding and relief to your facilities team!</p>
        </div>
        <div class="hero-buttons">
            <a href="{{ route('pages.contact') }}" class="btn-primary" style="text-align: center">Contact us</a>
        </div>
        <div class="contact-form-wrapper">
        </div>
    </div>
</section>
@endsection
