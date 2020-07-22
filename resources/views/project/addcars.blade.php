@extends('layouts.app')

@section('content')

 <!--==========================
      Add cars Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
         
            <div class="section-header">
                <h2>Add Cars</h2>
                <p>Mohamed Babiker Eisa Moka Jr.</p>
              </div>
      
              <div class="row contact-info">
      
                <div class="col-md-4">
                  <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>Umdorman Al-Sabeel Street, NY 645, SDU</address>
                  </div>
                </div>
      
                <div class="col-md-4">
                  <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+249991428909">+249 9914 28909</a></p>
                  </div>
                </div>
      
                <div class="col-md-4">
                  <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:moka1111.mmm@gmail.com">moka1111.mmm@gmail.com</a></p>
                  </div>
                </div>
      
              </div>
  
        </div>
      </section><!-- #contact -->



      <section id="subscribe">
      <div class="container">
            <form class="form-horizontal" method="post" action="newcar" enctype="multipart/form-data" >
               @csrf
                <div class="form-group">
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control"  placeholder="Name Of Car"   data-msg="Please enter at least 4 chars" value="{{ old('name') }}" required/>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="make"   placeholder="The Company Name"    data-msg="Please enter a valid The Company Name" value="{{ old('make') }}"  required /> 
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6">
                       <input type="text" name="model" class="form-control"   placeholder="Model Of The Car"   data-msg="Please enter at least 4 chars" value="{{ old('model') }}" required/>                
                    </div>
                    <div class="col-md-6">
                       <input type="number" name="qun" class="form-control"   placeholder="Quantity Available"   data-msg="Please enter The Quantity" value="{{ old('qun') }}" required/>
                    </div> 
                </div>

                    <div class="form-group">
                        <div class="col-md-6">
                                <input type="number" name="price" class="form-control"   placeholder="Enter The price"   data-msg="Please enter The price" value="{{ old('price') }}" required/> 
                            </div>
                        <div class="col-md-6">
                                <input type="file" name="photo1" class="form-control-file"     data-msg="Please enter The photo" value="{{ old('file') }}" required/>
                            </div> 
                    </div>


                    <div class="form-group">
                            <div class="col-md-6">
                                    <input type="file" name="photo2" class="form-control-file"     data-msg="Please enter The photo2" value="{{ old('file') }}" required/>
                                </div>
                            <div class="col-md-6">
                                    <input type="file" name="photo3" class="form-control-file"     data-msg="Please enter The photo3" value="{{ old('file') }}" required/>
                                </div> 
                        </div>


                    <div class="form-group">
                      <div class="col-md-12">
                        <textarea class="form-control" name="des" rows="5"   data-msg="Please write Describe for The Car" placeholder="Describe Of The Car" value="{{ old('des') }}" required></textarea>
                      </div> 
                    </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Save Data
                        </button>
                        </div>
                    </div>
                </div>

            </form>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        @if ( $message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
            <button class="close" type="button" data-dismiss="alert">x</button>
        </div>
        @endif

      </div>
    </section><!-- #contact -->

@endsection