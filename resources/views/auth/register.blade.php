<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  @include('layouts.header')
  </head>
    @yield('content')
  <body class="bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
        <div class="login-wrap signupform text-center" style="margin-top:2em;">

          <div class="panel panel-default">
            <div class="panel-heading">
            <a href="{{route('index')}}"><img src="{{asset(images/logo-white-2.png) }}" class="img-responsive img-rounded">
              </a>
                </div>

            <div class="panel-body" style="padding-bottom:1em">
             <h4 class="text-muted">Signup for <strong class="text-red">FREE</strong>in just 5 seconds</h4>
              <a href="#" class="btn btn-fb">
              <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Connect with Facebook</a>
              <p class="text-muted">We don't publish anything on your wall</p>
              <div class="hr-text"><span>OR</span></div>

              <form method="post" action="{{ route('signup') }}"> 
                    {{ csrf_field() }}  

                <div class="row">
                  <div class="col-xs-6">
                    <div class="form-group">
                     <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required="" autofocus="" />                   
                      </div>
                  </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                     <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name"  required="" autofocus="" />                   
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email Address"  required="" autofocus="" />                
                  </div>

                <div class="form-group">
                  <input type="text" id="number" name="number" class="form-control" placeholder="Phone number (08XX XXX XXXX)" required=""  autofocus="" />                
                  </div>

                <div class="form-group">
                  <input type="text" id="address" name="address" class="form-control" placeholder="Address"  required="address"  autofocus="" />                
                </div>
                  

                <div class="row">
                  <div class="col-xs-6">
                    <div class="form-group">
                     <select id="gender" name="gender" class="form-control" placeholder="Gender" required="gender" autofocus="">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>                   
                       </div>
                        </div>

                 
                  </div>
                

                <div class="form-group">
                  <input type="password" id="password" name="create_password" class="form-control" placeholder="Create Password"  required="" autofocus="" />              
                    </div>

                <div class="form-group">
                  <input type="password" id="confirm_password" name="password" class="form-control" placeholder="Confirm Password" required=""  autofocus="" />              
                    </div>

                <button type="submit" class="btn btn-success btn-block btn-lg">Get Started Now</button>
                <br>
                <p class="text-muted small">By clicking "Get started now" I agree to Quotient's Automobile <a href="{{ route('terms')}}">Terms of Service</a></p>
              </form>            
              </div>
          </div>
          <a href="{{ route('login')}}" class="ftlink">Already a member? <span>Login here</span></a>
        </div>
      </div>
    </div>
  </div>

  
    <div class="modal fade" id="cs_msg_alerts" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" ></h4>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

@include('layouts.footer')
