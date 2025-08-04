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

<!-- Stats Section -->
{{--<section class="stats fade-up" id="stats">
    <div class="stats-container">
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number">50K+</span>
                <span class="stat-label">Active Users</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">99.9%</span>
                <span class="stat-label">Uptime</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">500M+</span>
                <span class="stat-label">Tasks Processed</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">180+</span>
                <span class="stat-label">Countries</span>
            </div>
        </div>
    </div>
</section>--}}

<!-- Features Section -->
<section class="features fade-up" id="features">
    <div class="features-container">
        <div class="section-header">
            <h2 class="section-title">Power System Studies and Services</h2>
            <p class="section-subtitle">Explore our helpful services, and let us help you make clarity of mandated studies</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Short Circuit Studies</h3>
                <p>We perform short circuit studies in accordance with ANSI or IEC standards. We use proprietary AI tools to clarify data instead of pages of undistinguishable numbers. All data is reviewed by our Professional Engineers.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔮</div>
                <h3>Protective Device Coordination Studies</h3>
                <p>Let our experts evaluate your system and make recommendations for protective devices (fuses, circuit breakers, relays) to achieve maximum protection of your valuable equipment, and increase uptime by reducing nuisance trips.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🌐</div>
                <h3>Arc Flash Studies</h3>
                <p>In Arc Flash Studies, maximizing safety is paramount. Let our AI tools and Professional Engineer reviewed results maximize safety and ease of testing or working on energized equipment.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Harmonic Studies</h3>
                <p>High levels of harmonic distortion in power delivery can cause overheating of electrical systems and affect computer and motor loads. Let our AI powered analysis pinpoint problems and identify solutions without having you page through thousands of pages of data.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Reliability Studies</h3>
                <p>A chain is only as strong as its weakest link. Let us perform a reliability study of your electrical system to pinpoint areas of concern, and maximize uptime of your plant or campus’ lifeblood – the electrical system!</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Voltage and Motor Starting Studies</h3>
                <p>Whenever a motor starts, a voltage drop is experienced on the system. Let us mitigate problems occurring on your electrical system from the impacts of starting motors necessary to your processes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
{{--<section class="pricing fade-up" id="pricing">
    <div class="pricing-container">
        <div class="section-header">
            <h2 class="section-title">Access Levels</h2>
            <p class="section-subtitle">Choose your gateway to the future of collaboration</p>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="plan-name">Initiate</div>
                <div class="plan-price">$49</div>
                <div class="plan-period">per neural link</div>
                <ul class="plan-features">
                    <li>Basic quantum processing</li>
                    <li>5 holographic workspaces</li>
                    <li>Standard encryption</li>
                    <li>Community support matrix</li>
                    <li>Reality sync enabled</li>
                </ul>
                <a href="#" class="btn-secondary">Ascend</a>
            </div>

            <div class="pricing-card featured">
                <div class="plan-name">Nexus</div>
                <div class="plan-price">$149</div>
                <div class="plan-period">per neural link</div>
                <ul class="plan-features">
                    <li>Advanced quantum algorithms</li>
                    <li>Unlimited holo-workspaces</li>
                    <li>Quantum encryption fortress</li>
                    <li>Priority neural support</li>
                    <li>Mind-reading analytics</li>
                    <li>Hyperdrive sync protocol</li>
                </ul>
                <a href="#" class="btn-primary">Jack In</a>
            </div>

            <div class="pricing-card">
                <div class="plan-name">Transcend</div>
                <div class="plan-price">$399</div>
                <div class="plan-period">per neural link</div>
                <ul class="plan-features">
                    <li>Infinite processing power</li>
                    <li>Custom reality matrices</li>
                    <li>Temporal encryption layers</li>
                    <li>Direct neural interface</li>
                    <li>Predictive consciousness</li>
                    <li>Quantum entanglement sync</li>
                </ul>
                <a href="#" class="btn-secondary">Ascend</a>
            </div>
        </div>
    </div>
</section>--}}

<!-- Contact Section -->
<section class="contact fade-up" id="contact">
    <div class="contact-container">
        <div class="section-header">
            <h2 class="section-title">Contact Us Today</h2>
            <p class="section-subtitle">We’re here to help you make sense of your electrical system and maximize your investment, not to submit thousands of pages of data and walk away. Let us help bring clarity, understanding and relief to your facilities team!</p>
        </div>

        <div class="contact-form-wrapper">
            <form type="POST" action="#">
                <div class="contact-form">
                    <div class="form-group">
                        <label for="name">Contact Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your Name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="name@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="message">How Can We Help You</label>
                        <textarea id="message" name="message" rows="5" placeholder="Let Us Know How We Can Assist...." required></textarea>
                    </div>

                    <button type="submit" class="btn-primary btn-submit">Transmit Message</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
