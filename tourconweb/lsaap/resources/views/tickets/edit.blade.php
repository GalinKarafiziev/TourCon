{!! Form::open(['action'=>['TicketController@destroy', $ticket->id] , 'method'=>'POST', 'class'=>'float-right', 'id'=>"editanddelete"]) !!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}
