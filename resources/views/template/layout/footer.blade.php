<!-- Footer -->
@php
$face = \App\Models\Settings::where('key', 'social_facebook')->first()->value ?? '#';
$instagram = \App\Models\Settings::where('key', 'social_instagram')->first()->value ?? '#';
$twitter = \App\Models\Settings::where('key', 'social_twitter')->first()->value ?? '#';
@endphp
<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="{{ route('pages.policy') }}">Privacy Policy</a>
            <span class="footer-separator">•</span>
            <a href="{{ route('pages.contact') }}">Contact US</a>
        </div>
        <div class="footer-social mt-3">
            <a href="{{ $instagram }}" class="footer-social-icon"><i class="fab fa-instagram"></i></a>
            <a href="{{ $twitter }}" class="footer-social-icon"><i class="fab fa-twitter"></i></a>
            <a href="{{ $face }}" class="footer-social-icon"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Contempus Engineering. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="{{ asset('template/js/templatemo-nexus-scripts.js') }}"></script>
<!-- Load the reCAPTCHA API -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcwYKorAAAAAK35giOXDR3HyqHAEi8PkwzJ5lMv"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LcwYKorAAAAAK35giOXDR3HyqHAEi8PkwzJ5lMv', {action: 'contact'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>

</body>
</html>
