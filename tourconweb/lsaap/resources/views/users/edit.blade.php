<h1>Add balance for {{$user->name}}</h1>
{!! Form::open(['action'=>['UserController@update', $user] , 'method'=>'POST']) !!}
<div class="form-group">
                        {{Form::label('account_money', 'Account money:')}}
                        {{Form::number('account_money', $user->account_money, ['class' => 'form-control', 'placeholder' => 'Account money'])}}
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary float-right'])}}
                {!! Form::close() !!}
        </div>


