@extends('layout.app')
@section('content')



      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Here you can buy a ticket for our event</h1>


      <div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-3 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Ticket</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">55 €</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Access to the Festival</li>
                <li>Receive an event account</li>
                <li>Enter amount of tickets you would like to buy</li>
                <select>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <h1>Camping spots</h1>
      <div class="container">
          <div class="card-deck mb-3 text-center">
            <div class="card mb-3 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">Ticket</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">10€ per spot + 20€ per person</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>You can stay 1 extra day</li>
                  <li>Enter the number of the camping spot you want</li>
                  <select>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  <li>Enter amount of spots you would like to reserve</li>
                  <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>

                </ul>
              </div>
            </div>
          </div>
        </div>
      <button type="button" class="btn btn-lg btn-block btn-outline-primary"><a href="/buy">Buy</a></button>
@endsection
