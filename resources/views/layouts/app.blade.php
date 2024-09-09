<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Consent empowers consumers, advocates for their rights, and promotes ethical practices for a fair consumer world.">
    <meta name="keywords" content="Consent Uganda, blog, website, programming, Consumer protection">
    <meta name="author" content="Consent Uganda">

    {{-- Favicon --}}
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Custom styling for the app --}}
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/headers.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navwidth fixed-top navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse rouded-bottom" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="what-we-do">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="how-we-work">How We Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-4">
        @yield('body')
    </div>

    <div class="footer">
        <div class="container">
            {{-- <h4 class="text-center">Get involved today!</h4>
            <hr> --}}
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <img src="images/logo-white.png" alt="">
                    <h3>Consent UG</h3>
                    <p>Consent empowers consumers, advocates for their rights, and promotes ethical practices for a fair
                        consumer world.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#poetry">Contact</a></li>
                        <li><a href="#books">What We Do</a></li>
                        <li><a href="#events">How We Work</a></li>
                        <li><a href="#events">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="mailto:info@consentug.org"><i class="bx bxs-envelope"></i> info@consentug.org</a>
                        </li>
                        <li><a href="tel:+256 772 502441"><i class="bx bxs-phone"></i> +256 772 502441</a></li>
                        <li><a href="tel:+256 751 502441"><i class="bx bxs-phone"></i> + 256 751 502441</a></li>
                        <li><a href="https://maps.app.goo.gl/hRioGdVLtYsDYjuU8"><i class="bx bxs-map-pin"></i> Masooli,
                                Kasangati Town Council Off
                                Kampala, Kasangati Gayaza Road, Uganda</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><i class='bx bxl-facebook'></i> Facebook</a></li>
                        <li><a href="#"><i class='bx bxl-twitter'></i> Twitter</a></li>
                        <li><a href="#"><i class='bx bxl-instagram'></i> Instagram</a></li>
                        <li><a href="#"><i class='bx bxl-linkedin'></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p>&copy; @php
                        echo date('Y');
                    @endphp Global Consumer Center (Uganda). All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p>
                        Designed by <a href="https://techleon.org" target="_blank" class="leon">Aaron Leonard</a>
                    </p>
                </div>
            </div>
        </div>


        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        {{-- Custom JS --}}
        <script src="js/header.js"></script>
</body>

</html>
