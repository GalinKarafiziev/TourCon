@extends('layout.app')
@section('content')


<div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://eedt.org/wp-content/uploads/2018/02/Website-worship-background.jpg" alt="1" width="1100" height="650">
            <div class="carousel-caption">
              <h3>Welcome To Tourcon</h3>
              <p>Buy tickets here and join our Tourcon experience!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://cdn.mos.cms.futurecdn.net/fJdan2GkKRELdKxxT9skdk.jpg" alt="2" width="1100" height="650">
            <div class="carousel-caption">
              <h3>Join in the tournaments</h3>
              <p>If you are interested you can join and/or watch the gaming tournaments.</p>
              <button>Click here!</button>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://www.bosjuweel.nl/wp-content/uploads/2018/04/festival-tent-huren-bosjuweel-1.jpg" alt="3" width="1100" height="650">
            <div class="carousel-caption">
              <h3>You can also reserve a camping spot if you'd like to stay more than 1 day.</h3>
              <p>Learn more about it here:</p>
              <button>Learn More!</button>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
  
@endsection
  
