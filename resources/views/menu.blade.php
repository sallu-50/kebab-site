@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-6">Our Menu</h1>

        <form action="{{ route('menu') }}" method="GET" class="mb-6">
            <label for="location" class="mr-2">Select Location:</label>
            <select name="location" id="location" onchange="this.form.submit()">
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}" {{ $selectedLocationId == $location->id ? 'selected' : '' }}>
                        {{ $location->name }}
                    </option>
                @endforeach
            </select>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($categories as $category)
                <div>
                    <h2 class="text-xl font-bold mb-4">{{ $category->name }}</h2>
                    <div class="space-y-4">
                        @foreach ($category->menuItems as $item)
                            <div class="flex justify-between">
                                <span>{{ $item->name }}</span>
                                @if ($item->locationPrices->isNotEmpty())
                                    <span>{{ number_format($item->locationPrices->first()->price, 2) }} zł</span>
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="menu_item_id" value="{{ $item->id }}">
                                        <input type="hidden" name="location_id" value="{{ $selectedLocationId }}">
                                        <button type="submit" class="bg-primary hover:bg-primary-dark text-white px-3 py-1 rounded">Add to Cart</button>
                                    </form>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
