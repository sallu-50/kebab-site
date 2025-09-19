<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kebab House</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-black text-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="logo " class="h-10 w-auto">

            </a>

            <nav class="space-x-6">
                <a href="/" class="hover:text-primary">Home</a>
                <a href="/menu" class="hover:text-primary">Menu</a>
                <a href="/promotions" class="hover:text-primary">Promotions</a>
                <a href="/about" class="hover:text-primary">About Us</a>
                <a href="/reviews" class="hover:text-primary">Reviews</a>
                <a href="/gallery" class="hover:text-primary">Gallery</a>
                <a href="/contact" class="hover:text-primary">Contact</a>
            </nav>
            <a href="/menu" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded">Order online</a>
        </div>
    </header>


    <!-- Main -->
    <main class="max-w-6xl mx-auto p-6">
        @yield('content')
    </main>


    <!-- Map Section -->
    <div class="mt-10">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.92648333863!2d18.982081615712!3d49.8084455291692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47169f7e3d3f3d3d%3A0x4f3d3d3d3d3d3d3d!2sU%20TURKA%20Kebab!5e0!3m2!1sen!2spl!4v1631234567890!5m2!1sen!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-10">
        <div class="max-w-6xl mx-auto px-4 py-8 grid md:grid-cols-4 gap-6">
            <div class="m-footer__col m-footer__col--logo">
                <a href="/" aria-label="Przejdź do strony głównej">
                    <img src="{{ asset('images/logo.png') }}" class="m-footer__logo-img" alt="U TURKA Kebab logo">
                </a>
            </div>
            <div>
                <p>Tadeusza Regera 3, 43-382 Bielsko-Biała</p>
                <p>Phone: <a href="tel:739-410-071" class="u-link-unstyled">739 410 071</a></p>
            </div>
            <div>
                <p class="u-mb5">Follow us on:</p>
                <a href="https://www.facebook.com/uturkakebab.gmail.eu/" title="Facebook" class="btn btn-primary m-icon-group__item" target="_blank" rel="noopener noreferrer">
                    Facebook
                </a>
            </div>
            <div>
                <p class="u-mb6 u-optional-content">Cash, card or fast transfer</p>
                <p class="u-mb0">
                    <a href="/menu" class="btn btn-primary btn-block">
                        Order online
                    </a>
                </p>
            </div>
        </div>
        <div class="text-center text-xs py-4 bg-gray-800">© 2025 Kebab House. All rights reserved.</div>
    </footer>
</body>

</html>
