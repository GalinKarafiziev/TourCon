@extends('layout.app')
@section('content')

<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">About us</h1>
      <p>We present to you the first ever festival event that also features live LAN party. While you listen to the music you have the opportunity to also enjoy gaming! How neat is that? You can even take part in our mini-tornaments which are formed on-spot.</p>
    </div>
  </div>
  <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="http://www.htyweb.org/wp-content/uploads/2016/07/tickets-icon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Tickets</h2>
          <p>From our website you can of course buy the tickets for the event. Buying a ticket will let you  have access to your own event account. We will send you an e-mail with your user id with which you can log in to your account and to our app.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Download App&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="https://www.zip06.com/Assets/images/icons/scene/festival-icon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Camping</h2>
          <p>You can  book a camping spot by choosing a free camping spot
              on the website. Every spot can be booked for at most 6 persons. To make such reservation, the visitor should
              specify all participants. You can only make a reservation for the whole weekend; not for a single day.</p>
          <p><a class="btn btn-secondary" href="/tickets/create" role="button">Buy ticket &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e0/WPVG_icon_2016.svg/1024px-WPVG_icon_2016.svg.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Gaming</h2>
          <p>In addition to buying a ticket you get the free opportunity to play games in the event. You can join our LAN party or be competitive and join our tornaments or just chill and spectate. </p>

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


@endsection
