<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kebab House</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="font-bold text-xl text-red-600">Kebab House</a>
            <nav class="space-x-6">
                <a href="/menu" class="hover:text-red-600">Menu</a>
                <a href="/about" class="hover:text-red-600">About Us</a>
                <a href="/cart" class="hover:text-red-600">Cart</a>
            </nav>
        </div>
    </header>


    <!-- Main -->
    <main class="max-w-6xl mx-auto p-6">
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-200 mt-10">
        <div class="max-w-6xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">
            <div>
                <h3 class="font-bold mb-2">Kebab House</h3>
                <p class="text-sm">Delicious kebabs served fresh at four locations.</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Quick Links</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="/menu" class="hover:text-white">Menu</a></li>
                    <li><a href="/about" class="hover:text-white">About</a></li>
                    <li><a href="/cart" class="hover:text-white">Cart</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Contact</h3>
                <p class="text-sm">Phone: +48 123 456 789</p>
                <p class="text-sm">Email: info@kebabhouse.com</p>
            </div>
        </div>
        <div class="text-center text-xs py-4 bg-gray-800">© 2025 Kebab House. All rights reserved.</div>
    </footer>
</body>

</html>
