<html>
<head></head>
<body>
<h1>Order details</h1>
<img src="https://i.imgur.com/Tp2booj.png">
@isset($data['ticket'])
<h3>Welcome to the event of TourCon</h3>
<p>User ID: {{ $data['user_id']}}</p>
<p>Username: {{ $data['user_name']}}</p>
<p>Ticket ID: {{ $data['ticket']}}</p>
<p>Card name: {{ $data['cardname']}}</p>
<p>Card number: {{ $data['cardnumber']}}</p>
<p>Order ID: {{ $data['order']}}</p>
<p>Price: {{ $data['price']}}</p>
@endisset
@isset($data['campingspot'])
<h3>Enjoy your stay at our campingspots!</h3>
<p>User ID: {{ $data['user_id']}}</p>
<p>Username: {{ $data['user_name']}}</p>
<p>Campingspot ID: {{ $data['campingspot']}}</p>
<p>Card name: {{ $data['cardname']}}</p>
<p>Card number: {{ $data['cardnumber']}}</p>
<p>Order ID: {{ $data['order']}}</p>
<p>Price: {{ $data['price']}}</p>
@endisset
@isset($data['account_money'])
<h3>Event money purchased</h3>
<p>User ID: {{ $data['user_id']}}</p>
<p>Username: {{ $data['user_name']}}</p>
<p>Card name: {{ $data['cardname']}}</p>
<p>Card number: {{ $data['cardnumber']}}</p>
<p>Amount of event_money: {{ $data['account_money']}}</p>
@endisset
@isset($dataA['email'])
<h3>Welcome to our Event</h3>
<p>Thank you for registering and most probably participating in our event of TourCon - Video Games<p>
<p>Hope you have a good time</p>
<p>With regards,</p>
<p>The TourCon team</p>
@endisset

<img src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/pbe-registration/en_US/51b12a4705a481528f9d86ee185e40acaa4e6720/assets/img/heimerdinger.jpg">
</body>
</html>
