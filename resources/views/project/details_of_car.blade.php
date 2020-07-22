@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">    
<div class="col-lg-6 col-md-6">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
            <img class="slide-image" src="http://localhost:8000/img/car/{{ $detcar->photo1 }}" alt="">
            </div>
            <div class="item">
                <img class="slide-image" src="http://localhost:8000/img/car/{{ $detcar->photo2 }}" alt="">
            </div>
            <div class="item">
                <img class="slide-image" src="http://localhost:8000/img/car/{{ $detcar->photo3 }}" alt="">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>


<div class="col-lg-6 col-md-6">  

    <div class="col-lg-6">
        <h2>About The {{ $detcar->name }}</h2>
            <p>{{ $detcar->des }}</p>
        </div>


        <div class="col-lg-3">
            <h3>Where</h3>
            <p>Downtown Conference Center, New York</p>
        </div>


        <div class="col-lg-3">
        <h3>When</h3>
        <p>Monday to Wednesday<br>10-12 December</p>
        </div>

        <div class="col-lg-12">
        <div class="col-lg-6">
            <a href="#" class="btn btn-primary bay">
                   ${{ $detcar->price }}</a>
        </div>


        <div class="col-lg-6">
                <a href="#" class="btn btn-primary mony">
                 Bay Now</a>
            </div>
        </div>
 </div>




<div class="col-lg-12" style="margin-top: 10px;">  
<section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>About The {{ $detcar->name }}</h2>
              <p>{{ $detcar->des }}</p>
            </div>
          </div>
        </div>
      </section>
</div>


</div>
</div>
  @endsection