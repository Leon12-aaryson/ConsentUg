@extends('layouts.app')
@section('title', 'About')
<div class="header">
    <div class="contact">
        <div class="container">
            <h3>About Us</h3>
        </div>
    </div>
</div>
@section('body')
    <div class="container">
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
                <form action="/contact" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
