<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();
        if (request()->get('status')){
            switch (request()->get('status')) {
                case 'pending':
                    $orders = $orders->where('status', 'pending');
                break;
                case 'delivered':
                    $orders = $orders->where('status', 'delivered');
                break;
            }
        }
        if (request()->get('paid') == 1) {
            $orders = $orders->where('paid', 1);
        }

        return view('dashboard.orders', compact('orders'));
    }
}
