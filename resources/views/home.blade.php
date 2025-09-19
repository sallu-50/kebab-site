@extends('layouts.app')


@section('content')
    <!-- Hero Section -->
    <div class="bg-cover bg-center h-96 rounded-xl flex items-center justify-center text-white"
        style="background-image:url('/images/hero-kebab.jpg')">
        <div class="bg-black bg-opacity-50 p-6 rounded">
            <h1 class="text-4xl font-bold">Welcome to Kebab House</h1>
            <p class="mt-3 text-lg">Authentic taste, four locations, one love ❤️</p>
            <a href="/menu" class="mt-5 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 rounded text-white">View Menu</a>
        </div>
    </div>


    <!-- Featured Items -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-6">Popular Choices</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 3; $i++)
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="/images/kebab{{ $i }}.jpg" class="w-full h-44 object-cover rounded">
                    <h3 class="mt-3 font-semibold">Kebab Item {{ $i }}</h3>
                    <p class="text-sm text-gray-600">Juicy grilled kebab with fresh veggies.</p>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold text-red-600">20 PLN</span>
                        <button class="bg-red-600 text-white px-3 py-1 rounded">Add</button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
