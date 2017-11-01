  <!DOCTYPE html>
  <html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
	   @include ('layouts.header')
    
  </head>

<body>

    @include ('layouts.nav')
          
              <div class="container">
                  @yeild('content')
              </div>

	   @yield('content')
     
    @include ('layouts.footer')
  
</body>
</html>
