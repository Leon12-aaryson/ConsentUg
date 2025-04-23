@extends('layouts.main')
@section('title', 'Home - Consent Uganda')
<div class="header">
    <div class="home">
        <div class="container">
            <h3>Consumer protection and safety</h3>
            <p>Consent prioritizes safety first, ensuring your food is secure and ethical representation of consumers
            </p>
        </div>
    </div>
</div>
@section('body')
    <div class="container">
        <div class="welcome">
            <h1>Welcome to Consent Uganda</h1>
            <h3 class="h4">We focus on consumer challenges</h3>
            <p class="mt-4">We strategically empower consumer in Uganda and foster engagement among stakeholders to ensure
                access to
                quality products and comprehensive policies. Through promoting consumer participation in policy formulation
                and collaboration with diverse organizations, including government agencies, civil society, and business
                associations, we strive for a safer, fairer, and more honest marketplace.
            </p>
            <div class="do-links">
                <a href="how-we-work">Read More <span><i class="bx bxs-chevron-right"></i></span></a>
            </div>
        </div>
        <div class="approach">
            <div class="approach-title">
                <h1 class="text-center">Our Approach</h1>
                <h3 class="h4">Strategic programs</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="approach-info">
                            <h3>Empowering Consumers: Embracing Justice and Equal Rights through awareness and advocacy</h3>
                            <p>Empowering consumers, ensuring access to justice. Through awareness, advocacy, and a focus on
                                equity, we foster a consumer-friendly environment.</p>
                            <div class="do-links">
                                <a href="consumer-empowerment">Read More <span><i
                                            class="bx bxs-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="approach-info">
                            <h3>Nurturing Sustainable AgriFood Systems that promote access to quality and safe food.</h3>
                            <p>Our focus is on building sustainable AgriFood systems that promote access to quality and safe
                                food, nutrition, and sustainable consumption and production practices.</p>
                            <div class="do-links">
                                <a href="agrifood-systems">Read More <span><i class="bx bxs-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="approach-info">
                            <h3>Empowering sustainable trade and economics that ensure access to quality and safe products
                            </h3>
                            <p>Our aim is to foster sustainable trade and economics that ensure access to quality and safe
                                products, socio-economic justice, and sustainable consumption and production practices.</p>
                            <div class="do-links">
                                <a href="sustainable-trade">Read More <span><i class="bx bxs-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="events">
            <h1 class="mb-2 text-center">Upcoming Events</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="images/consumerrights.png" alt="Event 1" class="event-img">
                        <div class="event-info">
                            <h3>World Consumer Rights Day</h3>
                            {{-- <p>Event 1 description</p> --}}
                            <div class="do-links">
                                <a href="">Read More <span><i class="bx bxs-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="images/foodday.jpg" alt="Event 2" class="event-img">
                        <div class="event-info">
                            <h3>World Food Day</h3>
                            {{-- <p>Event 2 description</p> --}}
                            <div class="do-links">
                                <a href="">Read More <span><i class="bx bxs-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="images/exhib.jpg" alt="Event 3" class="event-img">
                        <div class="event-info">
                            <h3>Consumer Exhibition</h3>
                            {{-- <p>Consumer Exhibition</p> --}}
                            <div class="do-links">
                                <a href="">Read More <span><i class="bx bxs-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners py-5">
            <h1 class="mb-4">Our Partners</h1>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                <a href="#"><img src="images/afrifoods.jpg" alt="Afrifoods" class="partner-logo"></a>
                <a href="https://foscu.org" target="_blank"><img src="images/foscu.jpg" alt="Foscu"
                        class="partner-logo"></a>
                <a href="https://www.rikolto.org/" target="_blank"><img src="images/rikolto.png" alt="Rikolto"
                        class="partner-logo"></a>
                <a href="#"><img src="images/Biovision.png" alt="Biovision" class="partner-logo"></a>
                <a href="#"><img src="images/CGAlogo.png" alt="CGA Logo" class="partner-logo"></a>
                <a href="http://" target="_blank" rel="noopener noreferrer"></a>
            </div>
        </div>

        <div class="newsletter">
            <h3>Subscribe to our newsletter</h3>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-newsletter">Subscribe</button>
            </form>
        </div>
    </div>
@endsection
