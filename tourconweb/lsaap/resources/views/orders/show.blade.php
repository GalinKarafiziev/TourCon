@extends('layouts.app')

@section('content')
<h1>{{$order->id}}</h1>
<small>Written on {{$order->created_at}}</small>
@endsection
