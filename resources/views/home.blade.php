@extends('layouts.app')


@section('content')
    <!-- Hero Section -->
    <div class="bg-cover bg-center h-96 rounded-xl flex items-center justify-center text-white"
        style="background-image:url('/images/hero-kebab.jpg')">
        <div class="bg-gray-800 bg-opacity-50 p-6 rounded">
            <h1 class="text-4xl font-bold font-cursive">Turkish taste in every bite!</h1>
            <a href="/menu" class="mt-5 inline-block bg-primary hover:bg-primary-dark px-5 py-3 rounded text-white">Order online</a>
        </div>
    </div>


    <!-- Featured Items -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-6 font-serif">Featured Items</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('images/gallery1.jpg') }}" class="w-full h-44 object-cover rounded">
                <h3 class="mt-3 font-semibold font-serif">Tortilla</h3>
                <p class="text-sm text-gray-600">wołowina, mix sałat, sos</p>
                <div class="mt-3 flex justify-between items-center">
                    <span class="font-bold text-primary">21,00 zł</span>
                    <a href="/menu" class="bg-primary hover:bg-primary-dark text-white px-3 py-1 rounded">Add</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('images/gallery2.jpg') }}" class="w-full h-44 object-cover rounded">
                <h3 class="mt-3 font-semibold font-serif">Pita</h3>
                <p class="text-sm text-gray-600">wołowina, mix sałat, sos</p>
                <div class="mt-3 flex justify-between items-center">
                    <span class="font-bold text-primary">20,00 zł</span>
                    <a href="/menu" class="bg-primary hover:bg-primary-dark text-white px-3 py-1 rounded">Add</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('images/gallery3.jpg') }}" class="w-full h-44 object-cover rounded">
                <h3 class="mt-3 font-semibold font-serif">Bun</h3>
                <p class="text-sm text-gray-600">wołowina, mix sałat, sos</p>
                <div class="mt-3 flex justify-between items-center">
                    <span class="font-bold text-primary">25,00 zł</span>
                    <a href="/menu" class="bg-primary hover:bg-primary-dark text-white px-3 py-1 rounded">Add</a>
                </div>
            </div>
        </div>
    </div>
@endsection
