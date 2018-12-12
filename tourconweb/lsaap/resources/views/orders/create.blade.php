<h1>Make an order</h1>
{!! Form::open(['action'=>'OrderController@store', 'method'=>'POST']) !!}
{{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
{!! Form::close() !!}
