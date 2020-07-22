@extends('layouts.app')

@section('content')
    <!--==========================
      Show cars Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

            <div class="container">
              <div class="section-header">
                <h2>The Cars</h2>
                <p>Her are some Of The Car</p>
              </div>
      
              <div class="row">
      

                @foreach ($car as $allcar)
             
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                    <a href="details/{{ $allcar->id }}">
                    <img src="img/car/{{ $allcar->photo1 }}" alt="Hotel 1" class="img-fluid">
                    </a>
                    </div>
                  <h3><a href="details/{{ $allcar->id }}">{{ $allcar->name }}</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  <h3><p>{{ Str::substr($allcar->des, 0, 30) }}
                      <b><a href="details/{{ $allcar->id }}">more...</a></b></p>
                  </h3>
                  </div>
                </div>
                                
                
                @endforeach


      
              </div>
            </div>
      
          </section>
@endsection