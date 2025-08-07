<!-- Footer -->
@php
$face = \App\Models\Settings::where('key', 'social_facebook')->first()->value ?? '#';
$instagram = \App\Models\Settings::where('key', 'social_instagram')->first()->value ?? '#';
$twitter = \App\Models\Settings::where('key', 'social_twitter')->first()->value ?? '#';
@endphp
<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <span class="footer-separator">•</span>
            <a href="#">Contact Support</a>
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
</body>
</html>
