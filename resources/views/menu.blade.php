@extends('layouts.app')


@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Menu</h1>
        <select class="border rounded p-2">
            <option>Select Location</option>
            <option>Location A</option>
            <option>Location B</option>
            <option>Location C</option>
            <option>Location D</option>
        </select>
    </div>


    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 6; $i++)
            <div class="bg-white rounded-lg shadow p-4">
                <img src="/images/menu{{ $i }}.jpg" class="w-full h-40 object-cover rounded">
                <h3 class="mt-3 font-semibold">Menu Item {{ $i }}</h3>
                <p class="text-sm text-gray-600">Delicious kebab description goes here.</p>
                <div class="mt-3 flex justify-between items-center">
                    <span class="font-bold text-red-600">{{ rand(15, 30) }} PLN</span>
                    <button class="bg-red-600 text-white px-3 py-1 rounded">Add</button>
                </div>
            </div>
        @endfor
    </div>
@endsection
