@extends('layout.app')
@section('content')
<table class="table">
  <tr>
    <th scope="col">Number of camping</th>
    <th scope="col">Number of spots remaining</th>
  </tr>
    @foreach($campingspots as $campingspot)
    <tr>
    <th scope="row"><a href="/campingspots/{{$campingspot->id}}/edit">{{$campingspot->id}}</a></td>
    <td>{{$campingspot->spotsremaining}}</td>
    </tr>
    @endforeach
</table>
@endsection
