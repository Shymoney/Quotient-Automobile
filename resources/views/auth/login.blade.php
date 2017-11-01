@include('layouts.header')

@yield('content')
    <body class="bg">
    <div class="container">
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
        <div class="login-wrap text-center">
          <div class="panel panel-default">
            <div class="panel-heading"><a href="#"><img src="../images/logo-white-2.png" class="img-responsive"></a></div>
            <div class="panel-body">
              <h4 class="text-muted">Login to your Quotient Automobile account</h4>
              <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> &nbsp; Connect with Facebook</a>
              <div class="hr-text"><span>OR</span></div>

                <form method="POST" action="#">
                      {{ csrf_field()}}

                <div class="form-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email or Number" required="" autofocus="" />   
                    <!---what is happening here-->
                  @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>
                                {{ $errors->first('name') }}
                            </strong>
                            </span>
                @endif
                </div>

                <div class="form-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="" autofocus="" /> 
                  <!---what is happening here-->    
                  @if($errors->has('password'))
                        <span>
                            <strong>
                                {{ $errors->first('password')}}
                            </strong>
                        </span>

                  @endif

                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6 checkbox text-left ">
                      <label class="text-muted">
                        <input type="checkbox" id="remember" name="remember" value="yes" /> Remember me
                      </label>
                    </div>
                    <div class="col-sm-6 forgot-link text-right">
                      <a href="#">I've forgotten my password</a></div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Get Started Now</button>
              </form>            </div>
          </div>
          <a href="{{ ('/signup')}}" class="ftlink">Not a member yet? <span>Sign up now!</span></a>
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