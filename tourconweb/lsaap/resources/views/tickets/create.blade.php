@extends('layout.app')
@section('content')

<center><h1>Order a ticket!</h1>
<center>{!! Form::open(['action'=>'TicketController@store', 'method'=>'POST']) !!}
  {{csrf_field()}}
  <div class="form-group col-md-6">
<div class="form">
    {{Form::label('Card number:')}}
    {{Form::number('cardnumber', '', ['class' => 'form-control', 'placeholder' => 'Input your card number here!'])}}
</div>
<br>
<div class="form">
    {{Form::label('Name on card:')}}
    {{Form::text('cardname', '', ['class' => 'form-control', 'placeholder' => 'Input your card name here!'])}}
</div>
<br>
<div class="form">
    {{Form::label('Expiration date:')}}
    {{Form::date('expirationdate', '', ['class' => 'form-control', 'placeholder' => 'Date of expiry!'])}}
</div>
<br>
<div class="form">
      {{Form::label('CVV:')}}
      {{Form::number('cvv', '', ['class' => 'form-control', 'placeholder' => 'Input your cvv here!'])}}
</div>
<br>
{{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
{!! Form::close() !!}
</div>
<br>
<h3><b>Note: </b>The ticket is to be used by only one person!</h3>
<h3><b>Note: </b>The price of the ticket is fixed 55 euros!</h3>
@endsection
