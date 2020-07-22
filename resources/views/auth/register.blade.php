@extends('layouts.app')

@section('content')
<section id="contact" class="section-bg wow fadeInUp">

        <div class="container">
  
         
            <div class="section-header">
                <h2>Register</h2>
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
  
          <div class="form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
           <div class="form-row">
                <div class="form-group col-md-6">
                        <input id="name" placeholder="Name..." type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>


                <div class="form-group col-md-6">
                        <input id="email" placeholder="E-mail..." type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

<!-----------------------------------password---------------------------------------------------->

                <div class="form-group col-md-6">
                        <input id="password" placeholder="Password..." type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            

                <div class="form-group col-md-6">
                        <input id="password-confirm" placeholder="Password-Confirm..." type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    
                <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                                <button type="submit">{{ __('Register') }}</button>
                        </div>
                    </div>

                </div>

            </form>
          </div>
  
        </div>
      </section><!-- #contact -->
    
@endsection
