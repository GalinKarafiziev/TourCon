@extends('layout.app')
@section('content')
<center><h1>Reserve a campingspot!</h1>
<center>{!! Form::open(['action'=>['CampingspotController@update', $campingspot->id] , 'method'=>'POST']) !!}
</div>
<div class="form-group col-md-6">
<div class="form">
    {{Form::label('Card number:')}}
    {{Form::number('cardnumber', '', ['class' => 'form-control', 'placeholder' => 'Input your card number here!'])}}
</div>
<div class="form">
    {{Form::label('Name on card:')}}
    {{Form::text('cardname', '', ['class' => 'form-control', 'placeholder' => 'Input your card name here!'])}}
</div>
<div class="form">
    {{Form::label('Expiration date:')}}
    {{Form::date('expirationdate', '', ['class' => 'form-control', 'placeholder' => 'Date of expiry!'])}}
</div>
<div class="form">
      {{Form::label('CVV:')}}
      {{Form::number('cvv', '', ['class' => 'form-control', 'placeholder' => 'Input your cvv here!'])}}
</div>
<br>
<div class="form">
{{Form::label('Emails:')}}
@for ($i=0; $i < 6; $i++)
<input type="text" name="emails[{{ $i }}]" value="">
@endfor
</div>
<br>
</div>
<br>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary float-center'])}}
{!! Form::close() !!}
<br>
<br>
<h5><b>Note:</b> The price of the campingspot is 10 euros + 20 euros for each person reserved in a group reservation!</h5>
<h5><b>Note:</b> Once you make a reservation, each user you have reserved with, can cancel his own reservation!</h5>
@endsection
