@extends('layout.app')
@section('content')
<div class="container center_div2">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                          <div class="form-group row">
                            <label for="username" class="col-4 col-form-label">Username</label> 
                            <div class="col-8">
                              <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">First Name</label> 
                            <div class="col-8">
                              <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                            <div class="col-8">
                              <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                            </div>
                          </div>
                         
                         
                          <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label> 
                            <div class="col-8">
                              <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                            </div>
                          </div>
     
                         <div class="form-group row">  
                        <label class="col-4 col-form-label">Bought tickets: </label>
                        <div class="col-8">
                      
                       
                                <input id="newpass" name="newpass" placeholder="Bought Tickets" class="form-control here" type="text">
                              </div>
                         </div>
                            
                        <div class="offset-4 col-8">
                        <button type="button" class="btn btn-danger btn-md">Cancel your ticket</button>
                        </div>
                        <br>
                       <div class="form-group row">
                            <label  class="col-4 col-form-label">Reserved camping spots: </label>
                        <div class="col-8">
                                <input id="newpass" name="newpass" placeholder="Reserved camping spots" class="form-control here" type="text">
                              </div>
                       </div>
                        <div class="offset-4 col-8">
                        <button type="button" class="btn btn-danger btn-md">Cancel your camping spot reservation</button>
                        </div>
                    </form>
                    <br>
                    <div class="col-4">
                    <button type="button" class="btn btn-success btn-md">Check account balance</button>
                    <button type="button" class="btn btn-danger btn-md">Log out</button>
                    </div>
                </div>
                    
             
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection