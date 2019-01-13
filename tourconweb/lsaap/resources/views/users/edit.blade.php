@extends('layout.app')
@section('content')

<center><h1>Add balance for {{$user->name}}</h1>
<center>{!! Form::open(['action'=>['UserController@update', $user] , 'method'=>'POST']) !!}
<div class="form">
  <div class="form-group col-md-6">
{{Form::label('account_money', 'Account money:')}}
{{Form::number('account_money', '', ['class' => 'form-control', 'placeholder' => 'Account money'])}}
<br>
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
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
{!! Form::close() !!}
        </div>
      </div>
@endsection
