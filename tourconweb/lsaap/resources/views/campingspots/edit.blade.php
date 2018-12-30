{!! Form::open(['action'=>['CampingspotController@update', $campingspot->id] , 'method'=>'POST']) !!}
<div class="form-group">
        @for ($i=0; $i < 6; $i++)
        <input type="text" name="emails[{{ $i }}]" value="{{$i}}">
@endfor
</div>
<div>
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
{!! Form::close() !!}

{!! Form::open(['action'=>['CampingspotController@destroy', $campingspot->id] , 'method'=>'POST', 'class'=>'float-right', 'id'=>"editanddelete"]) !!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}
