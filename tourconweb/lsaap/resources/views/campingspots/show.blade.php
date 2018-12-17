

<table>
    @foreach($campingspots as $campingspot)
    <tr>
    <td><a href="/campingspots/{{$campingspot->id}}/edit">{{$campingspot->id}}</a></td>
    <td>{{$campingspot->price}}</td>
    <td>{{$campingspot->isAvailable}}</td>
    <td>{{$campingspot->spotsremaining}}</td>
    </tr>
    @endforeach
</table>
