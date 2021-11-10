@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('orders.index',['status' => 'pending'])}}" class="btn btn-primary">Pedidos enviados</a>
    <a href="{{route('orders.index', ['status' => 'delivered'])}}" class="btn btn-warning">Pedidos pendentes</a>
    <a href="{{route('orders.index', ['paid' => 1])}}" class="btn btn-success">Pedidos pagos</a>
    <a href="{{route('orders.index')}}" class="btn btn-light">Limpar filtro</a>


    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Status</th>
                <th>Paga</th>
                <th>Código de Entrega</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->formatted_status}}</td>
                <td>{{$order->status_paid}}</td>
                <td>{{$order->track_code}}</td>
            </tr>

            @endforeach

        </tbody>
    </table>


</div>

@endsection

