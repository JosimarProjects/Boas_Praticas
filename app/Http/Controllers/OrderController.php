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
            if (!empty(request()->get('status')))
                $query->status(request()->get('status'));

            if (request()->get('paid') == 1)
                $query->paid();
        })->get();


        return view('dashboard.orders', compact('orders'));
    }
}
