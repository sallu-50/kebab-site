@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-6">Contact Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-xl font-bold mb-4">U TURKA Kebab</h2>
                <p class="mb-2">Tadeusza Regera 3, 43-382 Bielsko-Biała</p>
                <p class="mb-2">Phone: <a href="tel:739-410-071" class="text-red-600">739 410 071</a></p>
                
                <h3 class="text-lg font-bold mt-6 mb-2">Opening hours</h3>
                <p>Monday - Sunday: 14:00 - 20:00</p>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.92648333863!2d18.982081615712!3d49.8084455291692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47169f7e3d3f3d3d%3A0x4f3d3d3d3d3d3d3d!2sU%20TURKA%20Kebab!5e0!3m2!1sen!2spl!4v1631234567890!5m2!1sen!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
