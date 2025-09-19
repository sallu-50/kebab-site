<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Location;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Przelewy24\Przelewy24;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function add(Request $request)
    {
        $menuItemId = $request->input('menu_item_id');
        $locationId = $request->input('location_id');

        $menuItem = MenuItem::findOrFail($menuItemId);
        $location = Location::findOrFail($locationId);

        $price = $menuItem->locationPrices()->where('location_id', $locationId)->first()->price;

        $cart = session()->get('cart', []);

        if(isset($cart[$menuItemId])) {
            $cart[$menuItemId]['quantity']++;
        } else {
            $cart[$menuItemId] = [
                "name" => $menuItem->name,
                "quantity" => 1,
                "price" => $price,
                "image" => $menuItem->image,
                "location" => $location->name
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return redirect()->back();
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return redirect()->back();
    }

    public function placeOrder(Request $request, Przelewy24 $przelewy24)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email',
        ]);

        $cart = session()->get('cart');

        if(empty($cart)) {
            return redirect()->route('menu')->with('error', 'Your cart is empty!');
        }

        $order = DB::transaction(function () use ($request, $cart) {
            $totalAmount = array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart));

            $order = Order::create([
                'customer_name' => $request->name,
                'customer_address' => $request->address,
                'customer_phone' => $request->phone,
                'customer_email' => $request->email,
                'total_amount' => $totalAmount,
                'status' => 'pending',
            ]);

            foreach ($cart as $id => $details) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_item_id' => $id,
                    'quantity' => $details['quantity'],
                    'price' => $details['price'],
                ]);
            }

            session()->forget('cart');

            return $order;
        });

        // Initiate P24 transaction
        $transaction = $przelewy24->transactions()->register(
            sessionId: $order->id, // Use order ID as session ID
            amount: (int) ($order->total_amount * 100), // Amount in cents
            description: 'Order from Kebab House',
            email: $order->customer_email ?? 'customer@example.com',
            urlReturn: env('P24_URL_RETURN'),
            urlStatus: env('P24_URL_STATUS'),
        );

        return redirect()->away($transaction->redirectUrl());
    }
}
