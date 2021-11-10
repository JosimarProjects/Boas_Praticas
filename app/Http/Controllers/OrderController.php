<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::where(function ($query) {
            if (request()->get('status') == 'pending')
                $query->pending();

            if (request()->get('status') == 'delivered')
                $query->delivered();

            if (request()->get('paid') == 1)
                $query->paid();
        })->get();


        return view('dashboard.orders', compact('orders'));
    }
}
