@extends('layouts.app')


@section('content')
    <h1 class="text-2xl font-bold mb-6">Your Cart</h1>
    <div class="space-y-4">
        @for ($i = 1; $i <= 2; $i++)
            <div class="flex items-center justify-between bg-white p-4 rounded shadow">
                <div>
                    <h3 class="font-semibold">Menu Item {{ $i }}</h3>
                    <p class="text-sm text-gray-600">Qty: 1</p>
                </div>
                <span class="font-bold">25 PLN</span>
            </div>
        @endfor
    </div>
    <div class="mt-6 text-right">
        <div class="font-bold text-xl mb-4">Total: 50 PLN</div>
        <a href="/checkout" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded">Checkout</a>
    </div>
@endsection
