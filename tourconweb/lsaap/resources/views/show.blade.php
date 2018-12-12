<h2>Ticket Info: </h2>
<p>{{ $ticket->id }}</p>

<h3>Ticket Belongs to</h3>
<p>{{$ticket->price}}</p>
<p>{{$ticket->order->user->name}}</p>
