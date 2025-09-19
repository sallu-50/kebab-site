<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Przelewy24\Przelewy24;
use App\Models\Order;

class PaymentController extends Controller
{
    public function p24Return(Request $request, Przelewy24 $przelewy24)
    {
        try {
            $przelewy24->transactions()->verify(
                sessionId: $request->input('p24_session_id'),
                amount: $request->input('p24_amount'),
                orderId: $request->input('p24_order_id'),
            );

            $order = Order::find($request->input('p24_session_id'));
            if ($order) {
                $order->status = 'completed';
                $order->save();
            }

            return redirect()->route('home')->with('success', 'Payment successful and order placed!');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Payment verification failed: ' . $e->getMessage());
        }
    }

    public function p24Status(Request $request, Przelewy24 $przelewy24)
    {
        try {
            $webhook = $przelewy24->handleWebhook($request->all());

            if ($webhook->isSignValid(config('przelewy24.crc'))) {
                $order = Order::find($webhook->sessionId());
                if ($order) {
                    $order->status = 'completed';
                    $order->save();
                }
            }

            return response('OK', 200);
        } catch (\Exception $e) {
            return response('Error: ' . $e->getMessage(), 500);
        }
    }
}
