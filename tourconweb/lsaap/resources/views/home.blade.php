@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="/users/{{$user->id}}/edit" class="btn btn-primary" id="editanddelete">Edit</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Your reservations:</p>
                    <table>
                        @foreach($orders as $order)
                    @isset($order->ticket_id)
                    <tr>
                    <td><b>Order ID:</b> {{$order->id}}</td>
                    <td><b>ordered by:</b> {{$order->user->name}}</td>
                    <td><b>ticket id:</b><a href="/tickets/{{$order->ticket->id}}/edit">{{$order->ticket_id}}</a></td>
                    @endisset
                    </tr>
                    <tr>
                    @foreach($order->campingspots as $campingspot)
                    <td><b>Order ID:</b> {{$order->id}}</td>
                    <td><b>Ordered by:</b> {{$order->user->name}}</td>
                    <td><b>Camping ID:</b> {{$campingspot->id}}</td>
                    <td><b>Price of camping spot:</b> {{$campingspot->totalprice}}</td>
                    </tr>


                    @endforeach
                    @endforeach
                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
