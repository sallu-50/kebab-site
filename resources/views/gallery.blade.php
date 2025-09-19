@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-6">Gallery</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset('images/gallery1.jpg') }}" alt="Gallery image 1" class="rounded-t-lg">
            </div>
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset('images/gallery2.jpg') }}" alt="Gallery image 2" class="rounded-t-lg">
            </div>
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset('images/gallery3.jpg') }}" alt="Gallery image 3" class="rounded-t-lg">
            </div>
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset('images/gallery4.jpg') }}" alt="Gallery image 4" class="rounded-t-lg">
            </div>
        </div>
    </div>
@endsection
