@extends('layout.app')
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h1 class="display-4">Log in</h1>
</div>
<form class="form-signin">
        <div class="container center_div">
            
        <div class="form-label-group">
                <label for="inputuser">Username</label>
          <input type="username" id="inputuser" class="form-control" placeholder="Username" required autofocus>
          
        </div>

        <div class="form-label-group">
              <label for="inputuserid">User ID <span class="text-muted">Received by e-mail after you buy a ticket</span></label>
                <input type="userid" id="inputuserid" class="form-control" placeholder="User id" required autofocus>
              
              </div>

        <div class="form-label-group">
             <label for="inputPassword">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
         
        </div>
  
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
        </div>
@endsection