<footer class="py-8 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Kebab Site</h3>
                <p class="">Delicious kebabs made with fresh ingredients. Order online or visit us!</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul>
                    <li><a href="/menu" class="">Menu</a></li>
                    <li><a href="/about" class="">About Us</a></li>
                    <li><a href="/contact" class="">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Find Us</h3>
                <div class="map-placeholder bg-primary h-48 w-full rounded-md overflow-hidden">
                    <!-- Placeholder for Google Maps Embed -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.4600000000002!2d-0.1277583!3d51.5073509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7e5a1b1%3A0x8c8f6f6f6f6f6f6f!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1678901234567!5m2!1sen!2sus"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div class="border-t border-primary mt-8 pt-8 text-center text-gray-400">
            &copy; {{ date('Y') }} Kebab Site. All rights reserved.
        </div>
    </div>
</footer>
