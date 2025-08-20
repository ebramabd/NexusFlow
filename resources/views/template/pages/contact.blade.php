@extends('template.layout.master')
@section('body')

    <section class="contact fade-up" id="contact" style="margin-top: 60px">
        <div class="contact-container">
            <div class="section-header">
                <h2 class="section-title">Contact Us Today</h2>
                <p class="section-subtitle">We’re here to help you make sense of your electrical system and maximize your investment, not to submit thousands of pages of data and walk away. Let us help bring clarity, understanding and relief to your facilities team!</p>
            </div>

            <div class="contact-form-wrapper">
                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    @if(session('success'))
                        <div class="alert alert-success">
                            <span class="alert-icon">✔</span>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <span class="alert-icon">⚠</span>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


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

<section class="hero">
    <div class="hero-container" >
        <div class="contact-card">
            <h3>Our Address</h3>
            <p>
                4515 S McClintock Dr<br>
                Suite 115<br>
                Tempe, AZ 85282
            </p>
            <h3>Telephone</h3>
            <p>
                <a style="cursor: default;">(480) 227-4105</a>
            </p>
        </div>
    </div>
</section>
@endsection


