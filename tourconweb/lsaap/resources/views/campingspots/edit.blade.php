{!! Form::open(['action'=>['CampingspotController@update', $campingspot->id] , 'method'=>'POST']) !!}
<div class="form-group">
        {{Form::label('price', 'Price:')}}
        {{Form::number('price', $campingspot->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
</div>
<div class="form-group">
        {{Form::label('total', 'Total')}}
        {{Form::number('totalprice', $campingspot->totalprice, ['class' => 'form-control', 'placeholder' => 'Months'])}}
</div>
<div class="form-group">
        {{Form::email('email','email', ['class' => 'form-control', 'placeholder' => 'Description'])}}
</div>
<div class="form-group">
        {{Form::email('email_1','email_1', ['class' => 'form-control', 'placeholder' => 'Description'])}}
</div>
<div class="form-group">
        {{Form::email('email_2','email_2', ['class' => 'form-control', 'placeholder' => 'Description'])}}
</div>
 <div class="form-group">
        {{Form::email('email_3','email_2', ['class' => 'form-control', 'placeholder' => 'Description'])}}
</div>
 <div class="form-group">
        {{Form::email('email_4','email_2', ['class' => 'form-control', 'placeholder' => 'Description'])}}
</div>
 <div class="form-group">
        {{Form::email('email_5','email_2', ['class' => 'form-control', 'placeholder' => 'Description'])}}
</div>



<div class="form-group">
        {{Form::checkbox('isAvailable', '0')}}
</div>
<div>
</div>
<div class="form-group">
        {{Form::checkbox('spotsremaining', '0')}}
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
{!! Form::close() !!}

