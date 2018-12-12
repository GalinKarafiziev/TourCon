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
                    <tr>
                    <td><b>Order ID:</b> {{$order->id}}</td>
                    <td><b>ordered by:</b> {{$order->user->name}}</td>
                    <td><b>ticket id:</b> {{$order->ticket_id}}</td>
                    </tr>
                    @endforeach


                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
