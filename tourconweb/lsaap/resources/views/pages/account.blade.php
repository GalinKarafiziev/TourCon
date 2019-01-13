@extends('layout.app')
@section('content')
<div class="container center_div2">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your Profile</h4>
                        <table>
                          <tr>
                            <td><b>Username:    <b></td>
                            <td>{{Auth::user()->name}}</td>
                          </tr>
                          <tr>
                            <td><b>Email: <b></td>
                            <td>{{Auth::user()->email}}</td>
                          </tr>
                          <tr>
                            <td><b>Your Ticket ID: <b></td>
                            <td>{{Auth::user()->ticket->id}}</td>
                          </tr>
                          <tr>
                            <td><b>Account balance: <b></td>
                              <td>{{Auth::user()->account_money}}</td>
                          </tr>
                        </table>
                        <p>
                          <p>

<h5><center>Wondering whether you are going to get sleepy? We have you backed, reserve a campingspot now with one click!</center></h3>
<center><a href="/campingspots/index" class="btn btn-primary" id="editanddelete">Reserve Campingspot</a></center>
<p>
<h5><center>Do not forget to purchase money for the event!<center><h5>
<center><a href="/users/{{Auth::user()->id}}/edit" class="btn btn-primary" id="editanddelete">Purchase event-currency</a><center>

@endsection
