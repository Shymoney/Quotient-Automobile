@include('layouts.header')

	@yield('content')
  <body class="bg">
     <div class="container">
    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
        <div class="login-wrap text-center">
          <div class="panel panel-default">
            <div class="panel-heading"><a href="#"><img src="images/logo-white-2.png" class="img-responsive"></a></div>
            <div class="panel-body">
              <h4 class="text-muted">Enter your email address or phone number below to recover your password.</h4>

                  <form method="post">  
                    <div class="form-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email or Number" />                
                  </div>

                <div class="form-group">
                  <input type="hidden" name="recover_password_csrf" value="8Vd6a5OAnEXr5eF6"/>
                  <button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
                </div>

                <div class="form-group">
                  <p><a href="#">&larr; Go Back</a></p>
                </div>
              </form>            </div>
          </div>
          <p>Not a member yet? <a href="#">Sign up now!</a></p>
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