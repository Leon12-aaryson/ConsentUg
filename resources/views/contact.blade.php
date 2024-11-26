@extends('layouts.main')
@section('title', 'Contact')
<div class="header">
    <div class="contact">
        <div class="container">
            <h3>Get In Touch</h3>
            <p>Contact Us</p>
        </div>
    </div>
</div>
@section('body')
    <div class="container p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="sects container">
            <h1>Empower tomorrow, Consume Today! <br> Consent's Movement for a Just World</h1>
            <p class="mt-4">
                Consent is a driving force for consumer sustainability, protection, and advocacy. With integrity, resolve,
                and zeal, we partner with businesses and policymakers to promote ethical practices and enact pro-people
                policies. Be empowered, make informed choices, and help shape a sustainable, socially equitable future. Join
                our dynamic social enterprise now and create positive change for present and future generations.</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Our Mission</h4>
                <p>To champion a sustainable, socially informed, equitable and just consumer world, where every consumer is
                    empowered, respected, enjoys quality of life, gets value for money, participates and advocate for good
                    governance.</p>
                <h4>Our Vision</h4>
                <p>Consent strives for a consumer world where everyone has access to safe, quality and sustainable goods and
                    services.</p>
            </div>
            <div class="col-md-6">
                <h4>Contact us to fuel the movement towards a better, more just consumer world!</h4>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
