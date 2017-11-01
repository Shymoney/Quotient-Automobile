
@include ('layouts.header')
@include('layouts.nav')
	
		@yield('content')
		<div class="container">
      <h1 class="text-center">Connecting car owners with<br>Genuine and experienced Mechanics who can fix their cars </h1>
      <form method="get" action="#" id="ride_search_form">
      <div class="main-form row">
        <div class="col-md-offset-2 col-md-8 col-sm-offset-1">
          <label for="">FIND A GENUINE MECHANIC OR CAR ACCESSORIES </label>
        </div>
        <div class="col-md-offset-2 col-md-3 col-sm-offset-1 col-sm-4">
          <input type="text" class="form-control from-input" name="from"  placeholder="From">
        </div>
        <div class="col-md-3 col-sm-4">
          <input type="text" class="form-control to-input" name="to" id="search_to_inp" placeholder="To">
        </div>
        <div class="col-md-2 col-sm-2">
          <button type="submit" class="btn btn-primary btn-block">Find</button>
        </div>
        
      </div>
      </form>
      <div class="row">
          <div class="row hidden-sm hidden-xs">
              <div class="col-md-4 trans-wrap">
              <div class="trans-bg">
                <a href="#">
                  <div class="place-wrap">
                    <span class="from">Surulere</span>
                    <span class="to">Lekki</span>
                      </div>
                  <div class="t-price">
                    <p>Prices from &#8358; 250</p>
                  </div>
                </a>
              </div>
            </div>

              <div class="col-md-4 trans-wrap">
              <div class="trans-bg">
                <a href="#">
                  <div class="place-wrap">
                    <span class="from">Ilesa</span>
                    <span class="to">Ojodu Berger</span>
                      </div>
                  <div class="t-price">
                    <p>Prices from &#8358; 1300</p>
                  </div>
                </a>
              </div>
            </div>

              <div class="col-md-4 trans-wrap">
              <div class="trans-bg">
                <a href="#">
                  <div class="place-wrap">
                    <span class="from">Kaduna</span>
                    <span class="to">Abuja</span>
                      </div>
                       <div class="t-price">
                    <p>Prices from &#8358; 500</p>
                  </div>
                </a>
              </div>
            </div>
              
          </div>
      </div>
    </div>
  </div>

<section class="review-wrap">
    <h1 class="text-center">User reviews</h1>
    <div class="container">
      <div class="col-sm-4">
        <div class="review-box-wrap">
          <div class="review-box">
            <img src="" class="review-photo">
            <p class="text-center"><img src="images/r-stars.png"></p>
            <p>Joel (Mechanic) is a great guy who absolutely sets out making sure you are comfortable with him. It was a pleasant experience (thanks to him), he was able to identify the problem with my car and fixed it.</p>
          </div>
          <p class="text-center">
            <br>- Review by Fatimah S.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="review-box-wrap">
          <div class="review-box">
            <img src="" class="review-photo">
            <p class="text-center"><img src="images/r-stars.png"></p>
            <p>This guy is really hillarious We had fun talking about various topics ranging from Automoblie accessories to music to women (big grin).</p>
          </div>
          <p class="text-center">
            <br>- Review by Taiwo F.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="review-box-wrap">
          <div class="review-box">
            <img src="" class="review-photo">
            <p class="text-center"><img src="images/r-stars.png"></p>
            <p>Great experience. Meachel is an Expert in automobile, he made sure my car is fully maintained without any cause for alarm. </p>
          </div>
          <p class="text-center">
            <br>- Review by Adebayo A.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="red change-color" id="how">
    <div class="container">
      <h1 class="text-center">How it works</h1>
    </div>
  </section>

  <section class="main-tabs">
    <div role="tabpanel" class="tab-bg">
      <div class="container">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
              <span class="hidden-xs">Need an Experience Mechanic?</span>
              
            </a>
          </li>
          <li role="presentation">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
              <span class="hidden-xs">Need car accessories?</span>
              
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="tb-img"><img src="img/find-ride.png"></div>
                <div class="tb-cont">
                  <h3>Find a ride</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tb-img"><img src="img/book-seat.png"></div>
                <div class="tb-cont">
                  <h3>Book a ride</h3>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="tb-img"><img src="img/travel-together.png"></div>
                <div class="tb-cont">
                  <h3>Enjoy Your Trip</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tb-img"><img src="img/pay-driver.png"></div>
                <div class="tb-cont">
                  <h3>Pay and Enjoy Your Trip</h3>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="tb-img"><img src="img/offer-ride.png"></div>
                <div class="tb-cont">
                  <h3>Offer a ride</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tb-img"><img src="img/book-seat.png"></div>
                <div class="tb-cont">
                  <h3>Complete your profile</h3>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="tb-img"><img src="img/travel-together.png"></div>
                <div class="tb-cont">
                  <h3>Accept ride requests</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tb-img"><img src="img/pay-driver.png"></div>
                <div class="tb-cont">
                  <h3>Enjoy Your Trip</h3>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     
  <!---<section class="slider-wrap">
    <div class="container text-center">
      <h1>Travel across the country for less</h1>
      <p>Share a safe pocket-friendly ride with someone going your way, and WIN BIG in our <a href="http://blog.gomyway.com/tagged/giveaway">Giveaway!</a></p>
    </div>
  </section>-->

  <section class="safety-wrap">
    <h1><a href="#"><span style="border-bottom:1px solid #fff">Trust & Safety</span></a></h1>
    <div class="container">
      <div class="col-sm-4">
        <img src="images/safety.png" width="300" class="safety-img">
      </div>
      <div class="col-sm-8">
        <p class="lead">When I heard about Quotient Automobile, I was concerned about security. But after my verification process, I was more relaxed. It's a good social networking platform. Instead of meeting the wrong people, why not find the right mechanics and spare parts dealers for your car.</p>
        <p class="lead text-right">- Adio A. (Car Owner)</p>
      </div>
    </div>
  </section>


















<!---modal section-->
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