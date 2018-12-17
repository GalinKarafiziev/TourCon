@extends('layouts.app')

@section('content')
<h1>{{$order->id}}</h1>
<small>Written on {{$order->created_at}}</small>
@foreach($order->campingspots as $campingspot)
<h1>{{$campingspot->id}}</h1>
@endforeach
@endsection
