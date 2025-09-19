@extends('layouts.app')


@section('content')
    <h1 class="text-2xl font-bold mb-6">Checkout</h1>
    <form class="grid gap-4 max-w-lg">
        <input type="text" placeholder="Full Name" class="border p-2 rounded">
        <input type="text" placeholder="Phone Number" class="border p-2 rounded">
        <textarea placeholder="Delivery Address" class="border p-2 rounded"></textarea>
        <select class="border p-2 rounded">
            <option>Payment Method</option>
            <option>P24 Online Payment</option>
            <option>Cash on Delivery</option>
        </select>
        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded">Place Order</button>
    </form>
@endsection
