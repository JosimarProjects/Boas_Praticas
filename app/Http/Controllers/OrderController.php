<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Repositories\OrderRepository;
use App\Repositories\OrderRepositoryEloquent;

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


        return view('dashboard.orders.index', compact('orders'));
    }

    public function All(OrderRepository $repository){
        return $repository->listAll(0);
    }

    public function create()
    {
        return view('dashboard.orders.create');
    }


    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());
        dd($order);
    }
}
