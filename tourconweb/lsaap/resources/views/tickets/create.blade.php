<h1>Make an ticket</h1>
{!! Form::open(['action'=>'TicketController@store', 'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('price', 'Price:')}}
    {{Form::number('price', '55', ['class' => 'form-control', 'placeholder' => '55'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
{!! Form::close() !!}
